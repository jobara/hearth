<?php

namespace Tests\Feature;

use App\Models\Resource;
use App\Models\ResourceCollection;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class ResourceCollectionTest extends TestCase
{
    use RefreshDatabase;

    public function test_resource_collections_can_be_translated()
    {
        if (! config('hearth.resources.enabled')) {
            return $this->markTestSkipped('Resource support is not enabled.');
        }

        $resourceCollection = ResourceCollection::factory()->create();

        $titleTranslations = ['en' => 'title in English', 'fr' => 'title in French'];
        $descriptionTranslations = ['en' => 'description in English', 'fr' => 'description in French'];

        $resourceCollection->setTranslation('title', 'en', $titleTranslations['en']);
        $resourceCollection->setTranslation('title', 'fr', $titleTranslations['fr']);

        $resourceCollection->setTranslation('description', 'en', $descriptionTranslations['en']);
        $resourceCollection->setTranslation('description', 'fr', $descriptionTranslations['fr']);

        $this->assertEquals($titleTranslations['en'], $resourceCollection->title);
        $this->assertEquals($descriptionTranslations['en'], $resourceCollection->description);
        App::setLocale('fr');
        $this->assertEquals($titleTranslations['fr'], $resourceCollection->title);
        $this->assertEquals($descriptionTranslations['fr'], $resourceCollection->description);

        $this->assertEquals($titleTranslations['en'], $resourceCollection->getTranslation('title', 'en'));
        $this->assertEquals($descriptionTranslations['en'], $resourceCollection->getTranslation('description', 'en'));
        $this->assertEquals($titleTranslations['fr'], $resourceCollection->getTranslation('title', 'fr'));
        $this->assertEquals($descriptionTranslations['fr'], $resourceCollection->getTranslation('description', 'fr'));

        $this->assertEquals($titleTranslations, $resourceCollection->getTranslations('title'));
        $this->assertEquals($descriptionTranslations, $resourceCollection->getTranslations('description'));

        $this->expectExceptionMessage("Cannot translate attribute `user_id` as it's not one of the translatable attributes: `title, description`");
        $resourceCollection->setTranslation('user_id', 'en', 'user_id in English');
    }

    public function test_resource_collections_belong_to_user_get_deleted_on_user_delete()
    {
        $resourceCollection = ResourceCollection::factory()->create();

        $resourceCollection->user->delete();
        $this->assertModelMissing($resourceCollection);
    }

    public function test_single_user_can_have_multiple_resource_collections()
    {
        $user = User::factory()->create();
        $resourceCollection = ResourceCollection::factory(5)
            ->for($user)
            ->create();
        $this->assertCount(5, $user->resourceCollections()->get());
    }

    public function test_many_resources_can_belong_in_single_resource_collection()
    {
        $resourceCollection = ResourceCollection::factory()->create();

        $resources = Resource::factory(3)->create();

        foreach ($resources as $resource) {
            $resourceCollection->resources()->sync($resource->id);
            $this->assertDatabaseHas('resource_resource_collection', [
                'resource_collection_id' => $resourceCollection->id,
                'resource_id' => $resource->id,
            ]);
        };
    }

    public function test_deleting_resource_belong_to_resource_collection()
    {
        $resourceCollection = ResourceCollection::factory()->create();
        $resource = Resource::factory()->create();
        $resourceCollection->resources()->sync($resource->id);

        $this->assertDatabaseHas('resources', [
            'id' => $resource->id,
        ]);

        $this->assertDatabaseHas('resource_resource_collection', [
            'resource_collection_id' => $resourceCollection->id,
            'resource_id' => $resource->id,
        ]);

        $resource->delete();

        $this->assertDatabaseMissing('resource_resource_collection', [
            'resource_collection_id' => $resourceCollection->id,
            'resource_id' => $resource->id,
        ]);
    }
}
<x-app-layout>
    <x-slot name="header">
        <h1>
            {{ __('hearth::user.account') }}
        </h1>
    </x-slot>

    <!-- Form Validation Errors -->
    @include('partials.validation-errors')

    <h2>{{ __('hearth::auth.change_password') }}</h2>

    <form action="{{ localized_route('user-password.update') }}" method="POST" novalidate>
        @csrf
        @method('PUT')

        <div class="field">
            <x-hearth-label for="current_password" :value="__('hearth::auth.label_current_password')" />
            <x-hearth-input id="current_password" type="password" name="current_password" required />
            @error('current_password', 'updatePassword')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>

        <div class="field">
            <x-hearth-label for="password" :value="__('hearth::auth.label_password')" />
            <x-hearth-input id="password" type="password" name="password" required />
            @error('password', 'updatePassword')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>

        <div class="field">
            <x-hearth-label for="password_confirmation" :value="__('hearth::auth.label_password_confirmation')" />
            <x-hearth-input id="password_confirmation" type="password" name="password_confirmation" required />
            @error('password_confirmation', 'updatePassword')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>

        <x-hearth-button>
            {{ __('hearth::auth.change_password') }}
        </x-hearth-button>
    </form>

    @if(Laravel\Fortify\Features::canManageTwoFactorAuthentication())
    <div class="flow" x-data="confirmsPassword('{{ route('password.confirmation') }}', '{{ localized_route('password.confirm') }}')">
        <h2>{{ __('hearth::user.two_factor_auth') }}</h2>

        <p>{{ __('hearth::user.two_factor_auth_intro') }}</p>

        @if ($user->twoFactorAuthEnabled())
            <p>{{ __('hearth::user.two_factor_auth_enabled') }}</p>

            @if (session('status') == 'two-factor-authentication-enabled')
                <p>{{ __('hearth::user.two_factor_auth_qr_code') }}</p>
                <div>{!! request()->user()->twoFactorQrCodeSvg() !!}</div>
                <p>{{ __('hearth::user.two_factor_auth_recovery_codes') }}</p>
                <pre>
@foreach (request()->user()->recoveryCodes() as $code)
{{ $code }}
@endforeach</pre>
            @endif

            <form action="{{ route('two-factor.disable') }}" method="post" @submit.prevent="submitForm">
                @csrf
                @method('DELETE')

                <x-hearth-button>
                    {{ __('hearth::user.action_disable_two_factor_auth') }}
                </x-hearth-button>
            </form>
        @else
            <p>{{ __('hearth::user.two_factor_auth_disabled') }}</p>

            <form action="{{ route('two-factor.enable') }}" method="post" @submit.prevent="submitForm">
                @csrf

                <x-hearth-button>
                    {{ __('hearth::user.action_enable_two_factor_auth') }}
                </x-hearth-button>
            </form>
        @endif
        <div class="modal-wrapper" x-show="showingModal">
            <div class="modal flow" @keydown.escape.window="hideModal()" @click.away="hideModal()">
                <p>{{ __('hearth::auth.confirm_intro') }}</p>

                <div class="field">
                    <x-hearth-label for="password" :value="__('hearth::auth.label_password')" />
                    <x-hearth-input id="password" type="password" name="password" required x-ref="password" />
                    <template x-cloak x-if="validationError">
                        <x-validation-error>{{ __('validation.current_password') }}</x-validation-error>
                    </template>
                </div>

                <button type="button" @click="cancel">Cancel</button>
                <button type="button" @click="confirmPassword">Confirm</button>
            </div>
        </div>
    </div>
    @endif

    <h2>{{ __('hearth::user.delete_account') }}</h2>

    <p>{{ __('hearth::user.delete_account_intro') }}</p>

    <form action="{{ localized_route('users.destroy') }}" method="post" novalidate>
        @csrf
        @method('delete')

        <div class="field">
            <x-hearth-label for="current_password" :value="__('hearth::auth.label_current_password')" />
            <x-hearth-input id="current_password" type="password" name="current_password" required />
            @error('current_password', 'destroyAccount')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>

        <x-hearth-button>
            {{ __('hearth::user.action_delete_account') }}
        </x-hearth-button>
    </form>
</x-app-layout>

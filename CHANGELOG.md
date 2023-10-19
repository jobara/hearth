# Changelog

## [5.0.0](https://github.com/jobara/hearth/compare/v4.1.0...v5.0.0) (2023-10-19)


### ⚠ BREAKING CHANGES

* bump Laravel requirement to 10.x ([#193](https://github.com/jobara/hearth/issues/193))
* bump minimum PHP to 8.1 ([#191](https://github.com/jobara/hearth/issues/191))
* remove button component (resolves #123) ([#175](https://github.com/jobara/hearth/issues/175))
* standardize options for checkboxes, radio buttons, and selects ([#165](https://github.com/jobara/hearth/issues/165))
* add Vite support (resolves #158) ([#157](https://github.com/jobara/hearth/issues/157))
* allow users to request to join membershipable models ([#141](https://github.com/jobara/hearth/issues/141))
* add support for multilingual slugs (resolves #137) ([#138](https://github.com/jobara/hearth/issues/138))
* limit User model to a single membership ([#135](https://github.com/jobara/hearth/issues/135))
* make Organization model translatable ([#132](https://github.com/jobara/hearth/issues/132))
* add translatable package and make Resources translatable ([#128](https://github.com/jobara/hearth/issues/128))
* upgrade to Laravel 9 ([#96](https://github.com/jobara/hearth/issues/96)) (#98)

### Features

* accept optional id reference for hinted inputs (fix [#50](https://github.com/jobara/hearth/issues/50)) ([#59](https://github.com/jobara/hearth/issues/59)) ([90f9e54](https://github.com/jobara/hearth/commit/90f9e54db6872ebe1e847d4b425f9ed8819ce252))
* add Checkbox and Checkboxes components (resolves [#83](https://github.com/jobara/hearth/issues/83)) ([#86](https://github.com/jobara/hearth/issues/86)) ([1fbe4a2](https://github.com/jobara/hearth/commit/1fbe4a2f0d96b42fc2d29ec9e5c228c56f1156de))
* add config and factories to support organizations ([fe65583](https://github.com/jobara/hearth/commit/fe6558348a9f8575bf28025015539c61daf8b143))
* add controller, routes, and views for ResourceCollection model (resolves [#142](https://github.com/jobara/hearth/issues/142)) ([#143](https://github.com/jobara/hearth/issues/143)) ([eb179f4](https://github.com/jobara/hearth/commit/eb179f4edfe0dacc148fd1b61ccc55c3005e1619))
* add controllers, views and routes ([a4453c6](https://github.com/jobara/hearth/commit/a4453c6555e2cef89badc4acecbc4b3b107be42c))
* add full attribute support to locale-select component ([fcae807](https://github.com/jobara/hearth/commit/fcae8073c3291a538864b56b2cd4e153b635c9f1))
* add get_locale_name() helper ([fcae807](https://github.com/jobara/hearth/commit/fcae8073c3291a538864b56b2cd4e153b635c9f1))
* add get_region_codes() helper and fix some localizations ([46c8480](https://github.com/jobara/hearth/commit/46c8480abbaa37f81fc090a6350443ed0ff39e56))
* add get_region_name() helper and switch to ISO 3166-2 codes for regions ([db61e41](https://github.com/jobara/hearth/commit/db61e41e1185a2fd5f245f28b629a8a9948fbe79))
* add hint association and attribute passthrough for radio buttons ([#72](https://github.com/jobara/hearth/issues/72)) ([848853d](https://github.com/jobara/hearth/commit/848853d96752ddb56f1616c6d35c8496c731d757))
* add individual hints to checkbox and radio groups (fix [#90](https://github.com/jobara/hearth/issues/90)) ([#112](https://github.com/jobara/hearth/issues/112)) ([4aef125](https://github.com/jobara/hearth/commit/4aef125a6cad4d7d5bc2c2119f9e3d6e301423d3))
* add interactive locale selection during hearth:install ([7926352](https://github.com/jobara/hearth/commit/7926352b36f979891b31c103ef374ed2b665b202))
* add migrations for organizations, memberships, and invitations ([0b98778](https://github.com/jobara/hearth/commit/0b98778b5c8b91c87ad6f5d65ed6c0d4ff608831))
* add postinstall script (resolves [#95](https://github.com/jobara/hearth/issues/95)) ([#104](https://github.com/jobara/hearth/issues/104)) ([feb1834](https://github.com/jobara/hearth/commit/feb18349d214bde55f244bc1138625f232806419))
* add RequirePassword middleware with localization support ([d38328d](https://github.com/jobara/hearth/commit/d38328ddc6a6e4cd72230afecc216e1213adff5c))
* add ResourceCollection model and migration (resolves [#134](https://github.com/jobara/hearth/issues/134)) ([#136](https://github.com/jobara/hearth/issues/136)) ([dc740d8](https://github.com/jobara/hearth/commit/dc740d8b4321807457fe98d885eeddf7e38735d5))
* add resources and resource tests (resolves [#7](https://github.com/jobara/hearth/issues/7), resolves [#8](https://github.com/jobara/hearth/issues/8)) ([#44](https://github.com/jobara/hearth/issues/44)) ([fcae807](https://github.com/jobara/hearth/commit/fcae8073c3291a538864b56b2cd4e153b635c9f1))
* add slot support to hearth-error component ([892fbb2](https://github.com/jobara/hearth/commit/892fbb2adc7aad9df0c0337a43b104d4a2de3bb1))
* add standalone RadioButton component (resolves [#145](https://github.com/jobara/hearth/issues/145)) ([#163](https://github.com/jobara/hearth/issues/163)) ([a87cb27](https://github.com/jobara/hearth/commit/a87cb2789f348714cff287fecef410934437ea99))
* add status messages ([8af0863](https://github.com/jobara/hearth/commit/8af086356cfd1e8b229dd885a85f59e1b6401dcd))
* add strings for two-factor challenge, handle recovery codes ([b32d872](https://github.com/jobara/hearth/commit/b32d872a8851d23e9f6a5e4d40faca96741472ff))
* add stubs for Organization, Membership and Invitation ([3054e8f](https://github.com/jobara/hearth/commit/3054e8f7aa69fafff9b10e60b5d8437155577d7f))
* add support for Livewire v3 ([#196](https://github.com/jobara/hearth/issues/196)) ([e403e13](https://github.com/jobara/hearth/commit/e403e1320ecf267702f5710dff005682be62fbb1))
* add support for multilingual slugs (resolves [#137](https://github.com/jobara/hearth/issues/137)) ([#138](https://github.com/jobara/hearth/issues/138)) ([3e27b5f](https://github.com/jobara/hearth/commit/3e27b5f816f02fca3eb66b2f925f05cc7afa3096))
* add the ability for users to add resources to their collections ([#171](https://github.com/jobara/hearth/issues/171)) ([2106b36](https://github.com/jobara/hearth/commit/2106b36a9f25907e4965420da1b0e6147e27152d))
* add translatable package and make Resources translatable ([#128](https://github.com/jobara/hearth/issues/128)) ([4aac4f6](https://github.com/jobara/hearth/commit/4aac4f6af828bc4a152aafe225bb037f92ca4d27))
* add TranslatableInput and TranslatableTextarea components (resolves [#127](https://github.com/jobara/hearth/issues/127)) ([#146](https://github.com/jobara/hearth/issues/146)) ([97bb1ab](https://github.com/jobara/hearth/commit/97bb1abf2628d6dee842c6e1d23036f5ba452c70))
* add user model ([#1](https://github.com/jobara/hearth/issues/1)) ([86a5665](https://github.com/jobara/hearth/commit/86a5665d90db44c1e327a8fd73774599a42524dd))
* add Vite support (resolves [#158](https://github.com/jobara/hearth/issues/158)) ([#157](https://github.com/jobara/hearth/issues/157)) ([410cb59](https://github.com/jobara/hearth/commit/410cb59d7ef2248d4b7398f3cb99acad5d7492a7))
* allow regeneration of two-factor codes ([0309e35](https://github.com/jobara/hearth/commit/0309e35642fcc52d41c0c046748eb3e6d4280709))
* allow users to request to join membershipable models ([#141](https://github.com/jobara/hearth/issues/141)) ([c532437](https://github.com/jobara/hearth/commit/c532437f04ba83a5506dc361b436402106cdd0d0))
* bump Laravel requirement to 10.x ([#193](https://github.com/jobara/hearth/issues/193)) ([9d2ae43](https://github.com/jobara/hearth/commit/9d2ae431cf0fe3ab65ad010e4f6e647ac90c6ab6))
* bump minimum PHP to 8.1 ([#191](https://github.com/jobara/hearth/issues/191)) ([2bbe244](https://github.com/jobara/hearth/commit/2bbe2442c9c69912f8fd915364ab515d8c35e133))
* clean up navigation (resolves [#103](https://github.com/jobara/hearth/issues/103)) ([#113](https://github.com/jobara/hearth/issues/113)) ([e3b91ab](https://github.com/jobara/hearth/commit/e3b91abb3bfcab4be0607e34513d2211aa337826))
* close dropdown on esc keyup ([a1209ac](https://github.com/jobara/hearth/commit/a1209ac18e4bd8b4250df186ea01ab5baa0cab60))
* conditionally register organization routes ([55a8349](https://github.com/jobara/hearth/commit/55a8349abc03f1b85a104a0c9ed0c04b71d7303a))
* create get_regions() helper ([53b8879](https://github.com/jobara/hearth/commit/53b88795539e3a24844baf0f6bea336288e5a9d9))
* custom error message, handle errors properly ([149545e](https://github.com/jobara/hearth/commit/149545e1c4c9d4c5b4c18e91119b1d5a3ce4d76f))
* custom RedirectIfTwoFactorAuthenticable action ([86bf999](https://github.com/jobara/hearth/commit/86bf999a6dd987ed72cf8a76076076414962b51e))
* display recovery codes properly ([b8ba12c](https://github.com/jobara/hearth/commit/b8ba12c2afd2ee3c0c698baf5ffbdbc46b96d463))
* fix modal display ([38bcefe](https://github.com/jobara/hearth/commit/38bcefe9b3ee2b71208182eb3762d4d6c727896c))
* implement date input (resolves [#58](https://github.com/jobara/hearth/issues/58)) ([#60](https://github.com/jobara/hearth/issues/60)) ([3e520a5](https://github.com/jobara/hearth/commit/3e520a53a5bf765e3923af8824963d39a2b28db8))
* improve error handling for invitation flow (resolves [#28](https://github.com/jobara/hearth/issues/28)) ([#41](https://github.com/jobara/hearth/issues/41)) ([ae06929](https://github.com/jobara/hearth/commit/ae069298b4dc973d95f9b22269d1525dca3d698a))
* improve form components and capabilities ([#35](https://github.com/jobara/hearth/issues/35)) ([7b840ca](https://github.com/jobara/hearth/commit/7b840ca577ac21ad8d64496e930e98fc8b33f7b1))
* inline password confirmation ([ea73f0a](https://github.com/jobara/hearth/commit/ea73f0a4c67ee244ade944969b42e87e617e6880))
* limit User model to a single membership ([#135](https://github.com/jobara/hearth/issues/135)) ([6f06a8d](https://github.com/jobara/hearth/commit/6f06a8d1329fc18e8ff27f0d21aac925ff6b9bd4))
* load default locale from config/app.php in register view ([b47565f](https://github.com/jobara/hearth/commit/b47565f1e1841e431d207a91ad2cf5ddef23726d))
* make locale selection an explicit yes/no choice (resolves [#25](https://github.com/jobara/hearth/issues/25)) ([#40](https://github.com/jobara/hearth/issues/40)) ([8e41b62](https://github.com/jobara/hearth/commit/8e41b624a51ff29c8dc561b78ad0d2c8f7daa795))
* make Organization model translatable ([#132](https://github.com/jobara/hearth/issues/132)) ([ba4acd3](https://github.com/jobara/hearth/commit/ba4acd3daf6ce11b46e32b2e64d9990720d86036))
* make password confirmation component generic (fix [#23](https://github.com/jobara/hearth/issues/23)) ([a05dacf](https://github.com/jobara/hearth/commit/a05dacff6f07d6486c948c6a86acc9e53aefb6ea))
* modal for password confirmation ([bb325be](https://github.com/jobara/hearth/commit/bb325be43e431a340220023d520e0547c396ed24))
* provide localized default strings ([107acbb](https://github.com/jobara/hearth/commit/107acbb4f8af229098c3ff3ce4086a1f5a92c5dd))
* publish Hearth config ([966ab54](https://github.com/jobara/hearth/commit/966ab549f71be8e664091ea1bc7b21a979b83510))
* remove button component (resolves [#123](https://github.com/jobara/hearth/issues/123)) ([#175](https://github.com/jobara/hearth/issues/175)) ([8147e23](https://github.com/jobara/hearth/commit/8147e23b0e0d98cfd7adf51f0f163ecebb689d9e))
* replace validation-error component with hearth-error ([#56](https://github.com/jobara/hearth/issues/56)) ([892fbb2](https://github.com/jobara/hearth/commit/892fbb2adc7aad9df0c0337a43b104d4a2de3bb1))
* rough two-factor implementation ([fe3a3a7](https://github.com/jobara/hearth/commit/fe3a3a70f7afa2617399b48bbf6bd9f969af1dfd))
* split routes by feature ([4b1f2d7](https://github.com/jobara/hearth/commit/4b1f2d7b6672107370755964494d18abc9a5d27e))
* standardize options for checkboxes, radio buttons, and selects ([#165](https://github.com/jobara/hearth/issues/165)) ([092a663](https://github.com/jobara/hearth/commit/092a6636d39f48527a1f4374570e16d723b6fa7e))
* support Markdown in hints (resolves [#162](https://github.com/jobara/hearth/issues/162)) ([#166](https://github.com/jobara/hearth/issues/166)) ([769e655](https://github.com/jobara/hearth/commit/769e655e2740b555a46ec265a6b1d349beff64d2))
* switch from PHP CS Fixer to Pint (resolves [#155](https://github.com/jobara/hearth/issues/155)) ([#156](https://github.com/jobara/hearth/issues/156)) ([b4e3302](https://github.com/jobara/hearth/commit/b4e33028376bb37dc02fcfbee9f84512b8e95b19))
* two-factor challenge ([4a23da7](https://github.com/jobara/hearth/commit/4a23da75b451f0de371303d83f4e6ebbed1bd6f7))
* upgrade to Laravel 9 ([#96](https://github.com/jobara/hearth/issues/96)) ([#98](https://github.com/jobara/hearth/issues/98)) ([ef4c881](https://github.com/jobara/hearth/commit/ef4c8813790bdc476cdb0be9509cbf5b8416ffd8))
* use checked, selected, and disabled Blade directives (resolves [#114](https://github.com/jobara/hearth/issues/114)) ([#115](https://github.com/jobara/hearth/issues/115)) ([c6b4485](https://github.com/jobara/hearth/commit/c6b44855bcba6e4ec3dd50c63207af8dc4205587))


### Bug Fixes

* add Auth facade to AcceptInvitation action ([971b07d](https://github.com/jobara/hearth/commit/971b07d94b575e72ab2fb95a7d5ed26028667a59))
* add blank entry when retrieving list of regions ([df8a501](https://github.com/jobara/hearth/commit/df8a501437f8590243b31aaaa8f7f667f2bdae81))
* add classes to service provider ([0767ab8](https://github.com/jobara/hearth/commit/0767ab816b4b672653a4ef86af730bd75c1d4c1c))
* add correct return types for resource controller ([#52](https://github.com/jobara/hearth/issues/52)) ([5d07a48](https://github.com/jobara/hearth/commit/5d07a48e7308634eceb240f631f130ed5ca3d285))
* add error if user attempting to accept invitation isn't invitee ([e81cf3c](https://github.com/jobara/hearth/commit/e81cf3c8f3a4eefd96458e67144ac3973d3dce0c))
* add flag to skip interactive install steps for ci ([7d5aa42](https://github.com/jobara/hearth/commit/7d5aa42e95e166067a6d095dba4267bbdd2bae76))
* add fr to default locales ([bfc2744](https://github.com/jobara/hearth/commit/bfc274484a6a18501b25663ff0325ad30fbaa894))
* add id and name to the region select ([efab24a](https://github.com/jobara/hearth/commit/efab24aca311c062f4d9c4fe57306cd31f24cd52))
* add locale prompt ([bb0d016](https://github.com/jobara/hearth/commit/bb0d016c506d67aba92a04558f9a9716c7c66c45))
* add region options ([c683f78](https://github.com/jobara/hearth/commit/c683f7829bdcfde476a089d74f21a1544702f1c5))
* add return types to improve static analysis ([178bf2b](https://github.com/jobara/hearth/commit/178bf2b3e5fab4a0cbf69ac74bf27b174def586b))
* adjust PHP requirements ([8498453](https://github.com/jobara/hearth/commit/8498453d00ab237ec179900787c34975e210603f))
* allow user to switch locale on settings page (resolves [#82](https://github.com/jobara/hearth/issues/82)) ([#107](https://github.com/jobara/hearth/issues/107)) ([dcf47cf](https://github.com/jobara/hearth/commit/dcf47cf3344153027153f859b42a8c0a092ab63c))
* apply code styling rules ([448eb97](https://github.com/jobara/hearth/commit/448eb97c41c9d53b054693f7ecb50ef3b5124357))
* apply code styling rules ([36bfc92](https://github.com/jobara/hearth/commit/36bfc923137e7972ef30caccba0da459c080d298))
* apply code styling rules ([5e3ae2d](https://github.com/jobara/hearth/commit/5e3ae2d1607dcb9c3219407080eb947c9c12fc48))
* apply code styling rules ([512f0e0](https://github.com/jobara/hearth/commit/512f0e0edf2e9e17e9e2ca755995fd42e5185292))
* apply code styling rules ([33c09e0](https://github.com/jobara/hearth/commit/33c09e0e446be3b177fb8a5fef6ba12564e5cce5))
* apply code styling rules ([0a3ef4a](https://github.com/jobara/hearth/commit/0a3ef4a7c08ba1d926dad3ac8bca22ac276caa4c))
* apply code styling rules ([f4fbff6](https://github.com/jobara/hearth/commit/f4fbff60bb5a97f6d6428c3749bf7471b777269b))
* apply code styling rules ([65e856c](https://github.com/jobara/hearth/commit/65e856cae4a58fccff284e47d05a89c4ca539359))
* autoload helpers properly ([2a414fe](https://github.com/jobara/hearth/commit/2a414fec736682e25228d4c54f1504d6a216a423))
* bad method in admin template ([9497d56](https://github.com/jobara/hearth/commit/9497d568793b9dda546f8c615c95dd290614c57b))
* call locales helper in global namespace ([#66](https://github.com/jobara/hearth/issues/66)) ([b313221](https://github.com/jobara/hearth/commit/b31322122b1f579bb67c8e8de185ef51b57fafbd))
* call localization helpers from global namespace ([#54](https://github.com/jobara/hearth/issues/54)) ([9ba7d45](https://github.com/jobara/hearth/commit/9ba7d45ee6bef7337f8c21579bd419bc0f8585d5))
* capitalize locale-select locales ([fcae807](https://github.com/jobara/hearth/commit/fcae8073c3291a538864b56b2cd4e153b635c9f1))
* change fallback application name to Hearth, add rel='home' to brand ([#55](https://github.com/jobara/hearth/issues/55)) ([f4b3228](https://github.com/jobara/hearth/commit/f4b3228a0c5409d37a49144cde028ea5c6a9060c))
* check for no-interaction ([19c651b](https://github.com/jobara/hearth/commit/19c651b48564964480939bc8835ba6842c26883a))
* clean up config file ([0519e0d](https://github.com/jobara/hearth/commit/0519e0d37adf65c7c7423c0458d93bb0f0a08c80))
* conditional check for two-factor ([53be62f](https://github.com/jobara/hearth/commit/53be62f5fa041fc08ab80f139ed7776e16189067))
* copy failed two-factor login response ([b08e22c](https://github.com/jobara/hearth/commit/b08e22caa4dfa62f540fa7f4820ba84a48c0fb36))
* copy model stubs on install ([b6b05c6](https://github.com/jobara/hearth/commit/b6b05c60f6047c28543735b37b7dba9cd4bd6ade))
* copy new controller with Hearth installation command ([b896137](https://github.com/jobara/hearth/commit/b89613758c3d1a62ce1af5a3eedc8ea690935797))
* correct namespace ([2083e92](https://github.com/jobara/hearth/commit/2083e9266a182fb49e6224a57db50c75b0c33e4a))
* destroy session when deleting a user (resolves [#79](https://github.com/jobara/hearth/issues/79)) ([#106](https://github.com/jobara/hearth/issues/106)) ([4ca14ea](https://github.com/jobara/hearth/commit/4ca14ea4fb1f6f3a6e9fb1d723e7177c6a6d95b4))
* display recovery codes when regenerated ([1b1b33b](https://github.com/jobara/hearth/commit/1b1b33b71da6d5b0d7cb1cedcc2a940b8058477f))
* don't trigger date validation unless all fields are populated ([#67](https://github.com/jobara/hearth/issues/67)) ([ce8b6ce](https://github.com/jobara/hearth/commit/ce8b6cee5503cd10898074a41c6fe83cbf018866)), closes [#63](https://github.com/jobara/hearth/issues/63)
* don't use strict comparison for radio buttons ([#144](https://github.com/jobara/hearth/issues/144)) ([49b7b1c](https://github.com/jobara/hearth/commit/49b7b1c94fc16d98e6850b173b9f8fc3c93ac4c7))
* enable two-factor by modifying config ([95c309b](https://github.com/jobara/hearth/commit/95c309b57ddc1879286838ca1a8e91da0afda085))
* enable two-factor by modifying config ([a9b6476](https://github.com/jobara/hearth/commit/a9b6476ecc7ab04ff353ca0c34176595f21b7434))
* ensure default messages are loaded for password confirmation ([77e1e2c](https://github.com/jobara/hearth/commit/77e1e2ca26d21cfe097df585816e469ebbe12c8d))
* ensure that only invited user can accept invitation ([97e63be](https://github.com/jobara/hearth/commit/97e63be331b0bb87d38cda1c340010ec97abe720))
* handle errors properly for date input (resolves [#84](https://github.com/jobara/hearth/issues/84)) ([#85](https://github.com/jobara/hearth/issues/85)) ([43a6dd3](https://github.com/jobara/hearth/commit/43a6dd34c04ae6c1625ce27e36b1bf0caa4e415c))
* handle keyed validation errors (resolves [#149](https://github.com/jobara/hearth/issues/149)) ([#164](https://github.com/jobara/hearth/issues/164)) ([1cc2c45](https://github.com/jobara/hearth/commit/1cc2c45fa16664dd9368f04d9f619a30ea61c93b))
* handle validation of fields with array names (fix [#91](https://github.com/jobara/hearth/issues/91)) ([#92](https://github.com/jobara/hearth/issues/92)) ([aa746ab](https://github.com/jobara/hearth/commit/aa746ab42a360cae0ac09cfd157a0ccc5fbac66b))
* improve message for failed invitation accept attempt ([e926d2a](https://github.com/jobara/hearth/commit/e926d2af3f569867c6b4e32c5853465f76327413))
* install RequirePassword middleware ([f2b5b65](https://github.com/jobara/hearth/commit/f2b5b6599a9ffb5f5ce7b33bfa105b8c643e34cd))
* localized route in two-factor challenge view ([2aec4f7](https://github.com/jobara/hearth/commit/2aec4f7dcfde905ffc3749bef53f823418860618))
* migration publishing ([02756c8](https://github.com/jobara/hearth/commit/02756c861468815484b0e1d5b89c51ad2acded59))
* move date input hint position above fields ([#71](https://github.com/jobara/hearth/issues/71)) ([73ff22f](https://github.com/jobara/hearth/commit/73ff22fb5e94bb053536c9c7bb398565b24d4be8))
* move invitation template into proper location ([229c8ae](https://github.com/jobara/hearth/commit/229c8ae630a38561d015e5b6a04247391c3a0ba0))
* move invitation template into proper location ([1174f62](https://github.com/jobara/hearth/commit/1174f6241e311dd4778c24e629c7b1a26da30f51))
* move language resources (resolves [#110](https://github.com/jobara/hearth/issues/110)) ([#111](https://github.com/jobara/hearth/issues/111)) ([34a4613](https://github.com/jobara/hearth/commit/34a4613f5e072bd491ec7f799955b0850a2b4c27))
* namespace components ([2bb0b05](https://github.com/jobara/hearth/commit/2bb0b052a306331e0af454da66be49caa11eb86a))
* namespace more components ([4eba5dd](https://github.com/jobara/hearth/commit/4eba5dde13d77e225004d93bedf2ef746d262d1d))
* normalize ids to more standard characters ([#168](https://github.com/jobara/hearth/issues/168)) ([b23f9ef](https://github.com/jobara/hearth/commit/b23f9efb75257da26c2bdd8308ecc0b7ed4631a4))
* normalize locale endonyms (resolves [#26](https://github.com/jobara/hearth/issues/26)) ([#39](https://github.com/jobara/hearth/issues/39)) ([470783b](https://github.com/jobara/hearth/commit/470783bc0a8e4d58549f20730a121702d0f16568))
* only add RedirectToPreferredLocale middleware if it hasn't been added yet ([bf0137b](https://github.com/jobara/hearth/commit/bf0137b7e57f9202618414e245a3d4786aa17387))
* prevent deletion of user if they are sole organization admin ([#77](https://github.com/jobara/hearth/issues/77)) ([af81e3e](https://github.com/jobara/hearth/commit/af81e3e4839459fcce2777b962e2d3216545e5c6))
* prevent function from being namespaced ([25e234e](https://github.com/jobara/hearth/commit/25e234e9ebfd8fae23804f413e8fa8f3da2fda95))
* proper class name ([56da49a](https://github.com/jobara/hearth/commit/56da49aa65e66b3a395a9819f097d138147325b4))
* proper class name ([ee37849](https://github.com/jobara/hearth/commit/ee37849f494cf87a1ede219e382891d24988da4b))
* proper route ([c12760b](https://github.com/jobara/hearth/commit/c12760b4e5ece6590be18510e6d8affbc71e7e7b))
* properly copy tests ([7f068a4](https://github.com/jobara/hearth/commit/7f068a4dec33db8231694806f8d58438c4d13510))
* properly handle empty input when adding locales (resolves [#74](https://github.com/jobara/hearth/issues/74)) ([#76](https://github.com/jobara/hearth/issues/76)) ([c10ed1f](https://github.com/jobara/hearth/commit/c10ed1fd9658ebd448ee026fd36681d4a6a2b2f9))
* publishing issue ([6811ec4](https://github.com/jobara/hearth/commit/6811ec4e726824f3e6977c1be8754fcd99f9b042))
* put prompt where it belongs ([0cab58d](https://github.com/jobara/hearth/commit/0cab58d6c7b6fc279d7822560b9380d0f3a50373))
* region validation rule ([9e213e1](https://github.com/jobara/hearth/commit/9e213e1af5af94279804a557a85dc92b598e8891))
* remove 'custom-message' string ([c8803fc](https://github.com/jobara/hearth/commit/c8803fc920725fe35d730628384b3e45c4b465e2))
* remove debugging code ([9485696](https://github.com/jobara/hearth/commit/9485696145a4001c16ee1ed5fd74ac464955ba46))
* remove leftover code ([ffe0568](https://github.com/jobara/hearth/commit/ffe05686683522c2d32ad9cde9a1bf3835ef855d))
* remove missing config file from command ([387e2da](https://github.com/jobara/hearth/commit/387e2dacd760073b93af6341df60893ce5d641ba))
* remove unused two-factor contract ([69e7316](https://github.com/jobara/hearth/commit/69e7316d5e02028bbc3e756c9057faa790926bae))
* rename controller to avoid a potential class conflict ([#109](https://github.com/jobara/hearth/issues/109)) ([5584ce2](https://github.com/jobara/hearth/commit/5584ce21547b22976acb72b067614bcae0e2c807))
* resolve analysis error ([914c52c](https://github.com/jobara/hearth/commit/914c52c68a3cb0e8c5049ba50a62e96464a3c6eb))
* resolve issue with button type not being overridden (fix [#121](https://github.com/jobara/hearth/issues/121)) ([#122](https://github.com/jobara/hearth/issues/122)) ([0342d6c](https://github.com/jobara/hearth/commit/0342d6c1231bf967f138fddca60bdc536e7a2d8f))
* resolve issue with improperly selected options in select component ([#117](https://github.com/jobara/hearth/issues/117)) ([6eb9941](https://github.com/jobara/hearth/commit/6eb99414883997931a6057fdf380e1ef1021fd5f))
* resource collection test fails when APP_DEBUG=false (Resolves [#176](https://github.com/jobara/hearth/issues/176)) ([#177](https://github.com/jobara/hearth/issues/177)) ([448cf92](https://github.com/jobara/hearth/commit/448cf9231d4aa1601b32fd4fc3b3d26617770cf4))
* restore integration tests for Laravel &gt;= 9.19 (resolves [#154](https://github.com/jobara/hearth/issues/154)) ([410cb59](https://github.com/jobara/hearth/commit/410cb59d7ef2248d4b7398f3cb99acad5d7492a7))
* sanitize checkbox/radio values for ID generation (resolves [#147](https://github.com/jobara/hearth/issues/147)) ([#151](https://github.com/jobara/hearth/issues/151)) ([f8d3ac5](https://github.com/jobara/hearth/commit/f8d3ac549bfc80ab9568f1cf699c31826a3f204c))
* some PHP coding standards fixes ([6e3ef54](https://github.com/jobara/hearth/commit/6e3ef54c6be50c8dca22cb0a55f417c284723fcf))
* update config references ([cd12d31](https://github.com/jobara/hearth/commit/cd12d3198e8f439a2e50ed7450bf401144d18bd9))
* update config references ([2d31498](https://github.com/jobara/hearth/commit/2d31498ef497a07da817e73254f8ed3f5a25a031))
* update console message to reflect postinstall script ([#105](https://github.com/jobara/hearth/issues/105)) ([2fe988f](https://github.com/jobara/hearth/commit/2fe988f0a4d57b6c68e52dd4156c4f8a4be068bc))
* update get_region_name() to match method in commerceguys/addressing ([573a1d6](https://github.com/jobara/hearth/commit/573a1d6d00ac4c38700d2e4c501605a0e3a10329))
* update strings, register in service provider ([3faef75](https://github.com/jobara/hearth/commit/3faef7583f25ad3208afdfb9e0c8601f61ff9ed7))
* update variable in get_region_name() ([3d5b82c](https://github.com/jobara/hearth/commit/3d5b82cc09cca8ff54316acbb85f16a4a65601c1))
* use built-in no-interaction flag ([9cac9ee](https://github.com/jobara/hearth/commit/9cac9eec87ea817a2f50a1a62a620ae07b480094))
* use generic select for region selection, add cascade delete support ([3c85c97](https://github.com/jobara/hearth/commit/3c85c977bab5c0af8003f01db0b7221beaf3bb9b))
* use Hearth strings where possible ([5158325](https://github.com/jobara/hearth/commit/5158325cf2d45027db7a18d1fb2552fbf9b990d8))
* use proper field types ([8690648](https://github.com/jobara/hearth/commit/8690648635b30226305816bc27469e65d5b4110e))


### Miscellaneous Chores

* configure Dependabot ([fcde2ff](https://github.com/jobara/hearth/commit/fcde2ff57b7ee29c27547e0a6bd8bfbedc71a0a8))
* **deps-dev:** update laravel/pint requirement from ^0.2.3 to ^1.1.0 ([#169](https://github.com/jobara/hearth/issues/169)) ([9097611](https://github.com/jobara/hearth/commit/90976115ce755e532397d05831fad8fa87bc4afd))
* **deps-dev:** update nunomaduro/collision requirement from ^6.0 to ^7.9 ([#188](https://github.com/jobara/hearth/issues/188)) ([93b2f58](https://github.com/jobara/hearth/commit/93b2f58c7126a6c34f5716413d3758b89fa7b517))
* **deps:** adjust PHP version, add some dependencies ([0d7796b](https://github.com/jobara/hearth/commit/0d7796bc8f54a0281d1207b82cf60715dc24d7a5))
* **deps:** bump actions/cache from 2 to 3 ([#185](https://github.com/jobara/hearth/issues/185)) ([2314de2](https://github.com/jobara/hearth/commit/2314de2af12ae7134fce34764b513efa15f16ef8))
* **deps:** bump actions/checkout from 2 to 4 ([#184](https://github.com/jobara/hearth/issues/184)) ([ce43463](https://github.com/jobara/hearth/commit/ce43463c18d59cb5a910a6a0c37a6258dde6fb0d))
* **deps:** bump google-github-actions/release-please-action from 2 to 3 ([#187](https://github.com/jobara/hearth/issues/187)) ([7a83aea](https://github.com/jobara/hearth/commit/7a83aea51be986739efbeb60f49edc45d9775389))
* **deps:** bump pascalgn/automerge-action from 0.14.2 to 0.15.6 ([#186](https://github.com/jobara/hearth/issues/186)) ([08bfa2b](https://github.com/jobara/hearth/commit/08bfa2b55d62b40eea3cee8ab3b79d0a7b331b41))
* **deps:** remove modern-css-reset dependency ([#51](https://github.com/jobara/hearth/issues/51)) ([ab62cc3](https://github.com/jobara/hearth/commit/ab62cc33bbd5258c33e40be4ba2f3de6c094980d))
* **deps:** update codezero/laravel-unique-translation requirement ([#179](https://github.com/jobara/hearth/issues/179)) ([d5783f0](https://github.com/jobara/hearth/commit/d5783f07155503f901fa59a3fba342f1b93fb06b))
* **deps:** update commerceguys/addressing requirement from ^1.2 to ^2.0 ([#189](https://github.com/jobara/hearth/issues/189)) ([950b8fb](https://github.com/jobara/hearth/commit/950b8fb81360d941be08b274a1fc759a1a72f33b))
* **deps:** update commerceguys/intl requirement from ^1.1 to ^2.0 ([#182](https://github.com/jobara/hearth/issues/182)) ([65965c8](https://github.com/jobara/hearth/commit/65965c842abeef3260d0f08394119992fa6d53d3))
* **deps:** update shiftonelabs/laravel-cascade-deletes requirement from ^1.0 to ^2.0 ([#181](https://github.com/jobara/hearth/issues/181)) ([96a3eb9](https://github.com/jobara/hearth/commit/96a3eb9d5e1d359c4dfb0872fe076841eb1e7919))
* **docs:** add CodeCov badge ([8182744](https://github.com/jobara/hearth/commit/818274438230171ac6315445ce02cfb72c8e8f96))
* **docs:** adjust README ([624c448](https://github.com/jobara/hearth/commit/624c44832604c144df1adb25cd68238691247aa9))
* **docs:** fix badges ([#43](https://github.com/jobara/hearth/issues/43)) ([cf91c7d](https://github.com/jobara/hearth/commit/cf91c7dd36383b737dd6480432bc36c179291f1a))
* **docs:** move to fluid-project, update README ([d70133a](https://github.com/jobara/hearth/commit/d70133a8ea97b6535a1058ac42d11bf629503cd7))
* **docs:** replace PHP CS Fixer with Pint ([5552d7a](https://github.com/jobara/hearth/commit/5552d7ab9610f7cc7710487f987ea8beeeca380a))
* **docs:** update feature list ([bde71bc](https://github.com/jobara/hearth/commit/bde71bc9096882c811eb4c527cedd0d57084d84a))
* **docs:** update README ([f09ca4c](https://github.com/jobara/hearth/commit/f09ca4c0914c4df86e663cf1a9f995695c3a0dab))
* **docs:** update README to reflect Laravel version requirement ([#100](https://github.com/jobara/hearth/issues/100)) ([e62c11b](https://github.com/jobara/hearth/commit/e62c11b98cd2915150802b088ed173ae430f918d))
* document recommended extensions ([faf9495](https://github.com/jobara/hearth/commit/faf9495f2e05b84f68fd3dd4868a1bc2330f4c65))
* improve autorelease ([#37](https://github.com/jobara/hearth/issues/37)) ([c07ffcc](https://github.com/jobara/hearth/commit/c07ffcc50e3a07b94ece5c4e2296fc04e0907954))
* **l10n:** localize remaining strings ([#47](https://github.com/jobara/hearth/issues/47)) ([aeadf60](https://github.com/jobara/hearth/commit/aeadf605c8f49e8fc2f9e1446df685d8da94143e))
* **l10n:** remove 'custom-message' string ([2441530](https://github.com/jobara/hearth/commit/24415306613969abaceb226cfcba76be0c2b336e))
* **l10n:** remove 'custom-message' string ([36f78fa](https://github.com/jobara/hearth/commit/36f78fa0d4e9abb02e4a83062f9330447ae34413))
* **l10n:** remove some unnecessary language files ([0add70a](https://github.com/jobara/hearth/commit/0add70a876d4ee75eb6072f62ce6ece0443e2726))
* **l10n:** translate alert.php into French, Canada ([2b88cb4](https://github.com/jobara/hearth/commit/2b88cb466230ad7bfd210fff456feaf603b61e21))
* **l10n:** translate auth.php into French, Canada ([a441fb1](https://github.com/jobara/hearth/commit/a441fb1dc56ffd41d66a5c662b83cf11d7984441))
* **l10n:** translate dashboard.php into French, Canada ([e2095a9](https://github.com/jobara/hearth/commit/e2095a9690b8bd4133b96ac98733dd589d400442))
* **l10n:** translate dashboard.php into French, Canada ([41492f6](https://github.com/jobara/hearth/commit/41492f6fc171f1dea184da47bc8a74fb5e878590))
* **l10n:** translate errors.php into French, Canada ([ce062d9](https://github.com/jobara/hearth/commit/ce062d97b5b552c37c6be0c93f7ae5423cb69957))
* **l10n:** translate forms.php into French, Canada ([ecbb3a5](https://github.com/jobara/hearth/commit/ecbb3a5e74fa8450bbf140ae2a118407f26287ec))
* **l10n:** translate forms.php into French, Canada ([e0d664d](https://github.com/jobara/hearth/commit/e0d664da380310f4e5e136eabb13bc2ccedcca0f))
* **l10n:** translate mail.php into French, Canada ([55f7cf5](https://github.com/jobara/hearth/commit/55f7cf526d394f9c6d24059c832730f5c3132824))
* **l10n:** translate passwords.php into French, Canada ([b52d8fe](https://github.com/jobara/hearth/commit/b52d8fe2043e9ca2c136b1f6957b3c26ffd6abb1))
* **l10n:** translate routes.php into French, Canada ([c065de4](https://github.com/jobara/hearth/commit/c065de436819e5b5e51e27dbff7b4aab51df566d))
* **l10n:** translate routes.php into French, Canada ([06b7dbd](https://github.com/jobara/hearth/commit/06b7dbdc47018ef4ee9c38767f715a86d931d833))
* **l10n:** translate user.php into French, Canada ([d573951](https://github.com/jobara/hearth/commit/d573951ffcb9b7130ae8345b97c8660a5fa2e8bd))
* **l10n:** translate validation.php into French, Canada ([ca15d75](https://github.com/jobara/hearth/commit/ca15d7536a192bbf5609c1ddc49a431b5006f305))
* **l10n:** translate welcome.php into French, Canada ([fe068f2](https://github.com/jobara/hearth/commit/fe068f2cee35999fdc54933183bcf256ca181061))
* **l10n:** translate welcome.php into French, Canada ([6983fca](https://github.com/jobara/hearth/commit/6983fca26bdebdcd08320677fcc020eac37d805a))
* **l10n:** update crowdin.yml ([d33a310](https://github.com/jobara/hearth/commit/d33a31086d0db17bbb725c4f1726e8edf339f3a9))
* **l10n:** update crowdin.yml ([6ed360c](https://github.com/jobara/hearth/commit/6ed360c415aae562a60b67399cbeb06d5f8a64b0))
* **l10n:** update crowdin.yml ([2a7971a](https://github.com/jobara/hearth/commit/2a7971ad76c896055db9e7b4cb903363f1a68ae0))
* **l10n:** update strings ([#42](https://github.com/jobara/hearth/issues/42)) ([78cee25](https://github.com/jobara/hearth/commit/78cee256e520e45ef25cf0cfda736fc0664a488c))
* **l10n:** update translations ([fc69f5a](https://github.com/jobara/hearth/commit/fc69f5a4e156e9d9c1f787886336e4738eba4bdc))
* **l10n:** update translations ([714a2aa](https://github.com/jobara/hearth/commit/714a2aa53e9ba2378c942fd4bc0d8302023c05b3))
* **l10n:** update translations ([2f26d9a](https://github.com/jobara/hearth/commit/2f26d9abd0861b04cc707e36b542060987b17154))
* **l10n:** update translations ([ad3a904](https://github.com/jobara/hearth/commit/ad3a90457cf183715c26eaad2de76e0fdb515cc4))
* **l10n:** update translations ([bb38d82](https://github.com/jobara/hearth/commit/bb38d826444d22d60f0899bf3e39303978bd0e3f))
* **l10n:** update translations ([cbf7470](https://github.com/jobara/hearth/commit/cbf747045a8acfc21cc744fa973fdee7ad29689a))
* **l10n:** update translations ([9adde6f](https://github.com/jobara/hearth/commit/9adde6fefe4229a4731ad63d759bb4a7ddf4b1ca))
* **l10n:** update translations ([#116](https://github.com/jobara/hearth/issues/116)) ([30e6cc6](https://github.com/jobara/hearth/commit/30e6cc62a7b44fd3e7e602ef843f29a9d4d6f703))
* **l10n:** update translations ([#140](https://github.com/jobara/hearth/issues/140)) ([793745e](https://github.com/jobara/hearth/commit/793745eacca27bb9e4f0137309ca86b1056814c4))
* **l10n:** update translations ([#160](https://github.com/jobara/hearth/issues/160)) ([ab447f4](https://github.com/jobara/hearth/commit/ab447f430c2291f8d6315d33d268fb6269a076e3))
* **l10n:** update translations ([#170](https://github.com/jobara/hearth/issues/170)) ([652954d](https://github.com/jobara/hearth/commit/652954d7bcc8e0c0f5cb23ff54193e883dcb3824))
* **l10n:** update translations ([#173](https://github.com/jobara/hearth/issues/173)) ([e98ee1d](https://github.com/jobara/hearth/commit/e98ee1da3ae84b90f46241936ca2280dbdbf6ec9))
* **l10n:** update translations ([#174](https://github.com/jobara/hearth/issues/174)) ([41fc0e6](https://github.com/jobara/hearth/commit/41fc0e6b0154be70c9eda51d935e0793df116912))
* **l10n:** update translations ([#65](https://github.com/jobara/hearth/issues/65)) ([f5e93ea](https://github.com/jobara/hearth/commit/f5e93ea2095955a7ee3b73f1aa38a2a419b76ea3))
* **l10n:** update translations ([#80](https://github.com/jobara/hearth/issues/80)) ([3a167f8](https://github.com/jobara/hearth/commit/3a167f81690347fe988c94585774e344ce6625ea))
* **main:** release 4.0.0 ([#190](https://github.com/jobara/hearth/issues/190)) ([c44b573](https://github.com/jobara/hearth/commit/c44b573aded834336d29abcacc704845ec19f69d))
* **main:** release 4.1.0 ([#197](https://github.com/jobara/hearth/issues/197)) ([939c187](https://github.com/jobara/hearth/commit/939c187cf0fcec1f9224fded089db9e476cd65f5))
* release 1.0.0 ([#38](https://github.com/jobara/hearth/issues/38)) ([257cddd](https://github.com/jobara/hearth/commit/257cddde62d9a97318a183c8a19b765f6fe00f8e))
* release 1.1.0 ([#57](https://github.com/jobara/hearth/issues/57)) ([c396400](https://github.com/jobara/hearth/commit/c396400380bc49760372c4f38d42e7bd41ecfb27))
* release 1.2.0 ([#73](https://github.com/jobara/hearth/issues/73)) ([121bb93](https://github.com/jobara/hearth/commit/121bb937af6646cfaabe11cfd9d3d59af65cd05a))
* release 1.3.0 ([#87](https://github.com/jobara/hearth/issues/87)) ([30bc88d](https://github.com/jobara/hearth/commit/30bc88de0abb337d66bc37e6bf817becadd96ec3))
* release 1.3.1 ([#93](https://github.com/jobara/hearth/issues/93)) ([e7ebcbf](https://github.com/jobara/hearth/commit/e7ebcbf656f7e6349e95bc0c2803d6b2fe3c4088))
* release 2.0.0 ([#102](https://github.com/jobara/hearth/issues/102)) ([6ad1ad1](https://github.com/jobara/hearth/commit/6ad1ad1d0a7f3eb3cb41e9e25615405bc6dc3dfd))
* release 2.0.1 ([#118](https://github.com/jobara/hearth/issues/118)) ([31fcac5](https://github.com/jobara/hearth/commit/31fcac5c18d202187e6a7716b3e0d9da84fe3d68))
* release 2.0.2 ([#124](https://github.com/jobara/hearth/issues/124)) ([4b1195a](https://github.com/jobara/hearth/commit/4b1195a0b726d40920f8b034639a4ddef234c5f9))
* release 3.0.0 ([#139](https://github.com/jobara/hearth/issues/139)) ([fb0d95f](https://github.com/jobara/hearth/commit/fb0d95f7e423e03022a25e7d907c3793f20092b3))
* remove discussions links ([a1ccaec](https://github.com/jobara/hearth/commit/a1ccaecc57d9a9609539b171ab4f5f117ace1ffb))
* remove extra namespace ([6e311c5](https://github.com/jobara/hearth/commit/6e311c5b76a4c8c8f0d9af9b3917c2866bb01207))
* rename package ([ad424fb](https://github.com/jobara/hearth/commit/ad424fb8194e4a98503e084b2ab09098a47a1a7a))
* update Dependabot configuration ([7d29898](https://github.com/jobara/hearth/commit/7d29898c35521998c22e2764c5a5cb1f95ad0990))
* update namespace and project details ([eb7b60b](https://github.com/jobara/hearth/commit/eb7b60b0f2c377d21a8d5e1fad625493ff052170))
* update repository references for now ([15d2f71](https://github.com/jobara/hearth/commit/15d2f71ac0c5c179107c060f212335abea0560c1))

## [4.1.0](https://github.com/fluid-project/hearth/compare/v4.0.0...v4.1.0) (2023-10-12)


### Features

* add support for Livewire v3 ([#196](https://github.com/fluid-project/hearth/issues/196)) ([e403e13](https://github.com/fluid-project/hearth/commit/e403e1320ecf267702f5710dff005682be62fbb1))

## [4.0.0](https://github.com/fluid-project/hearth/compare/v3.0.0...v4.0.0) (2023-10-06)


### ⚠ BREAKING CHANGES

* bump Laravel requirement to 10.x ([#193](https://github.com/fluid-project/hearth/issues/193))
* bump minimum PHP to 8.1 ([#191](https://github.com/fluid-project/hearth/issues/191))

### Features

* bump Laravel requirement to 10.x ([#193](https://github.com/fluid-project/hearth/issues/193)) ([9d2ae43](https://github.com/fluid-project/hearth/commit/9d2ae431cf0fe3ab65ad010e4f6e647ac90c6ab6))
* bump minimum PHP to 8.1 ([#191](https://github.com/fluid-project/hearth/issues/191)) ([2bbe244](https://github.com/fluid-project/hearth/commit/2bbe2442c9c69912f8fd915364ab515d8c35e133))


### Bug Fixes

* resolve analysis error ([914c52c](https://github.com/fluid-project/hearth/commit/914c52c68a3cb0e8c5049ba50a62e96464a3c6eb))
* resource collection test fails when APP_DEBUG=false (Resolves [#176](https://github.com/fluid-project/hearth/issues/176)) ([#177](https://github.com/fluid-project/hearth/issues/177)) ([448cf92](https://github.com/fluid-project/hearth/commit/448cf9231d4aa1601b32fd4fc3b3d26617770cf4))


### Miscellaneous Chores

* **deps-dev:** update nunomaduro/collision requirement from ^6.0 to ^7.9 ([#188](https://github.com/fluid-project/hearth/issues/188)) ([93b2f58](https://github.com/fluid-project/hearth/commit/93b2f58c7126a6c34f5716413d3758b89fa7b517))
* **deps:** bump actions/cache from 2 to 3 ([#185](https://github.com/fluid-project/hearth/issues/185)) ([2314de2](https://github.com/fluid-project/hearth/commit/2314de2af12ae7134fce34764b513efa15f16ef8))
* **deps:** bump actions/checkout from 2 to 4 ([#184](https://github.com/fluid-project/hearth/issues/184)) ([ce43463](https://github.com/fluid-project/hearth/commit/ce43463c18d59cb5a910a6a0c37a6258dde6fb0d))
* **deps:** bump google-github-actions/release-please-action from 2 to 3 ([#187](https://github.com/fluid-project/hearth/issues/187)) ([7a83aea](https://github.com/fluid-project/hearth/commit/7a83aea51be986739efbeb60f49edc45d9775389))
* **deps:** bump pascalgn/automerge-action from 0.14.2 to 0.15.6 ([#186](https://github.com/fluid-project/hearth/issues/186)) ([08bfa2b](https://github.com/fluid-project/hearth/commit/08bfa2b55d62b40eea3cee8ab3b79d0a7b331b41))
* **deps:** update codezero/laravel-unique-translation requirement ([#179](https://github.com/fluid-project/hearth/issues/179)) ([d5783f0](https://github.com/fluid-project/hearth/commit/d5783f07155503f901fa59a3fba342f1b93fb06b))
* **deps:** update commerceguys/addressing requirement from ^1.2 to ^2.0 ([#189](https://github.com/fluid-project/hearth/issues/189)) ([950b8fb](https://github.com/fluid-project/hearth/commit/950b8fb81360d941be08b274a1fc759a1a72f33b))
* **deps:** update commerceguys/intl requirement from ^1.1 to ^2.0 ([#182](https://github.com/fluid-project/hearth/issues/182)) ([65965c8](https://github.com/fluid-project/hearth/commit/65965c842abeef3260d0f08394119992fa6d53d3))
* **deps:** update shiftonelabs/laravel-cascade-deletes requirement from ^1.0 to ^2.0 ([#181](https://github.com/fluid-project/hearth/issues/181)) ([96a3eb9](https://github.com/fluid-project/hearth/commit/96a3eb9d5e1d359c4dfb0872fe076841eb1e7919))
* update Dependabot configuration ([7d29898](https://github.com/fluid-project/hearth/commit/7d29898c35521998c22e2764c5a5cb1f95ad0990))

## [3.0.0](https://www.github.com/fluid-project/hearth/compare/v2.0.2...v3.0.0) (2022-08-30)


### ⚠ BREAKING CHANGES

* remove button component (resolves #123) (#175)
* standardize options for checkboxes, radio buttons, and selects (#165)
* add Vite support (resolves #158) (#157)
* allow users to request to join membershipable models (#141)
* add support for multilingual slugs (resolves #137) (#138)
* limit User model to a single membership (#135)
* make Organization model translatable (#132)
* add translatable package and make Resources translatable (#128)

### Features

* add controller, routes, and views for ResourceCollection model (resolves [#142](https://www.github.com/fluid-project/hearth/issues/142)) ([#143](https://www.github.com/fluid-project/hearth/issues/143)) ([eb179f4](https://www.github.com/fluid-project/hearth/commit/eb179f4edfe0dacc148fd1b61ccc55c3005e1619))
* add ResourceCollection model and migration (resolves [#134](https://www.github.com/fluid-project/hearth/issues/134)) ([#136](https://www.github.com/fluid-project/hearth/issues/136)) ([dc740d8](https://www.github.com/fluid-project/hearth/commit/dc740d8b4321807457fe98d885eeddf7e38735d5))
* add standalone RadioButton component (resolves [#145](https://www.github.com/fluid-project/hearth/issues/145)) ([#163](https://www.github.com/fluid-project/hearth/issues/163)) ([a87cb27](https://www.github.com/fluid-project/hearth/commit/a87cb2789f348714cff287fecef410934437ea99))
* add support for multilingual slugs (resolves [#137](https://www.github.com/fluid-project/hearth/issues/137)) ([#138](https://www.github.com/fluid-project/hearth/issues/138)) ([3e27b5f](https://www.github.com/fluid-project/hearth/commit/3e27b5f816f02fca3eb66b2f925f05cc7afa3096))
* add the ability for users to add resources to their collections ([#171](https://www.github.com/fluid-project/hearth/issues/171)) ([2106b36](https://www.github.com/fluid-project/hearth/commit/2106b36a9f25907e4965420da1b0e6147e27152d))
* add translatable package and make Resources translatable ([#128](https://www.github.com/fluid-project/hearth/issues/128)) ([4aac4f6](https://www.github.com/fluid-project/hearth/commit/4aac4f6af828bc4a152aafe225bb037f92ca4d27))
* add TranslatableInput and TranslatableTextarea components (resolves [#127](https://www.github.com/fluid-project/hearth/issues/127)) ([#146](https://www.github.com/fluid-project/hearth/issues/146)) ([97bb1ab](https://www.github.com/fluid-project/hearth/commit/97bb1abf2628d6dee842c6e1d23036f5ba452c70))
* add Vite support (resolves [#158](https://www.github.com/fluid-project/hearth/issues/158)) ([#157](https://www.github.com/fluid-project/hearth/issues/157)) ([410cb59](https://www.github.com/fluid-project/hearth/commit/410cb59d7ef2248d4b7398f3cb99acad5d7492a7))
* allow users to request to join membershipable models ([#141](https://www.github.com/fluid-project/hearth/issues/141)) ([c532437](https://www.github.com/fluid-project/hearth/commit/c532437f04ba83a5506dc361b436402106cdd0d0))
* limit User model to a single membership ([#135](https://www.github.com/fluid-project/hearth/issues/135)) ([6f06a8d](https://www.github.com/fluid-project/hearth/commit/6f06a8d1329fc18e8ff27f0d21aac925ff6b9bd4))
* make Organization model translatable ([#132](https://www.github.com/fluid-project/hearth/issues/132)) ([ba4acd3](https://www.github.com/fluid-project/hearth/commit/ba4acd3daf6ce11b46e32b2e64d9990720d86036))
* remove button component (resolves [#123](https://www.github.com/fluid-project/hearth/issues/123)) ([#175](https://www.github.com/fluid-project/hearth/issues/175)) ([8147e23](https://www.github.com/fluid-project/hearth/commit/8147e23b0e0d98cfd7adf51f0f163ecebb689d9e))
* standardize options for checkboxes, radio buttons, and selects ([#165](https://www.github.com/fluid-project/hearth/issues/165)) ([092a663](https://www.github.com/fluid-project/hearth/commit/092a6636d39f48527a1f4374570e16d723b6fa7e))
* support Markdown in hints (resolves [#162](https://www.github.com/fluid-project/hearth/issues/162)) ([#166](https://www.github.com/fluid-project/hearth/issues/166)) ([769e655](https://www.github.com/fluid-project/hearth/commit/769e655e2740b555a46ec265a6b1d349beff64d2))
* switch from PHP CS Fixer to Pint (resolves [#155](https://www.github.com/fluid-project/hearth/issues/155)) ([#156](https://www.github.com/fluid-project/hearth/issues/156)) ([b4e3302](https://www.github.com/fluid-project/hearth/commit/b4e33028376bb37dc02fcfbee9f84512b8e95b19))


### Bug Fixes

* don't use strict comparison for radio buttons ([#144](https://www.github.com/fluid-project/hearth/issues/144)) ([49b7b1c](https://www.github.com/fluid-project/hearth/commit/49b7b1c94fc16d98e6850b173b9f8fc3c93ac4c7))
* handle keyed validation errors (resolves [#149](https://www.github.com/fluid-project/hearth/issues/149)) ([#164](https://www.github.com/fluid-project/hearth/issues/164)) ([1cc2c45](https://www.github.com/fluid-project/hearth/commit/1cc2c45fa16664dd9368f04d9f619a30ea61c93b))
* normalize ids to more standard characters ([#168](https://www.github.com/fluid-project/hearth/issues/168)) ([b23f9ef](https://www.github.com/fluid-project/hearth/commit/b23f9efb75257da26c2bdd8308ecc0b7ed4631a4))
* restore integration tests for Laravel >= 9.19 (resolves [#154](https://www.github.com/fluid-project/hearth/issues/154)) ([410cb59](https://www.github.com/fluid-project/hearth/commit/410cb59d7ef2248d4b7398f3cb99acad5d7492a7))
* sanitize checkbox/radio values for ID generation (resolves [#147](https://www.github.com/fluid-project/hearth/issues/147)) ([#151](https://www.github.com/fluid-project/hearth/issues/151)) ([f8d3ac5](https://www.github.com/fluid-project/hearth/commit/f8d3ac549bfc80ab9568f1cf699c31826a3f204c))


### Miscellaneous Chores

* **deps-dev:** update laravel/pint requirement from ^0.2.3 to ^1.1.0 ([#169](https://www.github.com/fluid-project/hearth/issues/169)) ([9097611](https://www.github.com/fluid-project/hearth/commit/90976115ce755e532397d05831fad8fa87bc4afd))
* **docs:** replace PHP CS Fixer with Pint ([5552d7a](https://www.github.com/fluid-project/hearth/commit/5552d7ab9610f7cc7710487f987ea8beeeca380a))
* document recommended extensions ([faf9495](https://www.github.com/fluid-project/hearth/commit/faf9495f2e05b84f68fd3dd4868a1bc2330f4c65))
* **l10n:** update translations ([#140](https://www.github.com/fluid-project/hearth/issues/140)) ([793745e](https://www.github.com/fluid-project/hearth/commit/793745eacca27bb9e4f0137309ca86b1056814c4))
* **l10n:** update translations ([#160](https://www.github.com/fluid-project/hearth/issues/160)) ([ab447f4](https://www.github.com/fluid-project/hearth/commit/ab447f430c2291f8d6315d33d268fb6269a076e3))
* **l10n:** update translations ([#170](https://www.github.com/fluid-project/hearth/issues/170)) ([652954d](https://www.github.com/fluid-project/hearth/commit/652954d7bcc8e0c0f5cb23ff54193e883dcb3824))
* **l10n:** update translations ([#173](https://www.github.com/fluid-project/hearth/issues/173)) ([e98ee1d](https://www.github.com/fluid-project/hearth/commit/e98ee1da3ae84b90f46241936ca2280dbdbf6ec9))
* **l10n:** update translations ([#174](https://www.github.com/fluid-project/hearth/issues/174)) ([41fc0e6](https://www.github.com/fluid-project/hearth/commit/41fc0e6b0154be70c9eda51d935e0793df116912))

### [2.0.2](https://www.github.com/fluid-project/hearth/compare/v2.0.1...v2.0.2) (2022-05-05)


### Bug Fixes

* resolve issue with button type not being overridden (fix [#121](https://www.github.com/fluid-project/hearth/issues/121)) ([#122](https://www.github.com/fluid-project/hearth/issues/122)) ([0342d6c](https://www.github.com/fluid-project/hearth/commit/0342d6c1231bf967f138fddca60bdc536e7a2d8f))

### [2.0.1](https://www.github.com/fluid-project/hearth/compare/v2.0.0...v2.0.1) (2022-03-29)


### Bug Fixes

* resolve issue with improperly selected options in select component ([#117](https://www.github.com/fluid-project/hearth/issues/117)) ([6eb9941](https://www.github.com/fluid-project/hearth/commit/6eb99414883997931a6057fdf380e1ef1021fd5f))

## [2.0.0](https://www.github.com/fluid-project/hearth/compare/v1.3.1...v2.0.0) (2022-03-24)


### ⚠ BREAKING CHANGES

* upgrade to Laravel 9 (#96) (#98)

### Features

* add individual hints to checkbox and radio groups (fix [#90](https://www.github.com/fluid-project/hearth/issues/90)) ([#112](https://www.github.com/fluid-project/hearth/issues/112)) ([4aef125](https://www.github.com/fluid-project/hearth/commit/4aef125a6cad4d7d5bc2c2119f9e3d6e301423d3))
* add postinstall script (resolves [#95](https://www.github.com/fluid-project/hearth/issues/95)) ([#104](https://www.github.com/fluid-project/hearth/issues/104)) ([feb1834](https://www.github.com/fluid-project/hearth/commit/feb18349d214bde55f244bc1138625f232806419))
* clean up navigation (resolves [#103](https://www.github.com/fluid-project/hearth/issues/103)) ([#113](https://www.github.com/fluid-project/hearth/issues/113)) ([e3b91ab](https://www.github.com/fluid-project/hearth/commit/e3b91abb3bfcab4be0607e34513d2211aa337826))
* upgrade to Laravel 9 ([#96](https://www.github.com/fluid-project/hearth/issues/96)) ([#98](https://www.github.com/fluid-project/hearth/issues/98)) ([ef4c881](https://www.github.com/fluid-project/hearth/commit/ef4c8813790bdc476cdb0be9509cbf5b8416ffd8))
* use checked, selected, and disabled Blade directives (resolves [#114](https://www.github.com/fluid-project/hearth/issues/114)) ([#115](https://www.github.com/fluid-project/hearth/issues/115)) ([c6b4485](https://www.github.com/fluid-project/hearth/commit/c6b44855bcba6e4ec3dd50c63207af8dc4205587))


### Bug Fixes

* allow user to switch locale on settings page (resolves [#82](https://www.github.com/fluid-project/hearth/issues/82)) ([#107](https://www.github.com/fluid-project/hearth/issues/107)) ([dcf47cf](https://www.github.com/fluid-project/hearth/commit/dcf47cf3344153027153f859b42a8c0a092ab63c))
* copy new controller with Hearth installation command ([b896137](https://www.github.com/fluid-project/hearth/commit/b89613758c3d1a62ce1af5a3eedc8ea690935797))
* destroy session when deleting a user (resolves [#79](https://www.github.com/fluid-project/hearth/issues/79)) ([#106](https://www.github.com/fluid-project/hearth/issues/106)) ([4ca14ea](https://www.github.com/fluid-project/hearth/commit/4ca14ea4fb1f6f3a6e9fb1d723e7177c6a6d95b4))
* move language resources (resolves [#110](https://www.github.com/fluid-project/hearth/issues/110)) ([#111](https://www.github.com/fluid-project/hearth/issues/111)) ([34a4613](https://www.github.com/fluid-project/hearth/commit/34a4613f5e072bd491ec7f799955b0850a2b4c27))
* rename controller to avoid a potential class conflict ([#109](https://www.github.com/fluid-project/hearth/issues/109)) ([5584ce2](https://www.github.com/fluid-project/hearth/commit/5584ce21547b22976acb72b067614bcae0e2c807))
* update console message to reflect postinstall script ([#105](https://www.github.com/fluid-project/hearth/issues/105)) ([2fe988f](https://www.github.com/fluid-project/hearth/commit/2fe988f0a4d57b6c68e52dd4156c4f8a4be068bc))


### Miscellaneous Chores

* configure Dependabot ([fcde2ff](https://www.github.com/fluid-project/hearth/commit/fcde2ff57b7ee29c27547e0a6bd8bfbedc71a0a8))
* **docs:** update README to reflect Laravel version requirement ([#100](https://www.github.com/fluid-project/hearth/issues/100)) ([e62c11b](https://www.github.com/fluid-project/hearth/commit/e62c11b98cd2915150802b088ed173ae430f918d))
* **l10n:** update translations ([#116](https://www.github.com/fluid-project/hearth/issues/116)) ([30e6cc6](https://www.github.com/fluid-project/hearth/commit/30e6cc62a7b44fd3e7e602ef843f29a9d4d6f703))

### [1.3.1](https://www.github.com/fluid-project/hearth/compare/v1.3.0...v1.3.1) (2022-01-27)


### Bug Fixes

* handle validation of fields with array names (fix [#91](https://www.github.com/fluid-project/hearth/issues/91)) ([#92](https://www.github.com/fluid-project/hearth/issues/92)) ([aa746ab](https://www.github.com/fluid-project/hearth/commit/aa746ab42a360cae0ac09cfd157a0ccc5fbac66b))

## [1.3.0](https://www.github.com/fluid-project/hearth/compare/v1.2.0...v1.3.0) (2021-12-03)


### Features

* add Checkbox and Checkboxes components (resolves [#83](https://www.github.com/fluid-project/hearth/issues/83)) ([#86](https://www.github.com/fluid-project/hearth/issues/86)) ([1fbe4a2](https://www.github.com/fluid-project/hearth/commit/1fbe4a2f0d96b42fc2d29ec9e5c228c56f1156de))


### Bug Fixes

* handle errors properly for date input (resolves [#84](https://www.github.com/fluid-project/hearth/issues/84)) ([#85](https://www.github.com/fluid-project/hearth/issues/85)) ([43a6dd3](https://www.github.com/fluid-project/hearth/commit/43a6dd34c04ae6c1625ce27e36b1bf0caa4e415c))
* prevent deletion of user if they are sole organization admin ([#77](https://www.github.com/fluid-project/hearth/issues/77)) ([af81e3e](https://www.github.com/fluid-project/hearth/commit/af81e3e4839459fcce2777b962e2d3216545e5c6))
* properly handle empty input when adding locales (resolves [#74](https://www.github.com/fluid-project/hearth/issues/74)) ([#76](https://www.github.com/fluid-project/hearth/issues/76)) ([c10ed1f](https://www.github.com/fluid-project/hearth/commit/c10ed1fd9658ebd448ee026fd36681d4a6a2b2f9))


### Miscellaneous Chores

* **l10n:** update translations ([#80](https://www.github.com/fluid-project/hearth/issues/80)) ([3a167f8](https://www.github.com/fluid-project/hearth/commit/3a167f81690347fe988c94585774e344ce6625ea))

## [1.2.0](https://www.github.com/fluid-project/hearth/compare/v1.1.0...v1.2.0) (2021-09-07)


### Features

* add hint association and attribute passthrough for radio buttons ([#72](https://www.github.com/fluid-project/hearth/issues/72)) ([848853d](https://www.github.com/fluid-project/hearth/commit/848853d96752ddb56f1616c6d35c8496c731d757))


### Bug Fixes

* call locales helper in global namespace ([#66](https://www.github.com/fluid-project/hearth/issues/66)) ([b313221](https://www.github.com/fluid-project/hearth/commit/b31322122b1f579bb67c8e8de185ef51b57fafbd))
* don't trigger date validation unless all fields are populated ([#67](https://www.github.com/fluid-project/hearth/issues/67)) ([ce8b6ce](https://www.github.com/fluid-project/hearth/commit/ce8b6cee5503cd10898074a41c6fe83cbf018866)), closes [#63](https://www.github.com/fluid-project/hearth/issues/63)
* move date input hint position above fields ([#71](https://www.github.com/fluid-project/hearth/issues/71)) ([73ff22f](https://www.github.com/fluid-project/hearth/commit/73ff22fb5e94bb053536c9c7bb398565b24d4be8))

## [1.1.0](https://www.github.com/fluid-project/hearth/compare/v1.0.0...v1.1.0) (2021-08-31)


### Features

* accept optional id reference for hinted inputs (fix [#50](https://www.github.com/fluid-project/hearth/issues/50)) ([#59](https://www.github.com/fluid-project/hearth/issues/59)) ([90f9e54](https://www.github.com/fluid-project/hearth/commit/90f9e54db6872ebe1e847d4b425f9ed8819ce252))
* add slot support to hearth-error component ([892fbb2](https://www.github.com/fluid-project/hearth/commit/892fbb2adc7aad9df0c0337a43b104d4a2de3bb1))
* implement date input (resolves [#58](https://www.github.com/fluid-project/hearth/issues/58)) ([#60](https://www.github.com/fluid-project/hearth/issues/60)) ([3e520a5](https://www.github.com/fluid-project/hearth/commit/3e520a53a5bf765e3923af8824963d39a2b28db8))
* replace validation-error component with hearth-error ([#56](https://www.github.com/fluid-project/hearth/issues/56)) ([892fbb2](https://www.github.com/fluid-project/hearth/commit/892fbb2adc7aad9df0c0337a43b104d4a2de3bb1))


### Bug Fixes

* add correct return types for resource controller ([#52](https://www.github.com/fluid-project/hearth/issues/52)) ([5d07a48](https://www.github.com/fluid-project/hearth/commit/5d07a48e7308634eceb240f631f130ed5ca3d285))
* call localization helpers from global namespace ([#54](https://www.github.com/fluid-project/hearth/issues/54)) ([9ba7d45](https://www.github.com/fluid-project/hearth/commit/9ba7d45ee6bef7337f8c21579bd419bc0f8585d5))
* change fallback application name to Hearth, add rel='home' to brand ([#55](https://www.github.com/fluid-project/hearth/issues/55)) ([f4b3228](https://www.github.com/fluid-project/hearth/commit/f4b3228a0c5409d37a49144cde028ea5c6a9060c))

## 1.0.0 (2021-08-26)


### Features

* add config and factories to support organizations ([fe65583](https://www.github.com/fluid-project/hearth/commit/fe6558348a9f8575bf28025015539c61daf8b143))
* add controllers, views and routes ([a4453c6](https://www.github.com/fluid-project/hearth/commit/a4453c6555e2cef89badc4acecbc4b3b107be42c))
* add full attribute support to locale-select component ([fcae807](https://www.github.com/fluid-project/hearth/commit/fcae8073c3291a538864b56b2cd4e153b635c9f1))
* add get_locale_name() helper ([fcae807](https://www.github.com/fluid-project/hearth/commit/fcae8073c3291a538864b56b2cd4e153b635c9f1))
* add get_region_codes() helper and fix some localizations ([46c8480](https://www.github.com/fluid-project/hearth/commit/46c8480abbaa37f81fc090a6350443ed0ff39e56))
* add get_region_name() helper and switch to ISO 3166-2 codes for regions ([db61e41](https://www.github.com/fluid-project/hearth/commit/db61e41e1185a2fd5f245f28b629a8a9948fbe79))
* add interactive locale selection during hearth:install ([7926352](https://www.github.com/fluid-project/hearth/commit/7926352b36f979891b31c103ef374ed2b665b202))
* add migrations for organizations, memberships, and invitations ([0b98778](https://www.github.com/fluid-project/hearth/commit/0b98778b5c8b91c87ad6f5d65ed6c0d4ff608831))
* add RequirePassword middleware with localization support ([d38328d](https://www.github.com/fluid-project/hearth/commit/d38328ddc6a6e4cd72230afecc216e1213adff5c))
* add resources and resource tests (resolves [#7](https://www.github.com/fluid-project/hearth/issues/7), resolves [#8](https://www.github.com/fluid-project/hearth/issues/8)) ([#44](https://www.github.com/fluid-project/hearth/issues/44)) ([fcae807](https://www.github.com/fluid-project/hearth/commit/fcae8073c3291a538864b56b2cd4e153b635c9f1))
* add status messages ([8af0863](https://www.github.com/fluid-project/hearth/commit/8af086356cfd1e8b229dd885a85f59e1b6401dcd))
* add strings for two-factor challenge, handle recovery codes ([b32d872](https://www.github.com/fluid-project/hearth/commit/b32d872a8851d23e9f6a5e4d40faca96741472ff))
* add stubs for Organization, Membership and Invitation ([3054e8f](https://www.github.com/fluid-project/hearth/commit/3054e8f7aa69fafff9b10e60b5d8437155577d7f))
* add user model ([#1](https://www.github.com/fluid-project/hearth/issues/1)) ([86a5665](https://www.github.com/fluid-project/hearth/commit/86a5665d90db44c1e327a8fd73774599a42524dd))
* allow regeneration of two-factor codes ([0309e35](https://www.github.com/fluid-project/hearth/commit/0309e35642fcc52d41c0c046748eb3e6d4280709))
* close dropdown on esc keyup ([a1209ac](https://www.github.com/fluid-project/hearth/commit/a1209ac18e4bd8b4250df186ea01ab5baa0cab60))
* conditionally register organization routes ([55a8349](https://www.github.com/fluid-project/hearth/commit/55a8349abc03f1b85a104a0c9ed0c04b71d7303a))
* create get_regions() helper ([53b8879](https://www.github.com/fluid-project/hearth/commit/53b88795539e3a24844baf0f6bea336288e5a9d9))
* custom error message, handle errors properly ([149545e](https://www.github.com/fluid-project/hearth/commit/149545e1c4c9d4c5b4c18e91119b1d5a3ce4d76f))
* custom RedirectIfTwoFactorAuthenticable action ([86bf999](https://www.github.com/fluid-project/hearth/commit/86bf999a6dd987ed72cf8a76076076414962b51e))
* display recovery codes properly ([b8ba12c](https://www.github.com/fluid-project/hearth/commit/b8ba12c2afd2ee3c0c698baf5ffbdbc46b96d463))
* fix modal display ([38bcefe](https://www.github.com/fluid-project/hearth/commit/38bcefe9b3ee2b71208182eb3762d4d6c727896c))
* improve error handling for invitation flow (resolves [#28](https://www.github.com/fluid-project/hearth/issues/28)) ([#41](https://www.github.com/fluid-project/hearth/issues/41)) ([ae06929](https://www.github.com/fluid-project/hearth/commit/ae069298b4dc973d95f9b22269d1525dca3d698a))
* improve form components and capabilities ([#35](https://www.github.com/fluid-project/hearth/issues/35)) ([7b840ca](https://www.github.com/fluid-project/hearth/commit/7b840ca577ac21ad8d64496e930e98fc8b33f7b1))
* inline password confirmation ([ea73f0a](https://www.github.com/fluid-project/hearth/commit/ea73f0a4c67ee244ade944969b42e87e617e6880))
* load default locale from config/app.php in register view ([b47565f](https://www.github.com/fluid-project/hearth/commit/b47565f1e1841e431d207a91ad2cf5ddef23726d))
* make locale selection an explicit yes/no choice (resolves [#25](https://www.github.com/fluid-project/hearth/issues/25)) ([#40](https://www.github.com/fluid-project/hearth/issues/40)) ([8e41b62](https://www.github.com/fluid-project/hearth/commit/8e41b624a51ff29c8dc561b78ad0d2c8f7daa795))
* make password confirmation component generic (fix [#23](https://www.github.com/fluid-project/hearth/issues/23)) ([a05dacf](https://www.github.com/fluid-project/hearth/commit/a05dacff6f07d6486c948c6a86acc9e53aefb6ea))
* modal for password confirmation ([bb325be](https://www.github.com/fluid-project/hearth/commit/bb325be43e431a340220023d520e0547c396ed24))
* provide localized default strings ([107acbb](https://www.github.com/fluid-project/hearth/commit/107acbb4f8af229098c3ff3ce4086a1f5a92c5dd))
* publish Hearth config ([966ab54](https://www.github.com/fluid-project/hearth/commit/966ab549f71be8e664091ea1bc7b21a979b83510))
* rough two-factor implementation ([fe3a3a7](https://www.github.com/fluid-project/hearth/commit/fe3a3a70f7afa2617399b48bbf6bd9f969af1dfd))
* split routes by feature ([4b1f2d7](https://www.github.com/fluid-project/hearth/commit/4b1f2d7b6672107370755964494d18abc9a5d27e))
* two-factor challenge ([4a23da7](https://www.github.com/fluid-project/hearth/commit/4a23da75b451f0de371303d83f4e6ebbed1bd6f7))


### Bug Fixes

* add Auth facade to AcceptInvitation action ([971b07d](https://www.github.com/fluid-project/hearth/commit/971b07d94b575e72ab2fb95a7d5ed26028667a59))
* add blank entry when retrieving list of regions ([df8a501](https://www.github.com/fluid-project/hearth/commit/df8a501437f8590243b31aaaa8f7f667f2bdae81))
* add classes to service provider ([0767ab8](https://www.github.com/fluid-project/hearth/commit/0767ab816b4b672653a4ef86af730bd75c1d4c1c))
* add error if user attempting to accept invitation isn't invitee ([e81cf3c](https://www.github.com/fluid-project/hearth/commit/e81cf3c8f3a4eefd96458e67144ac3973d3dce0c))
* add flag to skip interactive install steps for ci ([7d5aa42](https://www.github.com/fluid-project/hearth/commit/7d5aa42e95e166067a6d095dba4267bbdd2bae76))
* add fr to default locales ([bfc2744](https://www.github.com/fluid-project/hearth/commit/bfc274484a6a18501b25663ff0325ad30fbaa894))
* add id and name to the region select ([efab24a](https://www.github.com/fluid-project/hearth/commit/efab24aca311c062f4d9c4fe57306cd31f24cd52))
* add locale prompt ([bb0d016](https://www.github.com/fluid-project/hearth/commit/bb0d016c506d67aba92a04558f9a9716c7c66c45))
* add region options ([c683f78](https://www.github.com/fluid-project/hearth/commit/c683f7829bdcfde476a089d74f21a1544702f1c5))
* add return types to improve static analysis ([178bf2b](https://www.github.com/fluid-project/hearth/commit/178bf2b3e5fab4a0cbf69ac74bf27b174def586b))
* adjust PHP requirements ([8498453](https://www.github.com/fluid-project/hearth/commit/8498453d00ab237ec179900787c34975e210603f))
* apply code styling rules ([448eb97](https://www.github.com/fluid-project/hearth/commit/448eb97c41c9d53b054693f7ecb50ef3b5124357))
* apply code styling rules ([36bfc92](https://www.github.com/fluid-project/hearth/commit/36bfc923137e7972ef30caccba0da459c080d298))
* apply code styling rules ([5e3ae2d](https://www.github.com/fluid-project/hearth/commit/5e3ae2d1607dcb9c3219407080eb947c9c12fc48))
* apply code styling rules ([512f0e0](https://www.github.com/fluid-project/hearth/commit/512f0e0edf2e9e17e9e2ca755995fd42e5185292))
* apply code styling rules ([33c09e0](https://www.github.com/fluid-project/hearth/commit/33c09e0e446be3b177fb8a5fef6ba12564e5cce5))
* apply code styling rules ([0a3ef4a](https://www.github.com/fluid-project/hearth/commit/0a3ef4a7c08ba1d926dad3ac8bca22ac276caa4c))
* apply code styling rules ([f4fbff6](https://www.github.com/fluid-project/hearth/commit/f4fbff60bb5a97f6d6428c3749bf7471b777269b))
* apply code styling rules ([65e856c](https://www.github.com/fluid-project/hearth/commit/65e856cae4a58fccff284e47d05a89c4ca539359))
* autoload helpers properly ([2a414fe](https://www.github.com/fluid-project/hearth/commit/2a414fec736682e25228d4c54f1504d6a216a423))
* bad method in admin template ([9497d56](https://www.github.com/fluid-project/hearth/commit/9497d568793b9dda546f8c615c95dd290614c57b))
* capitalize locale-select locales ([fcae807](https://www.github.com/fluid-project/hearth/commit/fcae8073c3291a538864b56b2cd4e153b635c9f1))
* check for no-interaction ([19c651b](https://www.github.com/fluid-project/hearth/commit/19c651b48564964480939bc8835ba6842c26883a))
* clean up config file ([0519e0d](https://www.github.com/fluid-project/hearth/commit/0519e0d37adf65c7c7423c0458d93bb0f0a08c80))
* conditional check for two-factor ([53be62f](https://www.github.com/fluid-project/hearth/commit/53be62f5fa041fc08ab80f139ed7776e16189067))
* copy failed two-factor login response ([b08e22c](https://www.github.com/fluid-project/hearth/commit/b08e22caa4dfa62f540fa7f4820ba84a48c0fb36))
* copy model stubs on install ([b6b05c6](https://www.github.com/fluid-project/hearth/commit/b6b05c60f6047c28543735b37b7dba9cd4bd6ade))
* correct namespace ([2083e92](https://www.github.com/fluid-project/hearth/commit/2083e9266a182fb49e6224a57db50c75b0c33e4a))
* display recovery codes when regenerated ([1b1b33b](https://www.github.com/fluid-project/hearth/commit/1b1b33b71da6d5b0d7cb1cedcc2a940b8058477f))
* enable two-factor by modifying config ([95c309b](https://www.github.com/fluid-project/hearth/commit/95c309b57ddc1879286838ca1a8e91da0afda085))
* enable two-factor by modifying config ([a9b6476](https://www.github.com/fluid-project/hearth/commit/a9b6476ecc7ab04ff353ca0c34176595f21b7434))
* ensure default messages are loaded for password confirmation ([77e1e2c](https://www.github.com/fluid-project/hearth/commit/77e1e2ca26d21cfe097df585816e469ebbe12c8d))
* ensure that only invited user can accept invitation ([97e63be](https://www.github.com/fluid-project/hearth/commit/97e63be331b0bb87d38cda1c340010ec97abe720))
* improve message for failed invitation accept attempt ([e926d2a](https://www.github.com/fluid-project/hearth/commit/e926d2af3f569867c6b4e32c5853465f76327413))
* install RequirePassword middleware ([f2b5b65](https://www.github.com/fluid-project/hearth/commit/f2b5b6599a9ffb5f5ce7b33bfa105b8c643e34cd))
* localized route in two-factor challenge view ([2aec4f7](https://www.github.com/fluid-project/hearth/commit/2aec4f7dcfde905ffc3749bef53f823418860618))
* migration publishing ([02756c8](https://www.github.com/fluid-project/hearth/commit/02756c861468815484b0e1d5b89c51ad2acded59))
* move invitation template into proper location ([229c8ae](https://www.github.com/fluid-project/hearth/commit/229c8ae630a38561d015e5b6a04247391c3a0ba0))
* move invitation template into proper location ([1174f62](https://www.github.com/fluid-project/hearth/commit/1174f6241e311dd4778c24e629c7b1a26da30f51))
* namespace components ([2bb0b05](https://www.github.com/fluid-project/hearth/commit/2bb0b052a306331e0af454da66be49caa11eb86a))
* namespace more components ([4eba5dd](https://www.github.com/fluid-project/hearth/commit/4eba5dde13d77e225004d93bedf2ef746d262d1d))
* normalize locale endonyms (resolves [#26](https://www.github.com/fluid-project/hearth/issues/26)) ([#39](https://www.github.com/fluid-project/hearth/issues/39)) ([470783b](https://www.github.com/fluid-project/hearth/commit/470783bc0a8e4d58549f20730a121702d0f16568))
* only add RedirectToPreferredLocale middleware if it hasn't been added yet ([bf0137b](https://www.github.com/fluid-project/hearth/commit/bf0137b7e57f9202618414e245a3d4786aa17387))
* prevent function from being namespaced ([25e234e](https://www.github.com/fluid-project/hearth/commit/25e234e9ebfd8fae23804f413e8fa8f3da2fda95))
* proper class name ([56da49a](https://www.github.com/fluid-project/hearth/commit/56da49aa65e66b3a395a9819f097d138147325b4))
* proper class name ([ee37849](https://www.github.com/fluid-project/hearth/commit/ee37849f494cf87a1ede219e382891d24988da4b))
* proper route ([c12760b](https://www.github.com/fluid-project/hearth/commit/c12760b4e5ece6590be18510e6d8affbc71e7e7b))
* properly copy tests ([7f068a4](https://www.github.com/fluid-project/hearth/commit/7f068a4dec33db8231694806f8d58438c4d13510))
* publishing issue ([6811ec4](https://www.github.com/fluid-project/hearth/commit/6811ec4e726824f3e6977c1be8754fcd99f9b042))
* put prompt where it belongs ([0cab58d](https://www.github.com/fluid-project/hearth/commit/0cab58d6c7b6fc279d7822560b9380d0f3a50373))
* region validation rule ([9e213e1](https://www.github.com/fluid-project/hearth/commit/9e213e1af5af94279804a557a85dc92b598e8891))
* remove 'custom-message' string ([c8803fc](https://www.github.com/fluid-project/hearth/commit/c8803fc920725fe35d730628384b3e45c4b465e2))
* remove debugging code ([9485696](https://www.github.com/fluid-project/hearth/commit/9485696145a4001c16ee1ed5fd74ac464955ba46))
* remove leftover code ([ffe0568](https://www.github.com/fluid-project/hearth/commit/ffe05686683522c2d32ad9cde9a1bf3835ef855d))
* remove missing config file from command ([387e2da](https://www.github.com/fluid-project/hearth/commit/387e2dacd760073b93af6341df60893ce5d641ba))
* remove unused two-factor contract ([69e7316](https://www.github.com/fluid-project/hearth/commit/69e7316d5e02028bbc3e756c9057faa790926bae))
* some PHP coding standards fixes ([6e3ef54](https://www.github.com/fluid-project/hearth/commit/6e3ef54c6be50c8dca22cb0a55f417c284723fcf))
* update config references ([cd12d31](https://www.github.com/fluid-project/hearth/commit/cd12d3198e8f439a2e50ed7450bf401144d18bd9))
* update config references ([2d31498](https://www.github.com/fluid-project/hearth/commit/2d31498ef497a07da817e73254f8ed3f5a25a031))
* update get_region_name() to match method in commerceguys/addressing ([573a1d6](https://www.github.com/fluid-project/hearth/commit/573a1d6d00ac4c38700d2e4c501605a0e3a10329))
* update strings, register in service provider ([3faef75](https://www.github.com/fluid-project/hearth/commit/3faef7583f25ad3208afdfb9e0c8601f61ff9ed7))
* update variable in get_region_name() ([3d5b82c](https://www.github.com/fluid-project/hearth/commit/3d5b82cc09cca8ff54316acbb85f16a4a65601c1))
* use built-in no-interaction flag ([9cac9ee](https://www.github.com/fluid-project/hearth/commit/9cac9eec87ea817a2f50a1a62a620ae07b480094))
* use generic select for region selection, add cascade delete support ([3c85c97](https://www.github.com/fluid-project/hearth/commit/3c85c977bab5c0af8003f01db0b7221beaf3bb9b))
* use Hearth strings where possible ([5158325](https://www.github.com/fluid-project/hearth/commit/5158325cf2d45027db7a18d1fb2552fbf9b990d8))
* use proper field types ([8690648](https://www.github.com/fluid-project/hearth/commit/8690648635b30226305816bc27469e65d5b4110e))

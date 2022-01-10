master@master-laptop:/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited$ npm run watch-poll

> @ watch-poll /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited
> mix watch -- --watch-options-poll=1000


✖ Mix
Compiled with some errors in 2.77s

ERROR in ./resources/js/Pages/API/Index.vue?vue&type=script&lang=js (./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/API/Index.vue?vue&type=script&lang=js) 2:0-71
Module not found: Error: Can't resolve '@/Pages/API/Partials/ApiTokenManager.vue' in '/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/resources/js/Pages/API'

ERROR in ./resources/js/Pages/API/Index.vue?vue&type=script&lang=js (./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/API/Index.vue?vue&type=script&lang=js) 3:0-48
Module not found: Error: Can't resolve '@/Layouts/AppLayout.vue' in '/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/resources/js/Pages/API'

ERROR in ./resources/js/Pages/API/Partials/ApiTokenManager.vue?vue&type=script&lang=js (./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/API/Partials/ApiTokenManager.vue?vue&type=script&lang=js) 2:0-61
Module not found: Error: Can't resolve '@/Jetstream/ActionMessage.vue' in '/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/resources/js/Pages/API/Partials'

...
ERROR in ./resources/js/Pages/Auth/ConfirmPassword.vue?vue&type=script&lang=js (./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Auth/ConfirmPassword.vue?vue&type=script&lang=js) 3:0-71
Module not found: Error: Can't resolve '@/Jetstream/AuthenticationCard.vue' in '/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/resources/js/Pages/Auth'

ERROR in ./resources/js/Pages/Auth/ConfirmPassword.vue?vue&type=script&lang=js (./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Auth/ConfirmPassword.vue?vue&type=script&lang=js) 4:0-79
Module not found: Error: Can't resolve '@/Jetstream/AuthenticationCardLogo.vue' in '/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/resources/js/Pages/Auth'

ERROR in ./resources/js/Pages/Auth/ConfirmPassword.vue?vue&type=script&lang=js (./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Auth/ConfirmPassword.vue?vue&type=script&lang=js) 5:0-47
Module not found: Error: Can't resolve '@/Jetstream/Button.vue' in '/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/resources/js/Pages/Auth'

...
ERROR in ./resources/js/Pages/Welcome.vue?vue&type=style&index=0&id=317d1a6e&scoped=true&lang=css (./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Welcome.vue?vue&type=style&index=0&id=317d1a6e&scoped=true&lang=css)
Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):
Error: Cannot find module '@left4code/tw-starter/dist/js/colors'
Require stack:
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/tailwind.config.js
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/tailwindcss/lib/lib/setupTrackingContext.js
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/tailwindcss/lib/index.js
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/webpack.mix.js
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/laravel-mix/setup/webpack.config.js
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/webpack-cli/lib/webpack-cli.js
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/webpack-cli/lib/bootstrap.js
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/webpack-cli/bin/cli.js
- /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/webpack/bin/webpack.js
at Function.Module._resolveFilename (internal/modules/cjs/loader.js:902:15)
at Function.Module._load (internal/modules/cjs/loader.js:746:27)
at Module.require (internal/modules/cjs/loader.js:974:19)
at require (internal/modules/cjs/helpers.js:93:18)
at Object.<anonymous> (/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/tailwind.config.js:1:23)
    at Module._compile (internal/modules/cjs/loader.js:1085:14)
    at Object.Module._extensions..js (internal/modules/cjs/loader.js:1114:10)
    at Module.load (internal/modules/cjs/loader.js:950:32)
    at Function.Module._load (internal/modules/cjs/loader.js:790:12)
    at Module.require (internal/modules/cjs/loader.js:974:19)

    ERROR in ./resources/app/assets/sass/app.scss
    Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):
    ModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):
    SassError: Can't find stylesheet to import.
    ╷
    13 │ @import "tailwind";
    │         ^^^^^^^^^^
    ╵
    resources/app/assets/sass/app.scss 13:9  root stylesheet
    at processResult (/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/webpack/lib/NormalModule.js:751:19)
    at /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/webpack/lib/NormalModule.js:853:5
    at /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/loader-runner/lib/LoaderRunner.js:399:11
    at /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/loader-runner/lib/LoaderRunner.js:251:18
    at context.callback (/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/loader-runner/lib/LoaderRunner.js:124:13)
    at /mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/sass-loader/dist/index.js:54:7
    at Function.call$2 (/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/sass/sass.dart.js:98996:16)
    at render_closure1.call$2 (/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/sass/sass.dart.js:84511:12)
    at _RootZone.runBinary$3$3 (/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/sass/sass.dart.js:29540:18)
    at _FutureListener.handleError$1 (/mnt/_work_sdb8/wwwroot/lar/AdsMdnAdminarea/AdsMdnAdminarea_Inited/node_modules/sass/sass.dart.js:28062:21)

    1 ERROR in child compilations (Use 'stats.children: true' resp. '--stats-children' for more details)
    webpack compiled with 101 errors

    ● Mix █████████████████████████ cache (99%)
    store build dependencies

    [Browsersync] Proxying: http://midone-vue-laravel.test
    [Browsersync] Access URLs:
    ----------------------------------------
    Local: http://localhost:3000
    External: http://213.109.234.130:3000
    ----------------------------------------
    UI: http://localhost:3001
    UI External: http://localhost:3001
    ----------------------------------------
    [Browsersync] Watching files...

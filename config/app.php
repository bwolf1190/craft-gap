<?php
/**
 * Yii Application Config
 *
 * Edit this file at your own risk!
 *
 * The array returned by this file will get merged with
 * vendor/craftcms/cms/src/config/app.php and app.[web|console].php, when
 * Craft's bootstrap script is defining the configuration for the entire
 * application.
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 *
 * If you want to modify the application config for *only* web requests or
 * *only* console requests, create an app.web.php or app.console.php file in
 * your config/ folder, alongside this one.
 */

return [

    'modules' => [
        'signup-module' => [
            'class' => \modules\signupmodule\SignupModule::class,
        ],
    ],
    'bootstrap' => ['signup-module'],
    /*'*'       => [
        'modules'   => [
            'site-module' => [
                'class' => \modules\setupmodule\SetupModule::class,
            ],
        ],
        //'bootstrap' => ['setup-module'],
    ],

    // Live (production) environment
    'live'    => [
    ],

    // Staging (pre-production) environment
    'staging' => [
    ],

    // Local (development) environment
    'local'   => [
    ],
    //'bootstrap' => ['my-module'],*/
];

<?php

return [

    'manifest' => [

        'name' => env('APP_NAME', 'Shoe Store'),
        'short_name' => 'ShoeStore',

        'start_url' => '/',

        'background_color' => '#ffffff',
        'theme_color' => '#000000',

        'display' => 'standalone',
        'orientation'=> 'portrait',

        'status_bar' => 'black',

        'icons' => [

            [
                'src' => '/icons/icon-72x72.png',
                'sizes' => '72x72',
                'type' => 'image/png',
                'purpose' => 'any'
            ],

            [
                'src' => '/icons/icon-96x96.png',
                'sizes' => '96x96',
                'type' => 'image/png',
                'purpose' => 'any'
            ],

            [
                'src' => '/icons/icon-128x128.png',
                'sizes' => '128x128',
                'type' => 'image/png',
                'purpose' => 'any'
            ],

            [
                'src' => '/icons/icon-144x144.png',
                'sizes' => '144x144',
                'type' => 'image/png',
                'purpose' => 'any'
            ],

            [
                'src' => '/icons/icon-152x152.png',
                'sizes' => '152x152',
                'type' => 'image/png',
                'purpose' => 'any'
            ],

            [
                'src' => '/icons/icon-192x192.png',
                'sizes' => '192x192',
                'type' => 'image/png',
                'purpose' => 'any'
            ],

            [
                'src' => '/icons/icon-384x384.png',
                'sizes' => '384x384',
                'type' => 'image/png',
                'purpose' => 'any'
            ],

            [
                'src' => '/icons/icon-512x512.png',
                'sizes' => '512x512',
                'type' => 'image/png',
                'purpose' => 'any'
            ],

        ],

        'splash' => [

            [
                'src' => '/images/splash-640x1136.png',
                'media' => '(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)'
            ],

        ],

        'shortcuts' => [

            [
                'name' => 'Home',
                'description' => 'Go to Home',
                'url' => '/',
                'icons' => [
                    "src" => "/icons/icon-96x96.png",
                    "purpose" => "any"
                ]
            ]

        ],

        'custom' => []
    ]

];
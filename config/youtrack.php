<?php

/*
 * This file is part of Laravel YouTrack SDK.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | YouTrack Base URI
    |--------------------------------------------------------------------------
    |
    | Indicates base URI of the YouTrack instance.
    |
    */

    'base_uri' => env('YOUTRACK_BASE_URI'),

    /*
    |--------------------------------------------------------------------------
    | Default YouTrack Authorizer Name
    |--------------------------------------------------------------------------
    |
    | This option controls the default authorizer that will be used by the
    | library when YouTrack authorization is required. You may set this to
    | any of the drivers defined in the "authorizers" array below.
    |
    | Supported: "token" (recommended), "cookie"
    |
    */

    'authorizer' => env('YOUTRACK_AUTH', 'token'),

    /*
    |--------------------------------------------------------------------------
    | YouTrack Authorizers
    |--------------------------------------------------------------------------
    |
    | Here are each of the authorizers available in YouTrack REST API.
    |
    */

    'authorizers' => [
        'token' => [
            'driver' => \Cog\YouTrack\Rest\Authorizer\TokenAuthorizer::class,
            'token' => env('YOUTRACK_TOKEN'),
        ],

        'cookie' => [
            'driver' => \Cog\YouTrack\Rest\Authorizer\CookieAuthorizer::class,
            'username' => env('YOUTRACK_USERNAME'),
            'password' => env('YOUTRACK_PASSWORD'),
        ],
    ],
];

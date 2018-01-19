<?php

return [
    'site' => [
        'name'        => env('APP_NAME'),
        'url'         => env('APP_URL'),
        'project'     => env('APP_PROJECT'),
        'description' => env('APP_DESCRIPTION'),
        'keywords'    => env('APP_KEYWORDS'),
        'software'    => 'store',
        'repo'        => env('APP_REPO'),
        'docs'        => env('APP_DOCS'),
        'support'     => env('APP_SUPPORT_EMAIL'),
    ],

    'social' => [
        'twitter_name' => env('SOCIAL_TWITTER_NAME'),
    ],

    'theme' => [
        'use_topics_icon'     => env('THEME_TOPICS_ICON'),
        'inactive_topic_icon' => '/icon/new_none.png',
        'active_topic_icon'   => '/icon/new_some.png',
    ],

    'gravatar' => [
        'default_image' => 'identicon',
        'size'          => 24,
        'rating'        => 'pg',
        'use_https'     => true,
    ],

    'application' => [
        'controllersDir' => app_path('controller') . DIRECTORY_SEPARATOR,
        'modelsDir'      => app_path('model') . DIRECTORY_SEPARATOR,
        'viewsDir'       => app_path('views') . DIRECTORY_SEPARATOR,
        'libraryDir'     => app_path('library') . DIRECTORY_SEPARATOR,
        'staticBaseUri'  => env('APP_STATIC_URL'),
        'baseUri'        => env('APP_BASE_URI'),
        'debug'          => env('APP_DEBUG', false),
    ],

    'mandrillapp' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'github' => [
        'clientId'     => env('GITHUB_CLIENT_ID'),
        'clientSecret' => env('GITHUB_SECRET'),
        'redirectUri'  => env('GITHUB_REDIRECT_URI'),
    ],

    'dropbox' => [
        'accessToken' => env('DROPBOX_TOKEN'),
        'appSecret'   => env('DROPBOX_SECRET'),
        'prefix'      => env('DROPBOX_PREFIX'),
    ],

    'elasticsearch' => [
        'index' => env('ELASTIC_INDEX'),
        'hosts' => [
            env('ELASTIC_HOST', '127.0.0.1') .':' . env('ELASTIC_PORT', 9200),
        ],
    ],

    'error' => [
        'logger'    => app_path('logs/error.log'),
        'formatter' => [
            'format' => env('LOGGER_FORMAT', '[%date%][%type%] %message%'),
            'date'   => 'd-M-Y H:i:s',
        ],
        'controller' => 'error',
        'action'     => 'route500',
    ],

    'reCaptcha' => [
        'siteKey' => env('RECAPTCHA_KEY'),
        'secret'  => env('RECAPTCHA_SECRET'),
    ],

    'analytics' => env('GOOGLE_ANALYTICS'),
];

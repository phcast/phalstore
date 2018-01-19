<?php

return [

    // smtp, sendmail, mail
    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST'),

    'port' => env('MAIL_PORT'),

    'security' => env('MAIL_ENCRYPTION'),

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    'from' => [
        'email' => env('MAIL_FROM_ADDRESS'),
        'name'  => env('APP_NAME'),
    ],

    'sendmail' => '/usr/sbin/sendmail -bs',
];

<?php

return [
    'token_bot'  => env('DISCORD_BOT_TOKEN', null),
    'message'    => [
        'new_discussions'    => env('DISCORD_MESSAGE_ABOUT_NEW_DISCUSSIONS', false),
        'new_replies'        => env('DISCORD_MESSAGE_ABOUT_REPLIES', false),
        'solved_discussions' => env('DISCORD_MESSAGE_ABOUT_SOLVED_DISCUSSIONS', false),
    ],
    'channel_id' => env('DISCORD_CHANNEL_ID', null),
    'guild_id'   => env('DISCORD_GUILD_ID', null),
];

<?php

return [
    // Application Service Providers
    App\Provider\Config\ServiceProvider::class,
//    App\Provider\UrlResolver\ServiceProvider::class,
//    App\Provider\ModelsCache\ServiceProvider::class,
//    App\Provider\ViewCache\ServiceProvider::class,
    App\Provider\Logger\ServiceProvider::class,
//    App\Provider\Security\ServiceProvider::class,
//    App\Provider\Session\ServiceProvider::class,
    App\Provider\VoltTemplate\ServiceProvider::class,
    App\Provider\View\ServiceProvider::class,
//    App\Provider\Database\ServiceProvider::class,
//    App\Provider\ModelsManager\ServiceProvider::class,
//    App\Provider\ModelsMetadata\ServiceProvider::class,
//    App\Provider\Queue\ServiceProvider::class,
    App\Provider\Routing\ServiceProvider::class,
//    App\Provider\Dispatcher\ServiceProvider::class,
//    App\Provider\Markdown\ServiceProvider::class,
//    App\Provider\Notifications\ServiceProvider::class,
//    App\Provider\Flash\ServiceProvider::class,
//    App\Provider\SearchEngine\ServiceProvider::class,
//    App\Provider\Avatar\ServiceProvider::class,
//    App\Provider\Timezone\ServiceProvider::class,
//    App\Provider\Breadcrumbs\ServiceProvider::class,
//    App\Provider\Captcha\ServiceProvider::class,
//    App\Provider\Annotations\ServiceProvider::class,
    App\Provider\FileSystem\ServiceProvider::class,
//    App\Provider\Email\ServiceProvider::class,
//    App\Provider\Mailer\ServiceProvider::class,
//    App\Provider\Assets\ServiceProvider::class,
//    App\Provider\Discord\ServiceProvider::class,

    // Third Party Providers
    // ...
];

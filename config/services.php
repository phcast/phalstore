<?php

use App\Model\Services\Service;

return [
    // abstract                  => concrete
    //
    Service\Users::class         => Service\Users::class,
    Service\Activities::class    => Service\Activities::class,
    Service\Posts::class         => Service\Posts::class,
    Service\Notifications::class => Service\Notifications::class,
];

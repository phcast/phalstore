<?php

namespace App\Provider\EventsManager;

use Phalcon\Events\Manager;
use App\Provider\AbstractServiceProvider;

/**
 * App\Provider\EventsManager\ServiceProvider
 *
 * @package App\Provider\EventManager
 */
class ServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'eventsManager';
    
    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared(
            $this->serviceName,
            function () {
                $em = new Manager();
                $em->enablePriorities(true);
                
                return $em;
            }
        );
    }
}

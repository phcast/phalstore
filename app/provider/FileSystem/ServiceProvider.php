<?php

namespace App\Provider\FileSystem;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use App\Provider\AbstractServiceProvider;

/**
 * App\Provider\FileSystem\ServiceProvider
 *
 * @package App\Provider\FileSystem
 */
class ServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'filesystem';

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function register()
    {
        $this->di->set(
            $this->serviceName,
            function ($root = null) {
                if ($root === null) {
                    $root = dirname(app_path());
                }

                return new Filesystem(new Local($root));
            }
        );
    }
}

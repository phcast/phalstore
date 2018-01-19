<?php

namespace App\Provider\Environment;

use App\Provider\AbstractServiceProvider;

/**
 * App\Provider\Environment\ServiceProvider
 *
 * @package App\Provider\Environment
 */
class ServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'environment';

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function register()
    {
        $this->di->set(
            $this->serviceName,
            function ($value = null) {
                $environment = container('bootstrap')->getEnvironment();

                if (func_num_args() > 0) {
                    $patterns = is_array(func_get_arg(0)) ? func_get_arg(0) : func_get_args();

                    foreach ($patterns as $pattern) {
                        if ($pattern === $environment) {
                            return true;
                        }
                    }

                    return false;
                }

                return $environment;
            }
        );
    }
}

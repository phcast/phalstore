<?php

namespace App\Provider\Routing;

use Phalcon\Mvc\Router;
use InvalidArgumentException;
use App\Provider\AbstractServiceProvider;

/**
 * App\Provider\Routing\ServiceProvider
 *
 * @package App\Provider\Routing
 */
class ServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'router';

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
                $mode = container('bootstrap')->getMode();

                switch ($mode) {
                    case 'normal':
                        /** @noinspection PhpIncludeInspection */
                        $router = require config_path('routes.php');

                        if (!isset($_GET['_url'])) {
                            $router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI);
                        }

                        $router->removeExtraSlashes(true);
                        $router->setEventsManager(container('eventsManager'));
                        $router->setDefaultNamespace('App\Controllers');
                        $router->notFound([
                            'controller' => 'error',
                            'action'     => 'route404',
                        ]);

                        break;
                    case 'cli':
                        /** @noinspection PhpIncludeInspection */
                        $router = require config_path('cli-routes.php');

                        break;
                    case 'api':
                        throw new InvalidArgumentException(
                            'Not implemented yet.'
                        );
                    default:
                        throw new InvalidArgumentException(
                            sprintf(
                                'Invalid application mode. Expected either "normal" or "cli" or "api". Got "%s".',
                                is_scalar($mode) ? $mode : var_export($mode, true)
                            )
                        );
                }

                $router->setDI(container());

                return $router;
            }
        );
    }
}

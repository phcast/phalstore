<?php

namespace App\Listener;

use Phalcon\Dispatcher;
use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher\Exception;
use App\Exception\AppException;

/**
 * App\Listener\DispatcherListener
 *
 * @package App\Listener
 */
class DispatcherListener extends AbstractListener
{
    /**
     * Before exception is happening.
     *
     * @param  Event      $event
     * @param  Dispatcher $dispatcher
     * @param  \Exception $exception
     * @return bool
     *
     * @throws \Exception|\Throwable
     */
    public function beforeException(Event $event, Dispatcher $dispatcher, $exception)
    {
        if ($exception instanceof Exception) {
            switch ($exception->getCode()) {
                case Dispatcher::EXCEPTION_CYCLIC_ROUTING:
                    $code = 400;
                    $dispatcher->forward([
                        'controller' => 'error',
                        'action'     => 'route400',
                    ]);

                    break;
                default:
                    $code = 404;
                    $dispatcher->forward([
                        'controller' => 'error',
                        'action'     => 'route404',
                    ]);
            }

            container('logger')->error("Dispatching [$code]: " . $exception->getMessage());

            return false;
        }

        if ($exception instanceof AppException) {
            switch ($exception->getCode()) {
                case 404:
                    $code = 404;
                    $dispatcher->forward([
                        'controller' => 'error',
                        'action'     => 'route404',
                    ]);

                    break;
                default:
                    $code = 404;
                    $dispatcher->forward([
                        'controller' => 'error',
                        'action'     => 'route404',
                    ]);
            }

            container('logger')->error("Dispatching [$code]: " . $exception->getMessage());

            return false;
        }

        if ($exception instanceof \Exception || $exception instanceof \Throwable) {
            container('logger')->error("Dispatching [{$exception->getCode()}]: " . $exception->getMessage());

            if (!environment('production')) {
                throw $exception;
            }
        }

        $dispatcher->forward([
            'controller' => 'error',
            'action'     => 'route500',
        ]);

        return $event->isStopped();
    }
}

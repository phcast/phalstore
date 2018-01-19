<?php

namespace App\Listener;

use Phalcon\Events\Event;
use Phalcon\Mvc\View\Exception;
use Phalcon\Mvc\ViewBaseInterface;

/**
 * App\Listener\ViewListener
 *
 * @package App\Listener
 */
class ViewListener extends AbstractListener
{
    /**
     * Notify about not found views.
     *
     * @param Event             $event
     * @param ViewBaseInterface $view
     * @param mixed             $viewEnginePath
     *
     * @throws Exception
     */
    public function notFoundView(Event $event, ViewBaseInterface $view, $viewEnginePath)
    {
        if ($viewEnginePath && !is_array($viewEnginePath)) {
            $viewEnginePath = [$viewEnginePath];
        }

        $message = sprintf(
            'View was not found in any of the views directory. Active render paths: [%s]',
            ($viewEnginePath ? join(', ', $viewEnginePath) : gettype($viewEnginePath))
        );

        container()->get('logger')->error($message);

        if ($event->isCancelable()) {
            $event->stop();
        }

        throw new Exception($message);
    }
}

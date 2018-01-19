<?php

namespace App\Listener;

use Phalcon\DiInterface;
use Phalcon\Mvc\User\Component;

/**
 * App\Listener\AbstractListener
 *
 * @package App\Listener
 */
class AbstractListener extends Component
{
    public function __construct(DiInterface $di = null)
    {
        $di = $di ?: container();

        $this->setDI($di);
    }
}

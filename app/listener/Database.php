<?php

namespace App\Listener;

use Phalcon\Events\Event;
use Phalcon\Db\Adapter\Pdo;

/**
 * App\Listener\Database
 *
 * @package App\Listener
 */
class Database
{
    /**
     * Database queries listener.
     *
     * You can disable queries logging by changing log level.
     *
     * @param  Event $event
     * @param  Pdo   $connection
     * @return bool
     */
    public function beforeQuery(Event $event, Pdo $connection)
    {
        $string    = $connection->getSQLStatement();
        $variables = $connection->getSqlVariables();
        $context   = $variables ?: [];

        $logger = container()->get('logger', ['db']);

        if (!empty($context)) {
            $context = ' [' . implode(', ', $context) . ']';
        } else {
            $context = '';
        }

        $logger->debug($string . $context);

        return true;
    }
}

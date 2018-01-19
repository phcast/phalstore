<?php

namespace App\Provider\VoltTemplate;

use App\Version;

/**
 * App\Provider\VoltTemplate\VoltFunctions
 *
 * @package App\Provider\VoltTemplate
 */
class VoltFunctions
{
    /**
     * Compile any function call in a template.
     *
     * @param string $name
     * @param mixed  $arguments
     *
     * @return null|string
     */
    public function compileFunction($name, $arguments)
    {
        switch ($name) {
            case 'join':
                return 'implode(' . $arguments . ')';
            case 'chr':
            case 'number_format':
                return $name . '(' . $arguments . ')';
            case 'gravatar':
                return 'container("gravatar")->getAvatar(' . $arguments . ')';
            case 'forum_version':
                return Version::class . '::get()';
            case 'forum_name':
                return '"'. container('config')->site->software . '"';
        }

        return null;
    }

    /**
     * Compile some filters.
     *
     * @param  string $name      The filter name
     * @param  mixed  $arguments The filter args
     * @return string|null
     */
    public function compileFilter($name, $arguments)
    {
        switch ($name) {
            // @todo
        }

        return null;
    }
}

<?php

namespace Silly\Edition\PhpDi;

use DI\Container;

/**
 * Silly CLI application using PHP-DI.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
class Application extends \Silly\Application
{
    public function __construct($name = 'UNKNOWN', $version = 'UNKNOWN', Container $container = null)
    {
        parent::__construct($name, $version);

        $container = $container ?: $this->createContainer();

        $this->useContainer($container, true, true);
    }

    /**
     * Override this method to configure your container, or pass it in the class constructor.
     *
     * @return Container
     */
    protected function createContainer()
    {
        return new Container();
    }
}

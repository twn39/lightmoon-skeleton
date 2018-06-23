<?php

namespace App\Controllers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ControllerProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $container
     */
    public function register(Container $container)
    {
        $container[HomeController::class] = new HomeController();
    }
}

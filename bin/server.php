<?php

require __DIR__ . '/../vendor/autoload.php';
/**
 * Self-called anonymous function that creates its own scope and keep the global namespace clean.
 */
(function () {
    $setting = require __DIR__.'/../src/settings.php';
    $app = new LightMoon\Application(new \Zend\Config\Config($setting));

    require __DIR__.'/../src/dependencies.php';
    require __DIR__.'/../src/middleware.php';
    require __DIR__.'/../src/routes.php';
    $app->run();
})();

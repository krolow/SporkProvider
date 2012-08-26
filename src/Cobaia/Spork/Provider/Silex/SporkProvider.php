<?php
namespace Cobaia\Spork\Provider\Cilex;

use Spork\ProcessManager;
use Silex\Application;
use Silex\ServiceProviderInterface;

class SporkProvider implements ServiceProviderInterface
{

    public function register(Application $app)
    {
        $app['spork'] = $app->share(function () use ($app) {
            return new Spork\ProcessManager();
        });
    }

    public function boot(Application $app)
    {

    }

}

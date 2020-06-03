<?php

namespace Davidsneal\StatamicCircleCi;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\CP\Nav;
use Statamic\Facades\Permission;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__ . '/../routes/cp.php',
    ];

    protected $scripts = [
        __DIR__.'/../dist/js/cp.js',
    ];

    public function boot()
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'circleci');
        $this->mergeConfigFrom(__DIR__ . '/../config/circleci.php', 'circleci');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/circleci.php' => config_path('statamic/circleci.php'),
            ], 'config');
        }

        $this->bootNavigation();
        $this->bootPermissions();
    }

    private function bootNavigation(): void
    {
        Nav::extend(function($nav) {
            $nav->create('Deploy')
                ->icon('radio')
                ->section('Tools')
                ->route('davidsneal.circleci.index')
                ->can('deploy site');
        });
    }

    private function bootPermissions() {
        $this->app->booted(function () {
            Permission::group('circleci', 'Deploy', function () {
                Permission::register('deploy site')
                    ->label('Deploy site');
            });
        });
    }
}

<?php

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SquareServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-square')
            ->hasConfigFile();
    }

    public function bootingPackage()
    {
        $this->app->singleton(
            abstract: Square::class,
            concrete: function ($app) {
                return new Square();
            }
        );
    }
}
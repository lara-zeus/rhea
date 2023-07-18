<?php

namespace LaraZeus\Rhea;

use LaraZeus\Core\CoreServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RheaServiceProvider extends PackageServiceProvider
{
    public function packageBooted(): void
    {
        CoreServiceProvider::setThemePath('rhea');
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('zeus-rhea')
            ->hasViews('zeus')
            ->hasConfigFile();
    }
}

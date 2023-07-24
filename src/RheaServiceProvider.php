<?php

namespace LaraZeus\Rhea;

use LaraZeus\Core\CoreServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RheaServiceProvider extends PackageServiceProvider
{
    public static string $name = 'zeus-rhea';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews('zeus')
            ->hasConfigFile();
    }
}

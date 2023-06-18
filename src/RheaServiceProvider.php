<?php

namespace LaraZeus\Rhea;

use Filament\PluginServiceProvider;
use LaraZeus\Rhea\Filament\Pages\Importer;

class RheaServiceProvider extends PluginServiceProvider
{
    public static string $name = 'zeus-rhea';

    protected array $pages = [
        Importer::class,
    ];
}

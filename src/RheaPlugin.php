<?php

namespace LaraZeus\Rhea;

use Filament\Contracts\Plugin;
use Filament\Panel;
use LaraZeus\Rhea\Filament\Pages\Importer;

class RheaPlugin implements Plugin
{
    public function getId(): string
    {
        return 'zeus-rhea';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                Importer::class,
            ]);
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}

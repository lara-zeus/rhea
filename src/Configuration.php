<?php

namespace LaraZeus\Rhea;

use Closure;

trait Configuration
{
    protected Closure | string $navigationGroupLabel = 'Rhea';

    public function navigationGroupLabel(Closure | string $label): static
    {
        $this->navigationGroupLabel = $label;

        return $this;
    }

    public function getNavigationGroupLabel(): Closure | string
    {
        return $this->evaluate($this->navigationGroupLabel);
    }
}

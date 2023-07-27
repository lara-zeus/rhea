<?php

namespace LaraZeus\Rhea;

trait Configuration
{
    protected string $navigationGroupLabel = 'Rhea';

    public function navigationGroupLabel(string $lable): static
    {
        $this->navigationGroupLabel = $lable;

        return $this;
    }

    public function getNavigationGroupLabel(): string
    {
        return $this->navigationGroupLabel;
    }
}

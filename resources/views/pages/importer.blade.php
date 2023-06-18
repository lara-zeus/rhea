<div class="space-y-4">

    <x-filament::card>
        found:
        <span class="text-md font-semibold">{{ $this->getViewData()['wpPosts']->count() }}</span>
        posts
    </x-filament::card>

    {{ $this->form }}

    <div class="text-center">
        <x-filament::button type="submit" class="my-4" wire:click.prevent="submit">
            Import
        </x-filament::button>
    </div>
</div>
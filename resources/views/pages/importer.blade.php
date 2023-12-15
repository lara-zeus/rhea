<x-filament::page>
    <x-filament::section>
        found:
        <span class="text-md font-semibold">{{ $this->getViewData()['wpPosts']->count() }}</span>
        posts
    </x-filament::section>

    {{ $this->form }}

    <div class="text-center">
        <x-filament::button type="submit" class="my-4" wire:click.prevent="submit">
            Import
        </x-filament::button>
    </div>
</x-filament::page>

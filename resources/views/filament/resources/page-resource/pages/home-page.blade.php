<x-filament-panels::page>

    <form wire:submit="save">
        {{ $this->form }}

        <button type="submit">
            Submit
        </button>
    </form>

    <x-filament-actions::modals />

</x-filament-panels::page>

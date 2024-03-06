<?php

namespace Hup234design\Cms\Filament\Forms\Components;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Field;

class MediablePreview extends Field
{
    protected string $view = 'cms::filament.forms.components.mediable-preview';

    protected array | \Closure | null $selectedMedia = null;

    protected string | \Closure | null $useCuration = null;

    public function selectedMedia(): array
    {
        return $this->evaluate($this->selectedMedia);
    }

    public function useCuration(): string | null
    {
        return $this->evaluate($this->useCuration);
    }

    public function media(array | \Closure $condition = null): static
    {
        $this->selectedMedia = $condition;
        return $this;
    }

    public function getMedia()
    {
        $media = collect( $this->selectedMedia() )->first();
        return $media;
    }

    public function curation(string | \Closure $condition = null): static
    {
        $this->useCuration = $condition;
        return $this;
    }
}

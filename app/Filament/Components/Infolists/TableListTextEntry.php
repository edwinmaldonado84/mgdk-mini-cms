<?php

namespace App\Filament\Components\Infolists;

use Closure;
use Filament\Infolists\Components\TextEntry;
use Filament\Support\Enums\Alignment;

class TableListTextEntry extends TextEntry
{
    protected bool|Closure $isWrapText = false;

    protected Alignment|string|Closure|null $alignment = Alignment::End;

    public static function make(?string $name = null): static
    {
        $static = parent::make($name);
        $static->columnSpanFull();

        return $static;
    }

    public function wrapText(): static
    {
        $this->isWrapText = true;

        return $this;
    }

    public function isWrapText(mixed $state): bool
    {
        return (bool) $this->evaluate($this->isWrapText, [
            'state' => $state,
        ]);
    }

    public function getCustomEntryWrapperView(): string
    {
        return 'text-entry-wrapper';
    }
}

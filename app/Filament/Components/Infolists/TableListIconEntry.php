<?php

namespace App\Filament\Components\Infolists;

use Filament\Infolists\Components\IconEntry;

class TableListIconEntry extends IconEntry
{
    public static function make(?string $name = null): static
    {
        $static = parent::make($name);
        $static->columnSpanFull();

        return $static;
    }

    public function getCustomEntryWrapperView(): string
    {
        return 'icon-entry-wrapper';
    }
}

<?php

namespace App\Filament\Components\Infolists;

class TableListStatusEntry
{
    public static function make($name): TableListIconEntry
    {
        return TableListIconEntry::make('active')
            ->iconColor(fn ($state) => $state->getColor());
    }
}

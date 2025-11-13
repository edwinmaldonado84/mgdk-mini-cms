<?php

namespace App\Filament\Components\Infolists;

use Filament\Support\Icons\Heroicon;

class TableListActiveEntry
{
    public static function make($name = 'active'): TableListIconEntry
    {
        return TableListIconEntry::make($name)
            ->icon(fn (string $state): Heroicon => match ($state) {
                '0' => Heroicon::OutlinedXCircle,
                '1' => Heroicon::OutlinedCheckCircle,
                default => Heroicon::OutlinedXCircle,
            })
            ->color(fn (string $state): string => match ($state) {
                '0' => 'danger',
                '1' => 'success',
                default => 'danger',
            });
    }
}

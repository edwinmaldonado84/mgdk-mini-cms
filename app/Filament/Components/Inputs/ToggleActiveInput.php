<?php

namespace App\Filament\Components\Inputs;

use Filament\Forms\Components\Toggle;
use Filament\Support\Icons\Heroicon;

class ToggleActiveInput
{
    public static function make($name): Toggle
    {
        return Toggle::make($name)
            ->inline(false)
            ->default(true)
            ->required()
            ->onIcon(Heroicon::CheckCircle)
            ->offIcon(Heroicon::XCircle)
            ->onColor('success')
            ->columnSpanFull();
    }
}

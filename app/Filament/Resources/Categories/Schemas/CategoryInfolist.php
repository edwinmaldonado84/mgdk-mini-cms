<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Filament\Components\Layouts\SchemaLayout;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SchemaLayout::make()
                    ->schema([
                        TextEntry::make('name'),
                    ])
                    ->details([
                        //
                    ])
                    ->renderComponent(),
            ]);

    }
}

<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Filament\Components\Layouts\SchemaLayout;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SchemaLayout::make()
                    ->schema([
                        TextInput::make('name')
                            ->unique(ignoreRecord: true)
                            ->columnSpanFull()
                            ->required(),
                    ])
                    ->details([
                        //
                    ])
                    ->renderComponent(),
            ]);
    }
}

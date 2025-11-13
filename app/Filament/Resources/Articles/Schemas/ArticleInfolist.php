<?php

namespace App\Filament\Resources\Articles\Schemas;

use App\Filament\Components\Infolists\TableListActiveEntry;
use App\Filament\Components\Infolists\TableListTextEntry;
use App\Filament\Components\Layouts\SchemaLayout;
use Filament\Schemas\Schema;

class ArticleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SchemaLayout::make()
                    ->schema([
                        TableListTextEntry::make('category.name')
                            ->label('Category'),

                        TableListTextEntry::make('title'),

                        TableListTextEntry::make('content'),

                        TableListActiveEntry::make('published'),
                    ])
                    ->details([
                        //
                    ])
                    ->renderComponent(),
            ]);

    }
}

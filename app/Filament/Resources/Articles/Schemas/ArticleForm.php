<?php

namespace App\Filament\Resources\Articles\Schemas;

use App\Filament\Components\Inputs\ToggleActiveInput;
use App\Filament\Components\Layouts\SchemaLayout;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SchemaLayout::make()
                    ->schema([
                        TextInput::make('title')
                            ->columnSpanFull()
                            ->required(),
                        Textarea::make('content')
                            ->required()
                            ->columnSpanFull(),
                        Select::make('category_id')
                            ->searchable()
                            ->relationship(
                                name: 'category',
                                titleAttribute: 'name',
                            )
                            ->preload()
                            ->columnSpanFull()
                            ->required(),
                        ToggleActiveInput::make('published')
                            ->columnSpanFull()
                            ->inline()
                            ->required(),
                    ])
                    ->details([
                        //
                    ])
                    ->renderComponent(),
            ]);
    }
}

<?php

namespace App\Filament\Components\Layouts;

use Closure;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Concerns\HasChildComponents;
use Filament\Schemas\Components\Concerns\HasName;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Section;
use Illuminate\Database\Eloquent\Model;

class SchemaLayout extends Component
{
    use HasChildComponents;
    use HasName;

    protected string $view = 'components.schema-layout-wrapper';

    protected $showDetails = false;

    protected array $main = [];

    protected array $mainColumns = [
        'lg' => 2,
        '2xl' => 3,
    ];

    protected array $details = [];

    public static function make(?string $name = null): static
    {
        return app(static::class);
    }

    public function schema(array|Closure $components): static
    {
        $this->main = is_callable($components) ? $components() : $components;

        return $this;
    }

    public function details(array|Closure $components): static
    {
        $this->showDetails = true;
        $this->details = is_callable($components) ? $components() : $components;

        return $this;
    }

    public function getLayout(): array
    {
        return [
            Flex::make([
                ...$this->getSchemaChilds(),
                ...($this->showDetails ? $this->getDetailsChilds() : []),
            ])
                ->from('md')
                ->columnSpanFull(),
        ];
    }

    public function getSchemaChilds(): array
    {
        return [
            Section::make()
                ->schema($this->main)
                ->columns($this->mainColumns),
        ];
    }

    public function getDetailsChilds(): array
    {
        return [
            Section::make()
                ->schema([
                    TextEntry::make('created_at')
                        ->dateTime(),
                    TextEntry::make('updated_at')
                        ->dateTime(),
                    ...$this->details,
                ])
                ->grow(false)
                ->hidden(fn (?Model $record) => $record === null),
        ];
    }

    public function renderComponent(array $columns = []): static
    {
        $this->columnSpanFull();
        if ($columns) {
            $this->mainColumns = $columns;
        }
        $this->childComponents($this->getLayout());

        return $this;
    }
}

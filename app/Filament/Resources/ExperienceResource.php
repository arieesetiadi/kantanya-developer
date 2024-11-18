<?php

namespace App\Filament\Resources;

use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Table;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms;
use App\Models\Experience;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Filament\Resources\ExperienceResource\Pages;
use App\Enums\ExperienceType;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')
                    ->markAsRequired()
                    ->options([
                        ExperienceType::Work->value => ExperienceType::Work->name,
                        ExperienceType::Education->value => ExperienceType::Education->name,
                    ])
                    ->rules(['required', Rule::in([
                        ExperienceType::Work->value,
                        ExperienceType::Education->value
                    ])]),

                TextInput::make('title')
                    ->markAsRequired()
                    ->rules(['required', 'string', 'max:255']),

                TextInput::make('place')
                    ->markAsRequired()
                    ->rules(['required', 'string', 'max:255']),

                TextInput::make('role')
                    ->markAsRequired()
                    ->rules(['required', 'string', 'max:255']),

                DatePicker::make('start_date')
                    ->markAsRequired()
                    ->rules(['required']),

                DatePicker::make('end_date')
                    ->helperText('Leave it empty if still working here!'),

                Toggle::make('is_published')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->icon(fn(Experience $model) => $model->type == ExperienceType::Work->value ? 'heroicon-o-briefcase' : 'heroicon-o-academic-cap')
                    ->searchable(),

                TextColumn::make('place')->searchable(),

                TextColumn::make('role')->searchable(),

                TextColumn::make('start_date')
                    ->date(format: 'M Y')
                    ->sortable(),

                TextColumn::make('end_date')
                    ->date(format: 'M Y')
                    ->visible(fn(Experience $model) => !!$model->end_date),

                TextColumn::make('end_date')
                    ->default('Present')
                    ->visible(fn(Experience $model) => !$model->end_date),

                ToggleColumn::make('is_published')->label('Published'),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ], position: ActionsPosition::BeforeCells)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}

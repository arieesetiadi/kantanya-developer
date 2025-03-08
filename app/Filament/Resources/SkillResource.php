<?php

namespace App\Filament\Resources;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Builder;
use IbrahimBougaoua\FilamentSortOrder\Actions\UpStepAction;
use IbrahimBougaoua\FilamentSortOrder\Actions\DownStepAction;
use Filament\Tables\Table;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms;
use App\Models\Skill;
use App\Filament\Resources\SkillResource\RelationManagers;
use App\Filament\Resources\SkillResource\Pages;
use App\Enums\UploadPath;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->markAsRequired()
                    ->columnSpanFull()
                    ->rules(['required', 'string', 'max:255']),

                TextInput::make('description')
                    ->markAsRequired()
                    ->columnSpanFull()
                    ->rules(['required', 'string', 'max:255']),

                FileUpload::make('icon_path')
                    ->label('Icon')
                    ->directory(fn() => UploadPath::SkillImages->value)
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/webp'])  // Add this line
                    ->markAsRequired()
                    ->columnSpanFull()
                    ->image()
                    ->optimize('webp')
                    ->rules(['required', 'file', 'max:2048', 'mimes:png,jpg,jpeg,webp'])  // Modify this line
                    ->imageEditor(),

                Toggle::make('is_published')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),

                ImageColumn::make('icon_path')->label('Icon'),

                TextColumn::make('description')->searchable(),

                ToggleColumn::make('is_published')->label('Published'),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    UpStepAction::make(),
                    DownStepAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ], position: ActionsPosition::BeforeCells)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSkills::route('/'),
        ];
    }
}

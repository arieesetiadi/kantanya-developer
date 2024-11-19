<?php

namespace App\Filament\Resources;

use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Builder;
use IbrahimBougaoua\FilamentSortOrder\Actions\UpStepAction;
use IbrahimBougaoua\FilamentSortOrder\Actions\DownStepAction;
use Filament\Tables\Table;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\FileUpload;
use Filament\Forms;
use App\Models\Project;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Filament\Resources\ProjectResource\Pages;
use App\Enums\UploadPath;
use App\Enums\ProjectType;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')
                    ->markAsRequired()
                    ->options([
                        ProjectType::WebSite->value => ProjectType::WebSite->label(),
                        ProjectType::WebApp->value => ProjectType::WebApp->label(),
                    ])
                    ->rules(['required', Rule::in([
                        ProjectType::WebSite->value,
                        ProjectType::WebApp->value
                    ])]),

                TextInput::make('title')
                    ->markAsRequired()
                    ->rules(['required', 'string', 'max:255']),

                TextInput::make('headline')
                    ->markAsRequired()
                    ->rules(['required', 'string', 'max:255'])
                    ->columnSpanFull(),

                RichEditor::make('description')
                    ->markAsRequired()
                    ->rules(['required', 'string'])
                    ->disableToolbarButtons([
                        'attachFiles',
                    ])
                    ->columnSpanFull(),

                FileUpload::make('images')
                    ->directory(fn() => UploadPath::ProjectImages->value)
                    ->markAsRequired()
                    ->image()
                    ->multiple()
                    ->required()
                    ->visibility('public')
                    ->imageEditor()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->columnSpanFull()
                    ->optimize('webp'),

                Toggle::make('is_published')->default(true),

                Hidden::make('sort_order')
                    ->default(function () {
                        return Project::max('sort_order') + 1;
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->icon(fn(Project $model) => $model->type == ProjectType::WebSite->value ? 'heroicon-o-briefcase' : 'heroicon-o-academic-cap')
                    ->searchable(),

                TextColumn::make('headline')
                    ->wrap()
                    ->lineClamp(3)
                    ->searchable(),

                TextColumn::make('sort_order')
                    ->label('Sort')
                    ->numeric()
                    ->sortable(),

                ImageColumn::make('images')
                    ->limit(2)
                    ->limitedRemainingText(),

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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}

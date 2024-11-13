<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Notifications\Notification;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Actions\Action;
use App\Models\Personal as PersonalModel;
use App\Enums\UploadPath;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

class Personal extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static string $view = 'filament.pages.personal';

    public PersonalModel $personal;

    public ?array $data = [];

    public function mount(): void
    {
        $this->personal = PersonalModel::first();
        $this->form->fill($this->personal->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Grid::make([
                        'default' => 1,
                        'md' => 2,
                    ])->schema([
                        TextInput::make('name')
                            ->markAsRequired()
                            ->rules(['required', 'string', 'max:255']),

                        TextInput::make('headline')
                            ->markAsRequired()
                            ->rules(['required', 'string', 'max:255']),

                        Textarea::make('about')
                            ->markAsRequired()
                            ->rules(['required', 'string'])
                            ->columnSpanFull()
                            ->rows(5),

                        TextInput::make('email')
                            ->markAsRequired()
                            ->rules(['required', 'email', 'max:255']),

                        TextInput::make('phone')
                            ->markAsRequired()
                            ->rules(['required', 'string', 'max:255']),

                        TextInput::make('instagram_url')
                            ->markAsRequired()
                            ->rules(['required', 'string', 'max:255']),

                        TextInput::make('github_url')
                            ->markAsRequired()
                            ->rules(['required', 'string', 'max:255']),

                        TextInput::make('linkedin_url')
                            ->markAsRequired()
                            ->rules(['required', 'string', 'max:255']),

                        TextInput::make('codewars_url')
                            ->markAsRequired()
                            ->rules(['required', 'string', 'max:255']),

                        FileUpload::make('resume_path')
                            ->label('Resume')
                            ->directory(fn() => UploadPath::ResumeFiles->value)
                            ->markAsRequired()
                            ->rules(['required', 'file', 'max:2048'])
                            ->columnSpanFull(),
                    ]),
                ])
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $this->personal->update($this->form->getState());

        Notification::make()
            ->success()
            ->title('Saved')
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')->submit('save'),
        ];
    }
}

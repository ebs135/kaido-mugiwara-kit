<?php

namespace App\Filament\Pages;

use App\Settings\KaidoSetting;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageSetting extends SettingsPage
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = KaidoSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Site Information')->columns(1)->schema([
                    TextInput::make('site_name')
                        ->label('Site Name')
                        ->required(),
                    Toggle::make('site_active')
                        ->label('Site Active')
                        ->inline(false),
                ]),
            ]);
    }
}

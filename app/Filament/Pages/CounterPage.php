<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CounterPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.counter-page';
}

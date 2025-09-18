<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Traits\HasActiveIcon;

class About extends Page
{
        use HasActiveIcon;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-information-circle';
    }

    protected static ?string $navigationLabel = 'About';
    public static ?string $label = 'About';
    public static ?string $pluralLabel = 'About';
    protected static ?string $slug = 'about';
    protected static ?string $breadcrumb = 'About';
    protected static ?int $navigationSort = 5;
    protected string $view = 'filament.pages.about';


}

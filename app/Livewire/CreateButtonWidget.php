<?php
namespace App\Livewire;

use Filament\Widgets\Widget;

class CreateButtonWidget extends Widget
{
    public string $label = 'Tambah Kategori Baru...';
    public string $resource = '';
    
    protected string $view = 'livewire.create-button-widget';
    
    public function createNew()
    {
        // Get the current resource from the page
        $resourceClass = $this->resource;
        
        // Redirect to the create page of the resource
        return redirect()->to($resourceClass::getUrl('create'));
    }
}
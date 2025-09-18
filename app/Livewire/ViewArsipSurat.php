<?php

namespace App\Livewire;

use Livewire\Component;
use Filament\Schemas\Schema;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use App\Models\ArsipSurat;

class ViewArsipSurat extends Component implements HasSchemas
{
    use InteractsWithSchemas;

    public ArsipSurat $record;

    /**
     * Mount with the record id (safer than passing the whole model through Livewire).
     *
     * @param  int|string  $recordId
     * @return void
     */
    public function mount($recordId)
    {
        $this->record = ArsipSurat::findOrFail($recordId);
    }

    public function render()
    {
        return view('livewire.view-arsip-surat', [
            'record' => $this->record,
        ]);
    }
}
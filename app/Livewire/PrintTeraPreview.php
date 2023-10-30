<?php

namespace App\Livewire;

use Dompdf\Dompdf;
use Livewire\Component;

class PrintTeraPreview extends Component
{
    public $tera;
    public $id;
    public function mount()
    {
        $this->id = request()->query('id');
    }

    public function render()
    {
        return view('livewire.print-tera-preview');
    }
}

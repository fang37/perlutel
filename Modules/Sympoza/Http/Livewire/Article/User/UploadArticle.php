<?php

namespace Modules\Sympoza\Http\Livewire\Article\User;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadArticle extends Component
{
    use WithFileUploads;

    public $pdf;

    public function save()
    {
        $this->validate([
            'file' => 'pdf'
        ]);

        $this->pdf->store('pdf');
    }

    public function render()
    {
        //return view('livewire.upload-article');
    }
}

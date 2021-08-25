<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SampleData extends Component
{
    public bool $isOpen = false;
    public string $title = "";  
    public $sampleAttributes = [];

    public function render()
    {
        return view('livewire.sample-data');
    }
}

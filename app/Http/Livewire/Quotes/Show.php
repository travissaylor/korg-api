<?php

namespace App\Http\Livewire\Quotes;

use App\Models\Quote;
use Livewire\Component;

class Show extends Component
{
    public Quote $quote;

    public function mount($id)
    {
        $this->quote = Quote::with(['movie', 'character'])->find($id);
    }

    public function delete()
    {
        $this->quote->delete();

        return redirect()->route('admin.quotes.index');
    }

    public function render()
    {
        return view('livewire.quotes.show');
    }
}

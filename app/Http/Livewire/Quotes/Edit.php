<?php

namespace App\Http\Livewire\Quotes;

use App\Models\Character;
use App\Models\Movie;
use App\Models\Quote;
use Livewire\Component;

class Edit extends Component
{
    public Quote $quote;
    public $movies;
    public $characters;

    public $selectedMovieId;
    public $selectedCharacterId;

    protected $rules = [
        'quote.content' => 'required|string',
        'quote.movie_timestamp' => 'numeric',
    ];

    public function mount($id)
    {
        $this->quote = Quote::with(['movie', 'character'])->find($id);
        $this->movies = Movie::all();
        $this->characters = Character::all();

        $this->selectedMovieId = $this->quote->movie_id;
        $this->selectedCharacterId = $this->quote->character_id;
    }

    public function delete()
    {
        $this->quote->delete();

        return redirect()->route('admin.quotes.index');
    }

    public function save()
    {
        $this->validate();

        $this->quote->update(['movie_id' => $this->selectedMovieId, 'character_id' => $this->selectedCharacterId]);

        return redirect()->route('admin.quotes.show', ['id' => $this->quote->id]);
    }

    public function render()
    {
        return view('livewire.quotes.edit');
    }
}

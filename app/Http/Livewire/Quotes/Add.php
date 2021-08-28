<?php

namespace App\Http\Livewire\Quotes;

use App\Models\Character;
use App\Models\Movie;
use App\Models\Quote;
use Livewire\Component;

class Add extends Component
{
    public $movies;
    public $characters;

    public $quote = '';
    public $movieTimestamp;
    public $selectedMovieId;
    public $selectedCharacterId;

    protected $rules = [
        'quote' => 'required|string',
        'quote.movie_timestamp' => 'numeric',
    ];

    public function mount()
    {
        $this->movies = Movie::all();
        $this->characters = Character::all();

        $this->selectedMovieId = $this->movies[0]->id;
        $this->selectedCharacterId = $this->characters[0]->id;
    }

    public function save()
    {
        $this->validate();

        Quote::create([
            'content' => $this->quote,
            'movie_timestamp' => $this->movieTimestamp,
            'movie_id' => $this->selectedMovieId, 
            'character_id' => $this->selectedCharacterId
        ]);

        return redirect()->route('admin.quotes.index');
    }

    public function render()
    {
        return view('livewire.quotes.add');
    }
}

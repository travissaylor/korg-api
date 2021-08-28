<?php

namespace App\Http\Livewire\Quotes;

use App\Models\Quote;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $search = "";

    public $sortField = "content";
    public $sortDirection = "DESC";

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === "ASC" ? "DESC" : "ASC";
        } else {
            $this->sortDirection = "ASC";
        }

        $this->sortField = $field;
    }

    public function render()
    {
        $quotes = Quote::select('quotes.*')
            ->join('movies', 'quotes.movie_id', '=', 'movies.ID')
            ->join('characters', 'quotes.character_id', '=', 'characters.ID')
            ->search('content', $this->search)
            ->orderBy($this->sortField, $this->sortDirection)->paginate(10);

        return view('livewire.quotes.dashboard', ['quotes' => $quotes]);
    }
}

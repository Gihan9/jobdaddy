<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\JobSeeker;

class SearchPeople extends Component
{
    public $query = '';
    public $page = 1;
    public $jobSeekers;

    public function updatedQuery()
    {
        $this->page = 1; // Reset to the first page when the query changes
        $this->search();
    }

    public function search()
    {
        $this->jobSeekers = JobSeeker::where('designation', 'like', '%' . $this->query . '%')
            ->paginate(10);
    }

    public function render()
    {
        $this->search();

        return view('livewire.search-people');
    }
}

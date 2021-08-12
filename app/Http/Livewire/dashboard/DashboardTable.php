<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class DashboardTable extends Component
{
    public $table;
    public $model;
    public $colour;

    public function mount($table,$model,$colour)
    {
        $this->model = $model;
        $this->colour = $colour;
        $this->table = $table;
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard-table');
    }
}

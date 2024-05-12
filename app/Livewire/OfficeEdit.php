<?php

namespace App\Livewire;

use App\Models\Office;
use Livewire\Component;

class OfficeEdit extends Component
{
    public $pageTitle;
    public Office $office;
    public $name;

    public function mount(Office $office)
    {
        $this->pageTitle = 'Edit Kantor';
        $this->office = $office;
        $this->name = $this->office->name;
    }

    public function edit()
    {
        $data = [
            'name' => $this->name,
        ];

        $this->office->update($data);

        session()->flash('status', 'warning');
        session()->flash('message', 'Berhasil update data');

        redirect()->route('office.list');

    }

    public function render()
    {
        return view('livewire.office-edit');
    }
}

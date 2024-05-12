<?php

namespace App\Livewire;

use App\Models\Office;
use App\Models\Position;
use Livewire\Component;

class PositionEdit extends Component
{
    public $pageTitle;
    public $name;
    public $officeId;
    public $offices;
    public Position $position;


    public function mount(Position $position)
    {
        $this->pageTitle = 'Tambah Jabatan';
        $this->offices = Office::all();
        $this->position = $position;

        $this->name = $this->position->name;
        $this->officeId = $this->position->id_office;
    }

    public function edit()
    {
        $data = [
            'name' => $this->name,
            'id_office' => $this->officeId
        ];;

        $this->position->update($data);

        session()->flash('status', 'warning');
        session()->flash('message', 'berhasil edit data jabatan');

        redirect()->route('position.list');
    }

    public function render()
    {
        return view('livewire.position-edit')->title($this->pageTitle);
    }
}

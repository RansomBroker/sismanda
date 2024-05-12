<?php

namespace App\Livewire;

use App\Models\Office;
use App\Models\Position;
use Livewire\Component;

class PositionAdd extends Component
{
    public $pageTitle;
    public $name;
    public $officeId;
    public $offices;

    public function mount()
    {
        $this->pageTitle = 'Tambah Jabatan';
        $this->offices = Office::all();
    }

    public function add()
    {
        $data = [
            'name' => $this->name,
            'id_office' => $this->officeId
        ];

        Position::create($data);

        session()->flash('status', 'success');
        session()->flash('message', 'berhasil tambah data jabatan baru');

        redirect()->route('position.list');
    }

    public function render()
    {
        return view('livewire.position-add')->title($this->pageTitle);
    }
}

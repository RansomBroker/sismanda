<?php

namespace App\Livewire;

use App\Models\Office;
use Livewire\Component;

class OfficeAdd extends Component
{
    public $pageTitle;
    public $name;

    public function mount()
    {
        $this->pageTitle = 'Tambah Kantor Baru';
    }

    public function add()
    {
        $data = [
            'name' => $this->name,
        ];

        Office::create($data);

        session()->flash('status', 'success');
        session()->flash('message', 'berhasil tambah data kantor baru');

        redirect()->route('office.list');
    }

    public function render()
    {
        return view('livewire.office-add')->title($this->pageTitle);
    }
}

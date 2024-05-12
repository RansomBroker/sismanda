<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class ItemAdd extends Component
{
    public $pageTitle;
    public $name;
    public $unit;

    public function mount()
    {
        $this->pageTitle = 'Tambah Barang Baru';
    }

    public function add()
    {
        $data = [
            'name' => $this->name,
            'unit' => $this->unit
        ];

        Item::create($data);

        session()->flash('status', 'success');
        session()->flash('message', 'berhasil tambah data barang baru');

        redirect()->route('inventory.item.list');
    }

    public function render()
    {
        return view('livewire.item-add')->title($this->pageTitle);
    }
}

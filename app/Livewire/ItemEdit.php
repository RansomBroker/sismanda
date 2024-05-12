<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class ItemEdit extends Component
{
    public $pageTitle;
    public Item $item;
    public $name;
    public $unit;

    public function mount(Item $item)
    {
        $this->pageTitle = 'Edit Barang';
        $this->item = $item;
        $this->name = $this->item->name;
        $this->unit = $this->item->unit;
    }

    public function edit()
    {
        $data = [
            'name' => $this->name,
            'unit' => $this->unit
        ];

        $this->item->update($data);

        session()->flash('status', 'warning');
        session()->flash('message', 'Berhasil update data');

        redirect()->route('inventory.item.list');

    }

    public function render()
    {
        return view('livewire.item-edit')->title($this->pageTitle);
    }
}

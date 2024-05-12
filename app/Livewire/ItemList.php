<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class ItemList extends Component
{
    public $pageTitle;
    public $items;

    public function mount()
    {
        $this->pageTitle = 'List Barang';
        $this->items = Item::all();
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item->delete();

        session()->flash('status', 'danger');
        session()->flash('message', 'Berhasil hapus barang');

        redirect()->route('inventory.item.list');
    }

    public function render()
    {
        return view('livewire.item-list')->title($this->pageTitle);
    }
}

<?php

namespace App\Livewire;

use App\Models\IncomingGood;
use Livewire\Component;

class IncomingGoodList extends Component
{
    public $pageTitle;
    public $incomingGoods;

    public function mount()
    {
        $this->pageTitle = 'Barang Masuk';
        $this->incomingGoods = IncomingGood::with(['supplier', 'item'])->get();
    }

    public function delete($id)
    {
        $incomingGood = IncomingGood::find($id);
        $incomingGood->delete();

        session()->flash('status', 'danger');
        session()->flash('message', 'Berhasil hapus barang masuk');

        redirect()->route('inventory.incoming.good.list');
    }

    public function render()
    {
        return view('livewire.incoming-good-list')->title($this->pageTitle);
    }
}

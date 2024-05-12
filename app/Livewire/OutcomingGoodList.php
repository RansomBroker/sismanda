<?php

namespace App\Livewire;

use App\Models\OutcomingGood;
use Livewire\Component;

class OutcomingGoodList extends Component
{
    public $pageTitle;
    public $outcomingGoods;

    public function mount()
    {
        $this->pageTitle = 'Barang Keluar';
        $this->outcomingGoods = OutcomingGood::with(['item', 'office'])->get();
    }

    public function delete($id)
    {
        $outcomingGood = OutcomingGood::find($id);
        $outcomingGood->delete();

        session()->flash('status', 'danger');
        session()->flash('message', 'Berhasil hapus barang keluar');

        redirect()->route('inventory.outcoming.good.list');
    }

    public function render()
    {
        return view('livewire.outcoming-good-list')->title($this->pageTitle);
    }
}

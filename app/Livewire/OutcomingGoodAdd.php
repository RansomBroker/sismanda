<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Office;
use App\Models\OutcomingGood;
use Livewire\Component;

class OutcomingGoodAdd extends Component
{
    public $pageTitle;

    public $items;
    public $offices;

    public $itemId;
    public $officeId;
    public $outcomingGoodDate;
    public $qty;
    public $note;

    public function mount()
    {
        $this->pageTitle = 'Tambah Barang Keluar';
        $this->items = Item::all();
        $this->offices = Office::all();
    }

    public function add()
    {
        $data = [
            'item_id' => $this->itemId,
            'office_id' => $this->officeId,
            'outcoming_date' => $this->outcomingGoodDate,
            'qty' => $this->qty,
            'note' => $this->note
        ];


        OutcomingGood::create($data);

        session()->flash('status', 'success');
        session()->flash('message', 'berhasil tambah data barang masuk');

        redirect()->route('inventory.outcoming.good.list');
    }

    public function render()
    {
        return view('livewire.outcoming-good-add')->title($this->pageTitle);
    }
}

<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Office;
use App\Models\OutcomingGood;
use Livewire\Component;

class OutcomingGoodEdit extends Component
{
    public $pageTitle;

    public $items;
    public $offices;

    public OutcomingGood $outcomingGood;

    public $itemId;
    public $officeId;
    public $outcomingGoodDate;
    public $qty;
    public $note;

    public function mount(OutcomingGood $outcomingGood)
    {
        $this->pageTitle = 'Edit Barang Keluar';
        $this->outcomingGood = $outcomingGood;
        $this->items = Item::all();
        $this->offices = Office::all();

        $this->itemId = $this->outcomingGood->item_id;
        $this->officeId = $this->outcomingGood->office_id;
        $this->outcomingGoodDate = $this->outcomingGood->outcoming_date;
        $this->qty = $this->outcomingGood->qty;
        $this->note = $this->outcomingGood->note;
    }

    public function edit()
    {
        $data = [
            'item_id' => $this->itemId,
            'office_id' => $this->officeId,
            'outcoming_date' => $this->outcomingGoodDate,
            'qty' => $this->qty,
            'note' => $this->note
        ];

        $this->outcomingGood->update($data);

        session()->flash('status', 'warning');
        session()->flash('message', 'Berhasil update data');

        redirect()->route('inventory.outcoming.good.list');
    }

    public function render()
    {
        return view('livewire.outcoming-good-edit')->title($this->pageTitle);
    }
}

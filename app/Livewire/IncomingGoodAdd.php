<?php

namespace App\Livewire;

use App\Models\IncomingGood;
use App\Models\Item;
use App\Models\Supplier;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncomingGoodAdd extends Component
{
    use WithFileUploads;

    public $pageTitle;
    public $supplierId;
    public $itemId;
    public $incomingDate;
    public $image;
    public $qty;

    // get supplier and item model
    public $suppliers;
    public $items;

    public function mount()
    {
        $this->pageTitle = 'Tambah Barang Masuk';
        $this->suppliers = Supplier::all();
        $this->items = Item::all();
    }

    public function add()
    {
        $imageName = md5($this->image . microtime()).'.'.$this->image->extension();

        $data = [
            'supplier_id' => $this->supplierId,
            'item_id' => $this->itemId,
            'incoming_date' => $this->incomingDate,
            'img' => $imageName,
            'qty' => $this->qty
        ];

        $this->image->storeAs('public/img', $imageName);

        IncomingGood::create($data);

        session()->flash('status', 'success');
        session()->flash('message', 'berhasil tambah data barang masuk');

        redirect()->route('inventory.incoming.good.list');
    }

    public function render()
    {
        return view('livewire.incoming-good-add')->title($this->pageTitle);
    }
}

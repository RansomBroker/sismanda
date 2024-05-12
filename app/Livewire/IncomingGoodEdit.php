<?php

namespace App\Livewire;

use App\Models\IncomingGood;
use App\Models\Item;
use App\Models\Supplier;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncomingGoodEdit extends Component
{
    use WithFileUploads;

    public $pageTitle;
    public $supplierId;
    public $itemId;
    public $incomingDate;
    public $image;
    public $qty;
    public IncomingGood $incomingGood;
    // get supplier and item model
    public $suppliers;
    public $items;

    public function mount(IncomingGood $incomingGood)
    {
        $this->pageTitle = 'Tambah Barang Masuk';
        $this->suppliers = Supplier::all();
        $this->items = Item::all();

        $this->incomingGood = $incomingGood;
        $this->supplierId = $this->incomingGood->supplier_id;
        $this->itemId = $this->incomingGood->item_id;
        $this->incomingDate = $this->incomingGood->incoming_date;
        $this->qty = $this->incomingGood->qty;
    }

    public function edit()
    {
        $data = [
            'supplier_id' => $this->supplierId,
            'item_id' => $this->itemId,
            'incoming_date' => $this->incomingDate,
            'img' => $this->incomingGood->img,
            'qty' => $this->qty
        ];

        if ($this->image != null) {
            $imageName = md5($this->image . microtime()).'.'.$this->image->extension();
            $this->image->storeAs('public/img', $imageName);
            $data['img'] = $imageName;
        }

        $this->incomingGood->update($data);

        session()->flash('status', 'warning');
        session()->flash('message', 'Berhasil update data');

        redirect()->route('inventory.incoming.good.list');
    }

    public function render()
    {
        return view('livewire.incoming-good-edit')->title($this->pageTitle);
    }
}

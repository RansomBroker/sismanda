<?php

namespace App\Livewire;

use App\Models\IncomingGood;
use App\Models\Item;
use App\Models\OutcomingGood;
use Livewire\Component;

class Index extends Component
{
    public $pageTitle;
    public $stocks;

    public function mountt()
    {
        $this->pageTitle = 'Dashboard';
    }

    public function render()
    {
        $totalStock = 0;
        $stockLeft = 0;
        $items = Item::all();
        // ambil semua barang
        foreach ($items as $key => $item) {
            $totalStock = IncomingGood::where('item_id', $item->id)->sum('qty');
            $stockLeft = OutcomingGood::where('item_id', $item->id)->sum('qty');

            $this->stocks[$key] = [
                'id' => $key,
                'item_name' => $item->name,
                'total_stock' => $totalStock,
                'stock_left' => $totalStock - $stockLeft
            ];
        }

        return view('livewire.index')->title($this->pageTitle);
    }
}

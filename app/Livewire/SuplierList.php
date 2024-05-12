<?php

namespace App\Livewire;

use App\Models\Supplier;
use Livewire\Component;

class SuplierList extends Component
{
    public $pageTitle;
    public $suppliers;

    public function mount()
    {
        $this->pageTitle = 'List Supplier';
        $this->suppliers = Supplier::all();
    }

    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        session()->flash('status', 'danger');
        session()->flash('message', 'Berhasil hapus suplier');

        redirect()->route('inventory.supplier.list');

    }

    public function render()
    {
        return view('livewire.suplier-list')->title($this->pageTitle);
    }
}

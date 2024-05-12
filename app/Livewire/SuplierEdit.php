<?php

namespace App\Livewire;

use App\Models\Supplier;
use Livewire\Component;

class SuplierEdit extends Component
{
    public $pageTitle;
    public Supplier $supplier;
    public $name;
    public $phone;
    public $email;
    public $address;

    public function mount(Supplier $supplier)
    {
        $this->pageTitle = 'Edit Supplier';
        $this->supplier = $supplier;

        $this->name = $this->supplier->name;
        $this->phone = $this->supplier->phone;
        $this->email = $this->supplier->email;
        $this->address = $this->supplier->address;
    }

    public function edit()
    {
        $data = [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address
        ];

        $this->supplier->update($data);

        session()->flash('status', 'warning');
        session()->flash('message', 'Berhasil update data');

        redirect()->route('inventory.supplier.list');
    }

    public function render()
    {
        return view('livewire.suplier-edit')->title($this->pageTitle);
    }
}

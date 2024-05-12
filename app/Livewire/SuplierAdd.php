<?php

namespace App\Livewire;

use App\Models\Supplier;
use Livewire\Component;

class SuplierAdd extends Component
{
    public $pageTitle;
    public $name;
    public $phone;
    public $email;
    public $address;

    public function mount()
    {
        $this->pageTitle = 'Tambah Supplier Baru';
    }

    public function add()
    {
        $data = [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address
        ];

        Supplier::create($data);

        session()->flash('status', 'success');
        session()->flash('message', 'berhasil tambah data supplier baru');

        redirect()->route('inventory.supplier.list');

    }

    public function render()
    {
        return view('livewire.suplier-add')->title($this->pageTitle);
    }
}

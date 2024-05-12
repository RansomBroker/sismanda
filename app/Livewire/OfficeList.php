<?php

namespace App\Livewire;

use App\Models\Office;
use Livewire\Component;

class OfficeList extends Component
{
    public $pageTitle;
    public $offices;

    public function mount()
    {
        $this->pageTitle = "Kantor";
        $this->offices = Office::all();
    }

    public function delete($id)
    {
        $office = Office::find($id);
        $office->delete();

        session()->flash('status', 'danger');
        session()->flash('message', 'Berhasil hapus kantor');

        redirect()->route('office.list');
    }

    public function render()
    {
        return view('livewire.office-list')->title($this->pageTitle);
    }
}

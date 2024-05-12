<?php

namespace App\Livewire;

use App\Models\Position;
use Livewire\Component;

class PositionList extends Component
{
    public $pageTitle;
    public $positions;

    public function mount()
    {
        $this->pageTitle = 'Jabatan / posisi';
        $this->positions = Position::with(['office'])->get();
    }

    public function delete($id)
    {
        $position = Position::find($id);
        $position->delete();

        session()->flash('status', 'danger');
        session()->flash('message', 'Berhasil hapus Jabatan');

        redirect()->route('position.list');
    }

    public function render()
    {
        return view('livewire.position-list')->title($this->pageTitle);
    }
}

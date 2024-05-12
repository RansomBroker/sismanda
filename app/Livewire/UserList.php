<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $pageTitle;
    public $users;

    public function mount()
    {
        $this->pageTitle = 'List Karyawan';
        $this->users = User::with('position')->get();
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        session()->flash('status', 'danger');
        session()->flash('message', 'Berhasil hapus Karyawan');

        redirect()->route('user.list');
    }

    public function render()
    {
        return view('livewire.user-list')->title($this->pageTitle);
    }
}

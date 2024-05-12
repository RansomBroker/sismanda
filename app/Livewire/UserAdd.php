<?php

namespace App\Livewire;

use App\Models\Position;
use App\Models\User;
use Livewire\Component;

class UserAdd extends Component
{
    public $pageTitle;
    public $positions;

    public $name;
    public $positionId;
    public $role;
    public $hireDate;
    public $baseSalary;

    public function mount()
    {
        $this->pageTitle = 'Tambah Karyawan';
        $this->positions = Position::all();
    }

    public function add()
    {
        $data = [
            'name' => $this->name,
            'email' => $this->name.'@mail.com',
            'password' => bcrypt('123'),
            'position_id' => $this->positionId,
            'role' => 1,
            'hire_date' => $this->hireDate,
            'base_salary' => $this->baseSalary
        ];

        User::create($data);

        session()->flash('status', 'success');
        session()->flash('message', 'berhasil tambah data karyawan baru');

        redirect()->route('user.list');
    }

    public function render()
    {
        return view('livewire.user-add')->title($this->pageTitle);
    }
}

<?php

namespace App\Livewire;

use App\Models\Position;
use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $pageTitle;
    public $positions;
    public User $user;

    public $name;
    public $positionId;
    public $hireDate;
    public $baseSalary;

    public function mount(User $user)
    {
        $this->pageTitle = 'Tambah Karyawan';
        $this->positions = Position::all();
        $this->user = $user;

        $this->name = $this->user->name;
        $this->positionId = $this->user->position_id;
        $this->hireDate = $this->user->hire_date;
        $this->baseSalary = number_format($this->user->base_salary ,0,'','');
    }

    public function edit()
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

        $this->user->update($data);

        session()->flash('status', 'warning');
        session()->flash('message', 'Berhasil update data');

        redirect()->route('user.list');
    }

    public function render()
    {
        return view('livewire.user-edit')->title($this->pageTitle);
    }
}

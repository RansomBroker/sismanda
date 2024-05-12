<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class ReservationAdd extends Component
{
    public $pageTitle;
    public $name;
    public $identity;
    public $request;
    public $paymentType;
    public $total;
    public $checkIn;
    public $phone;

    public function mount()
    {
        $this->pageTitle = 'tambah reservasi baru';
    }

    public function add()
    {
        $data = [
            'name' => $this->name,
            'identity' => $this->identity,
            'request' => $this->request,
            'payment_type' => $this->paymentType,
            'total' => $this->total,
            'check_in' => $this->checkIn,
            'phone' => $this->phone
        ];

        Reservation::create($data);

        session()->flash('status', 'success');
        session()->flash('message', 'berhasil tambah data reservasi baru');

        redirect()->route('reservation.list');
    }

    public function render()
    {
        return view('livewire.reservation-add')->title($this->pageTitle);
    }
}

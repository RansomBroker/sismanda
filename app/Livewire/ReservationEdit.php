<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class ReservationEdit extends Component
{
    public $pageTitle;
    public Reservation $reservation;

    public $name;
    public $identity;
    public $request;
    public $paymentType;
    public $total;
    public $checkIn;
    public $phone;

    public function mount(Reservation $reservation)
    {
        $this->pageTitle = 'Edit Reservasi';
        $this->reservation = $reservation;

        $this->name = $this->reservation->name;
        $this->identity = $this->reservation->identity;
        $this->request = $this->reservation->request;
        $this->paymentType = $this->reservation->payment_type;
        $this->total = number_format($this->reservation->total ,0,'','') ;
        $this->checkIn = $this->reservation->check_in;
        $this->phone = $this->reservation->phone;
    }

    public function edit()
    {
        $data = [
            'name' => $this->name,
            'identity' => $this->identity,
            'request' => $this->request,
            'payment_type' => $this->paymentType,
            'total' => $this->total,
            'check_in' => $this->checkIn,
            'phone' => $this->p
        ];

        $this->reservation->update($data);

        session()->flash('status', 'warning');
        session()->flash('message', 'Berhasil update data');

        redirect()->route('reservation.list');
    }

    public function render()
    {
        return view('livewire.reservation-edit')->title($this->pageTitle);
    }
}

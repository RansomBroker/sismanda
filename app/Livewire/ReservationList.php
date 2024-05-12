<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class ReservationList extends Component
{
    public $pageTitle;
    public $reservations;

    public function mount()
    {
        $this->pageTitle = 'Reservasi';
        $this->reservations = Reservation::all();
    }

    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        session()->flash('status', 'danger');
        session()->flash('message', 'Berhasil hapus reservasi');

        redirect()->route('reservation.list');
    }
    public function render()
    {
        return view('livewire.reservation-list')->title($this->pageTitle);
    }
}

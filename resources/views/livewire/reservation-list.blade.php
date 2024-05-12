<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hotel /</span> Reservasi</h4>

    <div class="card">
        <div class="card-body">
            @if($message = Session::get('message'))
                @if($status = Session::get('status'))
                    <div class="alert alert-{{ $status}} alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            @endif
            <div class="d-flex justify-content-lg-end mb-3">
                <a href="{{ route('reservation.add') }}" class="btn btn-primary"><i class='bx bx-plus'></i> Tambah Reservasi Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NIK</th>
                            <th>No.Hp</th>
                            <th>Request Room</th>
                            <th>Tanggal Check-in</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i =1)
                        @foreach($reservations as $reservation)
                            <tr wire:key="{{ $reservation->id }}">
                                <td>{{ $i }}</td>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->identity }}</td>
                                <td>{{ $reservation->phone }}</td>
                                <td>{{ $reservation->request }}</td>
                                <td>{{ $reservation->check_in }}</td>
                                <td>Rp.{{ number_format($reservation->total ,2,',','.') }}</td>
                                <td>
                                    <button class="btn btn-danger w-100 mb-3" wire:click="delete({{ $reservation->id }})">Cancel Reservasi</button>
                                    <a href="{{ route('reservation.edit', $reservation->id) }}" class="btn btn-warning w-100">Edit Reservasi</a>
                                </td>
                            </tr>
                            @php($i++)
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

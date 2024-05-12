<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventaris /</span> List Barang masuk</h4>

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
                <a href="{{ route('inventory.incoming.good.add') }}" class="btn btn-primary"><i class='bx bx-plus'></i> Tambah Barang Masuk Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover w-100">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Nama Suplier</th>
                        <th>Tanggal Barang Masuk</th>
                        <th>Kuantitas</th>
                        <th>Gambar Barang Masuk</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i =1)
                    @foreach($incomingGoods as $incomingGood)
                        <tr wire:key="{{ $incomingGood->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $incomingGood->item->name }}</td>
                            <td>{{ $incomingGood->supplier->name }}</td>
                            <td>{{ $incomingGood->incoming_date }}</td>
                            <td>{{ $incomingGood->qty }}</td>
                            <td><img src="{{ url('storage/img/'. $incomingGood->img) }}" alt="" width="128"></td>
                            <td>
                                <button class="btn btn-danger w-100 mb-3" wire:click="delete({{ $incomingGood->id }})">Hapus barang</button>
                                <a href="{{ route('inventory.incoming.good.edit', $incomingGood->id) }}" class="btn btn-warning w-100">Edit barang</a>
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

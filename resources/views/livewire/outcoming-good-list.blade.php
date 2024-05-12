<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventaris /</span> List Barang Keluar</h4>

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
                <a href="{{ route('inventory.outcoming.good.add') }}" class="btn btn-primary"><i class='bx bx-plus'></i> Tambah Barang Keluar Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover w-100">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kantor</th>
                        <th>Qty</th>
                        <th>Tanggal Barang keluar</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i =1)
                    @foreach($outcomingGoods as $outcomingGood)
                        <tr wire:key="{{ $outcomingGood->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $outcomingGood->item->name }}</td>
                            <td>{{ $outcomingGood->office->name }}</td>
                            <td>{{ $outcomingGood->qty }}</td>
                            <td>{{ $outcomingGood->outcoming_date }}</td>
                            <td>
                                <button class="btn btn-danger w-100 mb-3" wire:click="delete({{ $outcomingGood->id }})">Hapus barang</button>
                                <a href="{{ route('inventory.outcoming.good.edit', $outcomingGood->id) }}" class="btn btn-warning w-100">Edit barang</a>
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

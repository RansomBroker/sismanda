<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventaris /</span> List Supplier</h4>

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
                <a href="{{ route('inventory.supplier.add') }}" class="btn btn-primary"><i class='bx bx-plus'></i> Tambah Supplier Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover w-100">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>No. Hp</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i =1)
                    @foreach($suppliers as $suplier)
                        <tr wire:key="{{ $suplier->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $suplier->name }}</td>
                            <td>{{ $suplier->phone }}</td>
                            <td>{{ $suplier->email }}</td>
                            <td>{{ $suplier->address }}</td>
                            <td>
                                <button class="btn btn-danger w-100 mb-3" wire:click="delete({{ $suplier->id }})">Hapus supplier</button>
                                <a href="{{ route('inventory.supplier.edit', $suplier->id) }}" class="btn btn-warning w-100">Edit Supplier</a>
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

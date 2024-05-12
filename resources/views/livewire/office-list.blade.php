<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kantor dan Pegawai /</span> List Kantor</h4>

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
                <a href="{{ route('office.add') }}" class="btn btn-primary"><i class='bx bx-plus'></i> Tambah Kantor Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover w-100">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i =1)
                    @foreach($offices as $office)
                        <tr wire:key="{{ $office->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $office->name }}</td>
                            <td>
                                <button class="btn btn-danger w-100 mb-3" wire:click="delete({{ $office->id }})">Hapus kantor</button>
                                <a href="{{ route('office.edit', $office->id) }}" class="btn btn-warning w-100">Edit kantor</a>
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

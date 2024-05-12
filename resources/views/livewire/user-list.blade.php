<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kantor dan Pegawai /</span> List Karyawan</h4>

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
                <a href="{{ route('user.add') }}" class="btn btn-primary"><i class='bx bx-plus'></i> Tambah Karyawan Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover w-100">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Jabatan</th>
                        <th>Tanggal Bergabung</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i =1)
                    @foreach($users as $user)
                        <tr wire:key="{{ $user->id }}">
                            <td>{{ $i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->position->name }}</td>
                            <td>{{ $user->hire_date }}</td>
                            <td>
                                <button class="btn btn-danger w-100 mb-3" wire:click="delete({{ $user->id }})">Hapus Jabatan</button>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning w-100">Edit Jabatan</a>
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

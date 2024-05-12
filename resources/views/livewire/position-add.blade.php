<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kantor dan Pegawai / List Jabatan /</span>  Tambah Jabatan Baru</h4>

    <div class="card">
        <div class="card-body">
            <form wire:submit="add">
                <div class="form-group mb-3">
                    <label for="name" class="form-label" >Nama <sup class="text-danger">*</sup></label>
                    <input type="text" id="name" class="form-control" name="name" wire:model="name"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="office" class="form-label" >Kantor <sup class="text-danger">*</sup></label>
                    <select name="officeId" id="officeId" class="form-control" wire:model="officeId" required>
                        <option value="" selected>Pilih Kantor</option>
                        @foreach($offices as $office)
                            <option value="{{ $office->id }}">{{ $office->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="w-100 btn btn-primary mb-3">Tambah</button>
                <a href="{{ route('position.list') }}" class="btn btn-danger w-100">Kembali</a>
            </form>
        </div>
    </div>
</div>

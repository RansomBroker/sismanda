<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kantor dan Pegawai / List Karyawan</span>  Tambah Karyawan Baru</h4>

    <div class="card">
        <div class="card-body">
            <form wire:submit="add">
                <div class="form-group mb-3">
                    <label for="name" class="form-label" >Nama <sup class="text-danger">*</sup></label>
                    <input type="text" id="name" class="form-control" name="name" wire:model="name"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="position" class="form-label" >Jabatan <sup class="text-danger">*</sup></label>
                    <select name="positionId" id="positionId" class="form-control" wire:model="positionId" required>
                        <option value="" selected>Pilih Jabatan</option>
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="hiredate" class="form-label" >Tanggal masuk <sup class="text-danger">*</sup></label>
                    <input type="date" id="hiredate" class="form-control" name="hiredate" wire:model="hireDate"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="baseSalary" class="form-label" >Gaji Pokok <sup class="text-danger">*</sup></label>
                    <input type="number" id="baseSalary" class="form-control" name="baseSalary" wire:model="baseSalary"  required>
                </div>
                <button type="submit" class="w-100 btn btn-primary mb-3">Tambah</button>
                <a href="{{ route('user.list') }}" class="btn btn-danger w-100">Kembali</a>
            </form>
        </div>
    </div>
</div>

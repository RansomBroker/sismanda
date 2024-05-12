<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventaris / List Keluar Masuk /</span>  Edit Barang Keluar Baru</h4>

    <div class="card">
        <div class="card-body">
            <form wire:submit="edit">
                <div class="form-group mb-3">
                    <label for="officeId" class="form-label" >kantor <sup class="text-danger">*</sup></label>
                    <select id="officeId" class="form-control" name="officeId" wire:model="officeId" required>
                        <option value="" selected>--- Pilih Kantor ---</option>
                        @foreach($offices as $office)
                            <option value="{{ $office->id }}">{{ $office->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="itemId" class="form-label" >Barang <sup class="text-danger">*</sup></label>
                    <select id="itemId" class="form-control" name="itemId" wire:model="itemId" required>
                        <option value="" selected>--- Pilih Barang ---</option>
                        @foreach($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="qty" class="form-label" >Kuantitas <sup class="text-danger">*</sup></label>
                    <input type="number" id="qty" class="form-control" name="qty" wire:model="qty" required>
                </div>
                <div class="form-group mb-3">
                    <label for="note" class="form-label" >Catatan <sup class="text-danger">*</sup></label>
                    <textarea name="note" id="note" class="form-control" cols="30" rows="4" wire:model="note" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="incomingDate" class="form-label" >Tanggal keluar <sup class="text-danger">*</sup></label>
                    <input type="date" id="incomingDate" class="form-control" name="incomingDate" wire:model="outcomingGoodDate" required>
                </div>
                <button type="submit" class="w-100 btn btn-primary mb-3">Edit</button>
                <a href="{{ route('inventory.incoming.good.list') }}" class="btn btn-danger w-100">Kembali</a>
            </form>
        </div>
    </div>
</div>

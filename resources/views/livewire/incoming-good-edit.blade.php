<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventaris / List Barang Masuk /</span>  Edit Barang Masuk </h4>

    <div class="card">
        <div class="card-body">
            <form wire:submit="edit">
                <div class="form-group mb-3">
                    <label for="supplierId" class="form-label" >Supplier <sup class="text-danger">*</sup></label>
                    <select id="supplierId" class="form-control" name="supplierId" wire:model="supplierId" required>
                        <option value="" selected>--- Pilih Supplier ---</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
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
                    <label for="incomingDate" class="form-label" >Tanggal masuk <sup class="text-danger">*</sup></label>
                    <input type="date" id="incomingDate" class="form-control" name="incomingDate" wire:model="incomingDate" required>
                </div>
                <div class="form-group mb-3">
                    <label for="qty" class="form-label" >Kuantitas <sup class="text-danger">*</sup></label>
                    <input type="number" id="qty" class="form-control" name="qty" wire:model="qty" required>
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label" >Gambar Barang<sup class="text-danger">*</sup></label>
                    <input type="file" id="image" class="form-control" name="image" wire:model="image" >
                </div>
                <button type="submit" class="w-100 btn btn-primary mb-3">Edit</button>
                <a href="{{ route('inventory.incoming.good.list') }}" class="btn btn-danger w-100">Kembali</a>
            </form>
        </div>
    </div>
</div>

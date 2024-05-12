<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventaris / List Barang /</span>  Tambah Barang Baru</h4>

    <div class="card">
        <div class="card-body">
            <form wire:submit="add">
                <div class="form-group mb-3">
                    <label for="name" class="form-label" >Nama <sup class="text-danger">*</sup></label>
                    <input type="text" id="name" class="form-control" name="name" wire:model="name"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="unit" class="form-label" >Satuan <sup class="text-danger">*</sup></label>
                    <input type="text" id="unit" class="form-control" name="unit" wire:model="unit"  required>
                </div>
                <button type="submit" class="w-100 btn btn-primary mb-3">Tambah</button>
                <a href="{{ route('inventory.item.list') }}" class="btn btn-danger w-100">Kembali</a>
            </form>
        </div>
    </div>
</div>

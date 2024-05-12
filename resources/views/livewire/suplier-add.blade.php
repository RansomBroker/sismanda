<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventaris / List Supplier /</span>  Tambah Supplier Baru</h4>

    <div class="card">
        <div class="card-body">
            <form wire:submit="add">
                <div class="form-group mb-3">
                    <label for="name" class="form-label" >Nama <sup class="text-danger">*</sup></label>
                    <input type="text" id="name" class="form-control" name="name" wire:model="name"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label" >Phone <sup class="text-danger">*</sup></label>
                    <input type="text" id="phone" class="form-control" name="phone" wire:model="phone" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label" >Email <sup class="text-danger">*</sup></label>
                    <input type="email" id="email" class="form-control" name="email" wire:model="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="address" class="form-label" >Address <sup class="text-danger">*</sup></label>
                    <input type="text" id="address" class="form-control" name="address" wire:model="address" required>
                </div>
                <button type="submit" class="w-100 btn btn-primary mb-3">Tambah</button>
                <a href="{{ route('inventory.supplier.list') }}" class="btn btn-danger w-100">Kembali</a>
            </form>
        </div>
    </div>
</div>

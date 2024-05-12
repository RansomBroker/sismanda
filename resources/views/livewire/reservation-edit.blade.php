<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hotel / Reservasi /</span>  Edit Reservasi</h4>

    <div class="card">
        <div class="card-body">
            <form wire:submit="edit">
                <div class="form-group mb-3">
                    <label for="name" class="form-label" >Nama <sup class="text-danger">*</sup></label>
                    <input type="text" id="name" class="form-control" name="name" wire:model="name"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="identity" class="form-label" >NIK <sup class="text-danger">*</sup></label>
                    <input type="text" id="identity" class="form-control" name="identity"  wire:model="identity"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label" >Nomor Handphone <sup class="text-danger">*</sup></label>
                    <input type="text" id="phone" class="form-control" name="phone"  wire:model="phone"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="request" class="form-label" >Request Kamar <sup class="text-danger">*</sup></label>
                    <textarea name="request" id="request" cols="30" rows="5" class="form-control"  wire:model="request"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="request" class="form-label" >Pembayaran <sup class="text-danger">*</sup></label>
                    <select name="payment-type" id="payment-type" class="form-control"  required wire:model="paymentType">
                        <option value="">--- Pilih Tipe Pembayaran ---</option>
                        <option value="DP">DP</option>
                        <option value="Lunas">Lunas</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="checkin" class="form-label" >Tanggal checkin <sup class="text-danger">*</sup></label>
                    <input type="date" id="checkin" class="form-control" required name="checkin" wire:model="checkIn"  >
                </div>
                <div class="form-group mb-3">
                    <label for="total" class="form-label" >Total <sup class="text-danger">*</sup></label>
                    <input type="number" id="total" class="form-control" name="total" wire:model="total" required >
                </div>
                <button type="submit" class="w-100 btn btn-primary mb-3">Edit</button>
                <a href="{{ route('reservation.list') }}" class="btn btn-danger w-100">Kembali</a>
            </form>
        </div>
    </div>
</div>

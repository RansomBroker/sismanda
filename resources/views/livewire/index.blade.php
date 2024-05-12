<div>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span></h4>

    <div class="card">
        <div class="card-body">
            <h2>Stok Barang</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover w-100">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Total Stok</th>
                        <th>Sisa Stok</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i =1)
                    @foreach($stocks as $stock)
                        <tr wire:key="{{ $stock['id'] }}">
                            <td>{{ $i }}</td>
                            <td>{{ $stock['item_name'] }}</td>
                            <td>{{ $stock['total_stock'] }}</td>
                            <td>{{ $stock['stock_left'] }}</td>
                        </tr>
                        @php($i++)
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

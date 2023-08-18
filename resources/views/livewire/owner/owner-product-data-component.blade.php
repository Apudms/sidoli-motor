<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Data Produk</b>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        <table class="table-striped table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Foto</th>
                                    <th>Nama Produk</th>
                                    <th>Status</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td><img src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                            width="60" alt="{{ $product->nama_produk }}">
                                    </td>
                                    <td>{{ $product->nama_produk }}</td>
                                    @if ($product->status_stok === "Kosong") <td
                                        style="padding: 2px 4pt 0;color: #ff0000;">
                                        {{ $product->status_stok }}</td>
                                    @else
                                    <td>{{ $product->status_stok }}</td>
                                    @endif
                                    @if ($product->jumlah_stok < 1) <td style="padding: 2px 4pt 0;color: #ff0000;">
                                        {{ $product->jumlah_stok }}</td>
                                        @elseif ($product->jumlah_stok < 3) <td
                                            style="padding: 2px 4pt 0;color: #ff0000;">
                                            {{ $product->jumlah_stok }}</td>
                                            @else
                                            <td>{{ $product->jumlah_stok }}</td>
                                            @endif
                                            <td>{{ number_format($product->harga_normal, 0, '.', '.') }}</td>
                                            <td>{{ $product->category->nama_kategori }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
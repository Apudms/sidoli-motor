<div class="content">
    <style>
        .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }

        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }

        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }

        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }

        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }

        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }

        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="icon-stat">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-stat-label">Menunggu Persetujuan</span>
                            <span class="icon-stat-value">{{ $totalPurchase }}</span>
                        </div>
                        <div class="col-xs-4 text-center">
                            <i class="fa fa-hourglass-half icon-stat-visual" style="background: #ffc107;"></i>
                        </div>
                    </div>
                    <div class="icon-stat-footer">
                        <i class="fa fa-clock-o"></i> Terbaru
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="icon-stat">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-stat-label">Transaksi Berhasil</span>
                            <span class="icon-stat-value">{{ $totalTransaksiBerhasil }}</span>
                        </div>
                        <div class="col-xs-4 text-center">
                            <i class="fa fa-handshake-o icon-stat-visual" style="background: #1395ff; color: #fff"></i>
                        </div>
                    </div>
                    <div class="icon-stat-footer">
                        <i class="fa fa-clock-o"></i> Terbaru
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="icon-stat">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-stat-label">Pendapatan Hari ini</span>
                            <span class="icon-stat-value">Rp{{ number_format($incomePerDay,
                                0, ',','.') }}</span>
                        </div>
                        <div class="col-xs-4 text-center">
                            <i class="fa fa-money icon-stat-visual" style="background: #08ad7c; color: #fff"></i>
                        </div>
                    </div>
                    <div class="icon-stat-footer">
                        <i class="fa fa-clock-o"></i> Terbaru
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="icon-stat">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-stat-label">Total Pendapatan</span>
                            <span class="icon-stat-value">Rp{{ number_format($totalIncome,
                                0, ',','.') }}</span>
                        </div>
                        <div class="col-xs-4 text-center">
                            <i class="fa fa-money icon-stat-visual" style="background: green; color: #fff"></i>
                        </div>
                    </div>
                    <div class="icon-stat-footer">
                        <i class="fa fa-clock-o"></i> Terbaru
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Transaksi Terbaru
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        @if ($transaksi && count($transaksi) > 0)
                        <table class="table-striped table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pembeli</th>
                                    <th>Total Pembelian</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $tran)
                                <tr>
                                    <td>{{ $tran->transaksiId }}</td>
                                    <td>{{ $tran->nama_depan }} {{ $tran->nama_belakang }}</td>
                                    <td>Rp{{ number_format($tran->total,
                                        0, ',','.') }}</td>
                                    <td class="text-center">
                                        @if ($tran->orderStatus == 'dibatalkan')
                                        <span style="padding: 2px 4pt 0;background: #d74b4b;color: #fff;">
                                            <i class="fa fa-times"></i>
                                            Gagal
                                        </span>

                                        @elseif ($tran->orderStatus == 'memesan')
                                        <span style="padding: 2px 4pt 0;background: #ffc107;">
                                            <i class="fa fa-hourglass-half"></i>
                                            Menunggu Persetujuan
                                        </span>

                                        @else
                                        <span style="padding: 2px 4pt 0;background: #08ad7c;color: #fff;">
                                            <i class="fa fa-check"></i>
                                            Selesai
                                        </span>

                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.manajemenDetailTransaksi', ['order_id' => $tran->transaksiId]) }}"
                                            class="text-dark"><i class="fa fa-file-text"></i> Periksa
                                            Rincian
                                        </a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="text-center text-danger mt-4 mb-4">
                            <b>Tidak ada transaksi yang masuk!</b>
                        </div>
                        @endif
                        {{-- <div class="text-center text-danger mt-4 mb-4">
                            <b>Tidak ada data yang ditemukan.</b>
                        </div> --}}
                        {{-- {{ $products->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Data Produk
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table-striped table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Foto</th>
                                    <th>Nama Produk</th>
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
                                    <td>{{ $product->jumlah_stok }}</td>
                                    <td>{{ number_format($product->harga_normal, 0, '.', '.') }}</td>
                                    <td>{{ $product->category->nama_kategori }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
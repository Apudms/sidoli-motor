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
                            <span class="icon-stat-label">Sedang Dikemas</span>
                            <span class="icon-stat-value">{{ $dikemas }}</span>
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
                            <span class="icon-stat-label">Barang Dikirim</span>
                            <span class="icon-stat-value">{{ $dikirim }}</span>
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
                            <span class="icon-stat-label">Transaksi Berhasil</span>
                            <span class="icon-stat-value">{{ $diterima }}</span>
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
            <div class="col-md-3 col-sm-6">
                <div class="icon-stat">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-stat-label">Transaksi Gagal</span>
                            <span class="icon-stat-value">{{ $dibatalkan }}</span>
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
        </div>
    </div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Riwayat Transaksi
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success_message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success_message') }}
                        </div>
                        @endif
                        @if ($orders && count($orders) > 0)
                        <table class="table-striped table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Total Harga</th>
                                    <th>Ongkos Kirim</th>
                                    <th class="text-center">Status</th>
                                    <th>Tanggal</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>Rp{{ number_format($order->subtotal,
                                        0, ',','.') }}</td>
                                    <td>
                                        @if (!$order->ongkir)
                                        <span style="padding: 2px 4pt 0;background: #08ad7c;color: #fff;">
                                            Gratis Ongkir
                                        </span>
                                        @else
                                        Rp{{ number_format($order->ongkir,
                                        0, ',','.') }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($order->status == 'dibatalkan' && ($now >=
                                        $order->created_at->addDay()->toDateTimeString() &&
                                        empty($order->bukti_transfer)))

                                        <span style="padding: 2px 4pt 0;background: #973508;color: #fff;">
                                            <i class="fa fa-history"></i>
                                            Kadaluwarsa
                                        </span>

                                        @elseif ($order->status == 'dibatalkan')
                                        <span style="padding: 2px 4pt 0;background: #d74b4b;color: #fff;">
                                            <i class="fa fa-times"></i>
                                            Ditolak
                                        </span>

                                        @elseif ($order->status == 'memesan')
                                        <span style="padding: 2px 4pt 0;background: #ffc107;">
                                            <i class="fa fa-hourglass-half"></i>
                                            Menunggu Persetujuan
                                        </span>

                                        @elseif ($order->status == 'dikemas')
                                        <span style="padding: 2px 4pt 0;background: #ffc107;">
                                            <i class="fa fa-dropbox"></i>
                                            Dikemas
                                        </span>

                                        @elseif ($order->status == 'dikirim')
                                        <span style="padding: 2px 4pt 0;background: #08ad7c;color: #fff;">
                                            <i class="fa fa-truck"></i>
                                            Dikirim
                                        </span>

                                        @else
                                        <span style="padding: 2px 4pt 0;background: #08ad7c;color: #fff;">
                                            <i class="fa fa-check"></i>
                                            Selesai
                                        </span>

                                        @endif
                                    </td>
                                    <td>{{ $order->created_at }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('user.detailTransaksi', ['order_id' => $order->id]) }}"
                                            class="text-dark"><i class="fa fa-file-text"></i> Periksa
                                            Rincian
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}

                        @else
                        <div class="text-center text-danger mt-4 mb-4">
                            <b>Anda belum memiliki riwayat transaksi!</b>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
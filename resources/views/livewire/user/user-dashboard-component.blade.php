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
                                Riwayat Transaksi
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if ($orders)
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
                                        @if ($order->status == 'dibatalkan')
                                        <span style="padding: 2px 4pt 0;background: #d74b4b;color: #fff;">
                                            <i class="fa fa-times"></i>
                                            Gagal
                                        </span>

                                        @elseif ($order->status == 'memesan')
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
                                    <td>{{ $order->created_at }}</td>
                                    <td class="text-center">
                                        <a href="" class="text-dark"><i class="fa fa-file-text"></i> Periksa
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
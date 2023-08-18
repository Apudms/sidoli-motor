<main id="main" class="main-site">
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 5pt 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="main-content-area">
                    <section id="multiple-column-form">
                        <div class="row match-height">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 style="padding: 10px 0;color: rgb(0, 0, 0)"><b>Data Pemesan</b>
                                        </h4>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-2 mt-2">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xl-2">Nama</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{ $transaksi->order->nama_depan }} {{
                                                            $transaksi->order->nama_belakang }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xl-2">No Telepon</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{
                                                            $transaksi->order->no_telp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xl-2">Email</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{
                                                            $transaksi->order->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xl-2">Alamat</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{
                                                            $transaksi->order->alamat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xl-2">Kecamatan</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{
                                                            $transaksi->order->kecamatan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xl-2">Kota / Kabupaten</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{
                                                            $transaksi->order->kabupaten }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xl-2">Provinsi</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{
                                                            $transaksi->order->provinsi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xl-2">Kode Pos</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{
                                                            $transaksi->order->kode_pos }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xl-2">Metode Pembayaran</td>
                                                        <td class="px-0">:</td>
                                                        <td>{{
                                                            $transaksi->transfer }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-content">
                                            <hr>
                                            <h4 style="padding: 10px 0;color: rgb(0, 0, 0)"><b>Data Produk</b>
                                            </h4>
                                            <div class="form-body mt-4">
                                                <div class="row">
                                                    @foreach ($detail as $d)
                                                    @foreach ($detailProduk as $item)
                                                    @if ($item->id == $d->product_id)
                                                    <div class="col-md-4 form-group">
                                                        <label>{{ $item->nama_produk }}</label>
                                                    </div>
                                                    <div class="col-md-2 col-xl-2 col-4 form-group">
                                                        <label>Rp {{ number_format($item->harga_normal, 0, ',','.')
                                                            }}</label>
                                                    </div>
                                                    <div class="col-md-2 col-xl-2 col-4 form-group">
                                                        <label>x {{ $d->quantity }}</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4 col-xl-2 col-4 form-group">
                                                        <label>Rp {{ number_format($item->harga_normal * $d->quantity,
                                                            0,
                                                            ',','.') }}</label>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                    @endforeach
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="mb-3 col-md-8 col-8 form-group">
                                                        <label>Subtotal</label>
                                                    </div>
                                                    <div class="col-md-4 col-4 form-group">
                                                        <label>Rp {{ number_format($transaksi->order->subtotal, 0,
                                                            ',','.') }}</label>
                                                    </div>
                                                    <div class="col-md-8 col-8 form-group">
                                                        <label>Ongkir</label>
                                                    </div>
                                                    <div class="col-md-4 col-4 form-group">
                                                        @if (!$transaksi->order->ongkir)
                                                        <label
                                                            style="padding: 2px 4pt 0;background: #08ad7c;color: #fff;">
                                                            Gratis Ongkir
                                                        </label>
                                                        @else
                                                        <label>Rp {{ number_format($transaksi->order->ongkir, 0,
                                                            ',','.') }}</label>
                                                        @endif
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row py-2">
                                                    <div class="col-md-8 col-8 form-group">
                                                        <label class="text-danger h4"><b>Total</b></label>
                                                    </div>
                                                    <div class="col-md-4 col-4 form-group">
                                                        <label class="text-danger h4"><b>Rp {{
                                                                number_format($transaksi->order->total, 0,
                                                                ',','.') }}</b></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        @if ($transaksi->order->bukti_transfer)
                                        <div class="col-md-12 py-0" style="padding: 5pt 0;">
                                            <div style="max-width: 400px;">
                                                <img src="{{ asset('assets/images/bukti_transfer/'. $transaksi->order->bukti_transfer) }}"
                                                    alt="" class="img-fluid">
                                            </div>
                                            <hr>
                                        </div>
                                        @elseif (empty($transaksi->order->bukti_transfer))
                                        <div class="col-md-12" style="padding: 0pt 0; color: #dc3545">
                                            <h4>Pembeli belum mengirimkan bukti transfer!</h4>
                                            <hr>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="padding: 5px 0;">
                                <a href="{{ route('owner.transaksi') }}" class="btn btn-primary"><i
                                        class="fa fa-arrow-left me-2"></i>
                                    Kembali</a>
                            </div>
                        </div>
                    </section>
                    <!--end main content area-->
                </div>
            </div>
        </div>
    </div>
    <!--end container-->

</main>
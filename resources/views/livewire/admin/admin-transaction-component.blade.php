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
                                Semua Transaksi
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
                                    <th>ID Pelanggan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Total Pembelian</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($products as $product) --}}
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><span class="bg-danger"><i class="fa fa-times text-white"></i> Gagal</span></td>
                                    <td><span class="bg-success"><i class="fa fa-check text-white"></i> Selesai</span>
                                    </td>
                                    <td><span class="bg-info"><i class="fa fa-filter text-white"></i> Menunggu</span>
                                    </td>
                                    <td>
                                        <a href="" class="text-dark"><i class="fa fa-file-text"></i> Periksa
                                            Rincian
                                        </a>
                                    </td>
                                </tr>

                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                        {{-- <div class="text-center text-danger mt-4 mb-4">
                            <b>Tidak ada data yang ditemukan.</b>
                        </div> --}}
                        {{-- {{ $products->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
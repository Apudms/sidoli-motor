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
                        <div class="row d-flex">
                            <div class="col-md-6">
                                <label for="firstDate" class="mr-2 align-items-center">Laporan Penjualan</label>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group align-items-center">
                                    <label for="firstDate" class="mr-2">Tanggal Awal</label>
                                    <input type="date" name="firstDate" id="firstDate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group align-items-center">
                                    <label for="lastDate" class="mr-2">Tanggal Akhir</label>
                                    <input type="date" name="lastDate" id="lastDate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="#" onclick="printSaving()" target="_blank" class="btn btn-primary"><i
                                        class="fa fa-print"></i> Download PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        @if ($orders)
                        <table class="table-striped table">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama Barang</th>
                                    <th class="text-center">Jumlah Barang</th>
                                    <th>Harga Satuan</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $currentPage = $orders->currentPage();
                                $itemsPerPage = $orders->perPage();
                                $startNumber = ($currentPage - 1) * $itemsPerPage + 1;
                                @endphp
                                @foreach ($orders as $order)
                                <tr>
                                    <td>12 November 2023</td>
                                    <td>FDR TireBan Luar FDR Genzi Pro</td>
                                    <td class="text-center">2</td>
                                    <td>Rp235.000</td>
                                    <td>Rp470.000</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                        @else
                        <div class="text-center text-danger mt-4 mb-4">
                            <b>Belum ada riwayat transaksi!</b>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function printSaving() {
        const firstDate = document.getElementById("firstDate").value;
        const lastDate = document.getElementById("lastDate").value;

        const url = "{{ route('owner.print', [ 'firstDate' => ':firstDate', 'lastDate' => ':lastDate' ]) }}"
            .replace(':firstDate', firstDate)
            .replace(':lastDate', lastDate);

        window.open(url, '_blank');
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #FF2832;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Laporan penjualan</h1>

    <table id="customers">
        <tr>
            <th>Tanggal</th>
            <th>Nama Barang</th>
            <th class="text-center">Jumlah Barang</th>
            <th>Harga Satuan</th>
            <th>Total Harga</th>
        </tr>
        @foreach ($items as $i)
        <tr>
            <td>{{ \Carbon\Carbon::parse($i->created_at)->isoFormat("DD MMMM YYYY") }}</td>
            <td>{{ $i->product->nama_produk }}</td>
            <td>{{ $i->quantity }}</td>
            <td>Rp{{ number_format($i->product->harga_normal, 0, '.', '.') }}</td>
            <td>Rp{{ number_format($i->product->harga_normal * $i->quantity, 0, '.', '.') }}</td>
        </tr>
        @endforeach
    </table>
    <script>
        window.print();
    </script>

</body>

</html>
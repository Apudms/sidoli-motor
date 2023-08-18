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
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="icon-stat">
                    <div class="row">
                        <div class="col-xs-8 text-left">
                            <span class="icon-stat-label">Produk Habis</span>
                            <span class="icon-stat-value">{{ $products }}</span>
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
</div>
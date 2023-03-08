<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Halaman Utama</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-address-billing">
                <h3 class="box-title">Alamat Pengiriman</h3>
                <form action="#" method="get" name="frm-billing">
                    <div class="row-in-form">
                        <label for="fname">Nama Depan<span>*</span></label>
                        <input id="fname" type="text" name="fname" value="" placeholder="Nama Depan">
                    </div>
                    <div class="row-in-form">
                        <label for="lname">Nama Belakang<span>*</span></label>
                        <input id="lname" type="text" name="lname" value="" placeholder="Nama Belakang">
                    </div>
                    <div class="row-in-form">
                        <label for="email">Alamat Email:</label>
                        <input id="email" type="email" name="email" value="" placeholder="Email">
                    </div>
                    <div class="row-in-form">
                        <label for="phone">Nomor Telepon<span>*</span></label>
                        <input id="phone" type="number" name="phone" value="" placeholder="08123456789">
                    </div>
                    <div class="row-in-form">
                        <label for="add">Alamat:</label>
                        <input id="add" type="text" name="add" value="" placeholder="Jl. Nama jalan, RT/RW, Nomor rumah">
                    </div>
                    <div class="row-in-form">
                        <label for="add">Kecamatan<span>*</span></label>
                        <div class="d-flex p-0 py-0 px-0 m-0 ms-0 mt-0">
                            <div class="form-control justify-content-start" style="font-size: 13px; line-height: 19px; display: inline-block; height: 43px; padding: 12px; width: 100%; border: 1px solid #e6e6e6; border-radius: 0; outline: none; box-shadow: none;">
                                <select class="form-control align-items-center" id="add">
                                    <option value="1">Bumi Waras</option>
                                    <option value="2">Enggal</option>
                                    <option value="3">Kedamaian</option>
                                    <option value="4">Kedaton</option>
                                    <option value="5">Kemiling</option>
                                    <option value="6">Labuhan Ratu</option>
                                    <option value="7">Langkapura</option>
                                    <option value="8">Panjang</option>
                                    <option value="9">Rajabasa</option>
                                    <option value="10">Sukabumi</option>
                                    <option value="11">Sukarame</option>
                                    <option value="12">Tanjung Senang</option>
                                    <option value="13">Tanjung Karang Barat</option>
                                    <option value="14">Tanjung Karang Pusat</option>
                                    <option value="15">Tanjung Karang Timur</option>
                                    <option value="16">Teluk Betung Barat</option>
                                    <option value="17">Teluk Betung Selatan</option>
                                    <option value="18">Teluk Betung Timur</option>
                                    <option value="19">Teluk Betung Utara</option>
                                    <option value="20">Way Halim</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Metode Pembayaran</h4>
                    <p class="summary-info"><span class="title">*Nomor rekening akan muncul di menu transaksi.</span></p>
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                            <span>Transfer Bank</span>
                        </label>
                    </div>
                    <p class="summary-info grand-total"><span>Total Bayar</span> <span class="grand-total-price">Rp123</span>
                    </p>
                    <a href="thankyou.html" class="btn btn-medium">Pesan Sekarang</a>
                </div>
            </div>

        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>
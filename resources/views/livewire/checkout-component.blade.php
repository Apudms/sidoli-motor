<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Halaman Utama</a></li>
                <li class="item-link"><a href="/keranjang" class="link">Keranjang</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-address-billing">
                <h3 class="box-title">Alamat Pengiriman</h3>
                <form action="#" method="get" name="frm-billing">
                    <p class="row-in-form">
                        <label for="fname">Nama Depan<span>*</span></label>
                        <input id="fname" type="text" name="fname" value="" placeholder="Nama Depan">
                    </p>
                    <p class="row-in-form">
                        <label for="lname">Nama Belakang<span>*</span></label>
                        <input id="lname" type="text" name="lname" value="" placeholder="Nama Belakang">
                    </p>
                    <p class="row-in-form">
                        <label for="email">Alamat Email:</label>
                        <input id="email" type="email" name="email" value="" placeholder="Email">
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Nomor Telepon<span>*</span></label>
                        <input id="phone" type="number" name="phone" value="" placeholder="08123456789">
                    </p>
                    <p class="row-in-form">
                        <label for="add">Alamat:</label>
                        <input id="add" type="text" name="add" value=""
                            placeholder="Jl. Nama jalan, RT/RW, Nomor rumah">
                    </p>
                    <p class="row-in-form">
                        <label for="add">Kecamatan:</label>
                        <input id="add" type="text" name="add" value="" placeholder="Way Kandis">
                    </p>

                    {{-- <div class="row-in-form">
                        <label for="add">Kecamatan<span>*</span></label>
                        <div class="d-flex p-0 py-0 px-0 m-0 ms-0 mt-0">
                            <div class="form-control justify-content-start"
                                style="font-size: 13px; line-height: 19px; display: inline-block; height: 43px; padding: 12px; width: 100%; border: 1px solid #e6e6e6; border-radius: 0; outline: none; box-shadow: none;">
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
                    </div> --}}

                    <p class="row-in-form fill-wife">
                        <label class="checkbox-field">
                            <input name="different-add" id="different-add" value="forever" type="checkbox">
                            <span>Kirim ke alamat lain?</span>
                        </label>
                    </p>
                </form>
            </div>
            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Metode Pembayaran</h4>
                    <p class="summary-info"><span class="title">*Nomor rekening akan muncul di menu Transaksi.</span>
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                            <span>Transfer Bank</span>
                            <span class="payment-desc">Silahkan transfer ke nomor rekening berikut: 123 456 7</span>
                        </label>
                    </div>
                    <p class="summary-info grand-total"><span>Total Keseluruhan</span> <span
                            class="grand-total-price">Rp 123.000</span></p>
                    <a href="thankyou.html" class="btn btn-medium">Pesan Sekarang</a>
                </div>
            </div>

            {{-- <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                        data-loop="false" data-nav="true" data-dots="false"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_04.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_17.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">$168.00</p>
                                    </ins> <del>
                                        <p class="product-price">$250.00</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_15.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">$168.00</p>
                                    </ins> <del>
                                        <p class="product-price">$250.00</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_01.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Bestseller</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_21.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_03.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">$168.00</p>
                                    </ins> <del>
                                        <p class="product-price">$250.00</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_04.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="assets/images/products/digital_05.jpg" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Bestseller</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End wrap-products-->
            </div> --}}
        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>
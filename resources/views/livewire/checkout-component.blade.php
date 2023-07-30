<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Halaman Utama</a></li>
                <li class="item-link"><a href="/keranjang" class="link">Keranjang</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class="main-content-area">
            <form wire:submit.prevent="placeOrder">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Alamat Pengiriman</h3>
                            <div class="billing-address">
                                <p class="row-in-form">
                                    <label for="nama_depan">Nama Depan<span>*</span></label>
                                    <input type="text" name="nama_depan" wire:model="nama_depan">
                                    @error('nama_depan') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="nama_belakang">Nama Belakang<span>*</span></label>
                                    <input type="text" name="nama_belakang" wire:model="nama_belakang">
                                    @error('nama_belakang') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="email">Alamat Email:</label>
                                    <input type="email" name="email" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="no_telp">Nomor Telepon<span>*</span></label>
                                    <input type="number" name="no_telp" wire:model="no_telp">
                                    @error('no_telp') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="alamat">Alamat:<span>*</span></label>
                                    <input type="text" name="alamat" placeholder="Jl. Nama jalan, RT/RW, Nomor rumah"
                                        wire:model="alamat">
                                    @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="kecamatan">Kecamatan:<span>*</span></label>
                                    <select name="kecamatan" wire:model="kecamatan">
                                        <option>Pilih Kecamatan</option>
                                        <option value="Bumi Waras">Bumi Waras</option>
                                        <option value="Enggal">Enggal</option>
                                        <option value="Kedamaian">Kedamaian</option>
                                        <option value="Kedaton">Kedaton</option>
                                        <option value="Kemiling">Kemiling</option>
                                        <option value="Labuhan Ratu">Labuhan Ratu</option>
                                        <option value="Langkapura">Langkapura</option>
                                        <option value="Panjang">Panjang</option>
                                        <option value="Rajabasa">Rajabasa</option>
                                        <option value="Sukabumi">Sukabumi</option>
                                        <option value="Sukarame">Sukarame</option>
                                        <option value="Tanjung Senang">Tanjung Senang</option>
                                        <option value="Tanjung Karang Barat">Tanjung Karang Barat</option>
                                        <option value="Tanjung Karang Pusat">Tanjung Karang Pusat</option>
                                        <option value="Tanjung Karang Timur">Tanjung Karang Timur</option>
                                        <option value="Teluk Betung Barat">Teluk Betung Barat</option>
                                        <option value="Teluk Betung Selatan">Teluk Betung Selatan</option>
                                        <option value="Teluk Betung Timur">Teluk Betung Timur</option>
                                        <option value="Teluk Betung Utara">Teluk Betung Utara</option>
                                        <option value="Way Halim">Way Halim</option>
                                    </select>
                                    @error('kecamatan') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="kabupaten">Kabupaten / Kota:</label>
                                    <input type="text" name="kabupaten" @if ($kecamatan) value="Kota Bandar Lampung"
                                        @endif wire:model="kabupaten">
                                    @error('kabupaten') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="provinsi">Provinsi:</label>
                                    <input type="text" name="provinsi" @if ($kecamatan) value="Lampung" @endif
                                        wire:model="provinsi">
                                    @error('provinsi') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="kode_pos">Kode Pos:<span>*</span></label>
                                    <input type="number" name="kode_pos" wire:model="kode_pos">
                                    @error('kode_pos') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Metode Pembayaran</h4>
                        <p class="summary-info"><span class="title">*Nomor rekening akan muncul di menu
                                Transaksi.</span>
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="Bank" type="radio"
                                    wire:model="transfer">
                                <span>Bank Mandiri</span>
                                <span class="payment-desc">Silahkan transfer ke nomor rekening berikut: 123 456 7
                                    <br><br></span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="Dana" type="radio"
                                    wire:model="transfer">
                                <span>Dana</span>
                                <span class="payment-desc">Silahkan transfer ke nomor rekening berikut: 123 456 7
                                    <br><br></span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="Shopeepay" type="radio"
                                    wire:model="transfer">
                                <span>Shopeepay</span>
                                <span class="payment-desc">Silahkan transfer ke nomor rekening berikut: 123 456 7
                                    <br><br></span>
                            </label>
                            @error('transfer') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        @if (Session::has('checkout'))
                        <p class="summary-info grand-total">
                            <span>Total Keseluruhan</span>
                            <span class="grand-total-price">Rp {{ Session::get('checkout')['subtotal'] }}</span>
                        </p>
                        @endif
                        <button type="submit" class="btn btn-medium">Pesan Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>
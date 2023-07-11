<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Halaman Utama</a></li>
                <li class="item-link"><span>Keranjang</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            @if (Cart::instance('cart')->count() > 0)

            <div class="wrap-iten-in-cart">
                @if (Session::has('success_message'))
                <div class="alert alert-success">
                    <strong>Success</strong> {{ Session::get('success_message') }}
                </div>
                @endif
                @if (Cart::instance('cart')->count() > 0)
                <h3 class="box-title">Nama Produk</h3>
                <ul class="products-cart">
                    @foreach (Cart::instance('cart')->content() as $item)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ asset('/assets/images/products') }}/{{ $item->model->image }}"
                                    alt="{{ $item->model->name }}">
                            </figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product"
                                href="{{ route('produk.detail',['slug'=>$item->model->slug]) }}">{{
                                $item->model->nama_produk
                                }}</a>
                        </div>
                        <div class="price-field produtc-price">
                            <p class="price">Rp{{ number_format($item->model->harga_normal, 0, '.', '.') }}</p>
                        </div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="{{ $item->qty }}" data-max="120"
                                    pattern="[0-9]*">
                                <a class="btn btn-increase" href="#"
                                    wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"></a>
                                <a class="btn btn-reduce" href="#"
                                    wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total">
                            <p class="price">Rp{{ number_format($item->subtotal, 0, '.', '.') }}
                            </p>
                        </div>
                        <div class="delete">
                            <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')" class="btn btn-delete"
                                title="">
                                <span>Hapus dari keranjang</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    @endforeach

                </ul>
                @else
                <p>Tidak ada product yang dipilih</p>
                @endif
            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Ringkasan Pesanan</h4>
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">Rp{{ Cart::subtotal()
                            }}</b></p>
                    <p class="summary-info"><span class="title">Ongkir</span><b class="index">Gratis Ongkir</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">Rp{{
                            Cart::subtotal()
                            }}</b></p>
                </div>
                <div class="checkout-info">
                    <a class="btn btn-checkout title-box" href="#" wire:click.prevent="checkout">
                        Checkout
                    </a>
                    <a class="link-to-shop" href="shop.html">Lanjutkan berbelanja<i class="fa fa-arrow-circle-right"
                            aria-hidden="true"></i></a>
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Hapus Keranjang Belanja</a>
                    <a class="btn btn-update" href="#">Perbarui Keranjang Belanja</a>
                </div>
            </div>
            @else
            <div class="text-center" style="padding: 30px 0;">
                <h3>Belum ada produk yang ditambahkan ke keranjangmu!</h3>
                <p class="fw-normal mb-0 text-secondary text-center">Tambahkan produk sekarang</p>
                <a href="/toko" class="btn btn-success">Belanja Sekarang</a>
            </div>
            @endif
        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>
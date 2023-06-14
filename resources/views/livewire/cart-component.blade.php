<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Halaman Utama</a></li>
                <li class="item-link"><span>Keranjang</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <div class="wrap-iten-in-cart">
                @if (Session::has('success_message'))
                <div class="alert alert-success">
                    <strong>Success</strong> {{ Session::get('success_message') }}
                </div>
                @endif
                @if (Cart::count() > 0)
                <h3 class="box-title">Nama Produk</h3>
                <ul class="products-cart">
                    @foreach (Cart::content() as $item)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ asset('/assets/images/products') }}/{{ $item->model->image }}"
                                    alt="{{ $item->model->name }}">
                            </figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product"
                                href="{{ route('product.details',['slug'=>$item->model->slug]) }}">{{ $item->name }}</a>
                        </div>
                        <div class="price-field produtc-price">
                            <p class="price">Rp{{ $item->model->regular_price }}</p>
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
                            <p class="price">Rp{{ $item->subtotal }}</p>
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
                    {{-- <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">Nama Produk</a>
                        </div>
                        <div class="price-field produtc-price">
                            <p class="price">Rp123</p>
                        </div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">
                                <a class="btn btn-increase" href="#"></a>
                                <a class="btn btn-reduce" href="#"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total">
                            <p class="price">Rp123</p>
                        </div>
                        <div class="delete">
                            <a href="#" class="btn btn-delete" title="">
                                <span>Hapus dari keranjang</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">Nama Produk</a>
                        </div>
                        <div class="price-field produtc-price">
                            <p class="price">Rp123</p>
                        </div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">
                                <a class="btn btn-increase" href="#"></a>
                                <a class="btn btn-reduce" href="#"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total">
                            <p class="price">Rp123</p>
                        </div>
                        <div class="delete">
                            <a href="#" class="btn btn-delete" title="">
                                <span>Hapus dari keranjang</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li> --}}
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
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">Rp{{ Cart::tax()
                            }}</b></p>
                    <p class="summary-info"><span class="title">Ongkir</span><b class="index">Gratis Ongkir</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">Rp{{
                            Cart::total()
                            }}</b></p>
                </div>
                <div class="checkout-info">
                    <a class="btn btn-checkout" href="checkout.html">Checkout</a>
                    <a class="link-to-shop" href="shop.html">Lanjutkan berbelanja<i class="fa fa-arrow-circle-right"
                            aria-hidden="true"></i></a>
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Hapus Keranjang Belanja</a>
                    <a class="btn btn-update" href="#">Perbarui Keranjang Belanja</a>
                </div>
            </div>

            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Produk lainnya</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                        data-loop="false" data-nav="true" data-dots="false"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">Baru</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">lihat detail</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nama Produk</span></a>
                                <div class="wrap-price"><span class="product-price">Rp123</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">Diskon</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">lihat detail</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nama Produk</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">Rp123</p>
                                    </ins> <del>
                                        <p class="product-price">Rp234</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">Baru</span>
                                    <span class="flash-item sale-label">Diskon</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">lihat detail</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nama Produk</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">Rp123</p>
                                    </ins> <del>
                                        <p class="product-price">Rp234</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Terlaris</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">lihat detail</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nama Produk</span></a>
                                <div class="wrap-price"><span class="product-price">Rp123</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">lihat detail</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nama Produk</span></a>
                                <div class="wrap-price"><span class="product-price">Rp123</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">Diskon</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">lihat detail</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nama Produk</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">Rp123</p>
                                    </ins> <del>
                                        <p class="product-price">Rp234</p>
                                    </del></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">Baru</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">lihat detail</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nama Produk</span></a>
                                <div class="wrap-price"><span class="product-price">Rp123</span></div>
                            </div>
                        </div>

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="214"
                                            height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item bestseller-label">Terlaris</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">lihat detail</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nama Produk</span></a>
                                <div class="wrap-price"><span class="product-price">Rp123</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End wrap-products-->
            </div>

        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>
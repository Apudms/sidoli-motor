<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                data-dots="false">
                <div class="item-slide">
                    <img src="{{ asset('/assets') }}/images/banner.jpg" alt="" class="img-slide">
                    <div class="slide-info slide-1">
                        {{-- <h2 class="f-title">Judul <b>Besar</b></h2>
                        <span class="subtitle">Keterangan singkat.</span>
                        <p class="sale-info">Harga: <span class="price">Rp123</span></p>
                        <a href="#" class="btn-link">Belanja sekarang</a> --}}
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{ asset('/assets') }}/images/banner-2.jpg" alt="" class="img-slide">
                    <div class="slide-info slide-2">
                        {{-- <h2 class="f-title">Extra 25% Off</h2>
                        <span class="f-subtitle">On online payments</span>
                        <p class="discount-code">Use Code: #FA6868</p>
                        <h4 class="s-title">Get Free</h4>
                        <p class="s-subtitle">TRansparent Bra Straps</p> --}}
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{ asset('/assets') }}/images/banner-3.jpg" alt="" class="img-slide">
                    <div class="slide-info slide-3">
                        {{-- <h2 class="f-title">Judul <b>Besar</b></h2>
                        <span class="f-subtitle">Keterangan singkat</span>
                        <p class="sale-info">Harga: <b class="price">Rp123</b></p>
                        <a href="#" class="btn-link">Belanja sekarang</a> --}}
                    </div>
                </div>
            </div>
        </div>

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Produk TerBaru</h3>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('product.details',['slug'=>$product->slug]) }}"
                                            title="{{ $product->name }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->name }}"></figure>
                                        </a>
                                        @if (isset($product->sale_price))
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">Diskon</span>
                                        </div>
                                        @elseif (empty($product->sale_price) && $product->quantity > 60)
                                        <div class="group-flash">
                                            <span class="flash-item new-label">Baru</span>
                                        </div>
                                        @elseif ($product->quantity < 3) <div class="group-flash">
                                            <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    @endif
                                    <div class="wrap-btn">
                                        <a href="{{ route('product.details',['slug'=>$product->slug]) }}"
                                            class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('product.details',['slug'=>$product->slug]) }}"
                                        class="product-name"><span>{{ $product->name }}</span></a>
                                    <div class="wrap-price">
                                        <ins>
                                            <p class="product-price">Rp{{ $product->regular_price }}</p>
                                        </ins>
                                        @if (isset($product->sale_price))
                                        <del>
                                            <p class="product-price">Rp{{ $product->sale_price }}</p>
                                        </del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Product Categories-->
    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Kategori Produk</h3>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-control">
                    <a href="#fashion_1a" class="tab-control-item active">Honda</a>
                    <a href="#fashion_1b" class="tab-control-item">Kawasaki</a>
                    <a href="#fashion_1c" class="tab-control-item">Suzuki</a>
                    <a href="#fashion_1d" class="tab-control-item">Yamaha</a>
                </div>
                <div class="tab-contents">

                    <div class="tab-content-item active" id="fashion_1a">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                            data-items="5" data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama Produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama Produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama Produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama Produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-content-item" id="fashion_1b">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container "
                            data-items="5" data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-content-item" id="fashion_1c">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                            data-items="5" data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-content-item" id="fashion_1d">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                            data-items="5" data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="product-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="product-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="product-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="product-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">Diskon</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="product-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="product-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="product-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" width="800"
                                                height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quic view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama produk</span></a>
                                    <div class="product-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp123</p>
                                        </ins> <del>
                                            <p class="product-price">Rp123</p>
                                        </del></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</main>
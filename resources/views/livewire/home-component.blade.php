<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                data-dots="false">
                @foreach ($sliders as $slider)
                <div class="item-slide">
                    <img src="{{ asset('/assets/images/sliders') }}/{{ $slider->foto }}"
                        alt="{{ $slider->nama_slider }}" class="img-slide">
                    <div class="slide-info slide-{{ $slider->id }}">
                        {{-- <h2 class="f-title">Judul <b>Besar</b></h2>
                        <span class="subtitle">Keterangan singkat.</span>
                        <p class="sale-info">Harga: <span class="price">Rp123</span></p>
                        <a href="#" class="btn-link">Belanja sekarang</a> --}}
                    </div>
                </div>
                @endforeach
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
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}"></figure>
                                        </a>
                                        @if (isset($product->harga_diskon))
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">Diskon</span>
                                        </div>
                                        @elseif (empty($product->harga_diskon) && $product->jumlah_stok > 60)
                                        <div class="group-flash">
                                            <span class="flash-item new-label">Baru</span>
                                        </div>
                                        @elseif ($product->jumlah_stok < 3) <div class="group-flash">
                                            <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    @endif
                                    <div class="wrap-btn">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="function-link">Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                        class="product-name"><span>{{ $product->nama_produk }}</span></a>
                                    @if (isset($product->harga_diskon))
                                    <div class="wrap-price">
                                        <ins>
                                            <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                        </ins>
                                        <del>
                                            <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                        </del>
                                    </div>
                                    @else
                                    <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                            }}</span></div>
                                    @endif
                                </div>
                            </div>
                            @endforeach

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

                    <div class="tab-control">
                        @foreach ($product_cat as $category)
                        <a href="#category_{{ $category->id }}" class="tab-control-item">{{
                            $category->name
                            }}</a>
                        @endforeach
                    </div>
                    <div class="tab-contents">

                        <div class="tab-content-item active" id="category_1">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 1)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_2">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 2)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_3">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 3)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_4">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 4)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_5">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 5)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_6">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 6)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_7">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 7)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_8">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 8)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_9">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 9)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="category_10">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($products as $product)
                                @if ($product->category_id == 10)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            title="{{ $product->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                    width="800" height="800" alt="{{ $product->nama_produk }}">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                                class="function-link">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                            class="product-name"><span>{{ $product->category_id }} - {{
                                                $product->nama_produk
                                                }}</span></a>
                                        @if (isset($product->harga_diskon))
                                        <div class="wrap-price">
                                            <ins>
                                                <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                            </ins>
                                            <del>
                                                <p class="product-price">Rp{{ $product->harga_diskon }}</p>
                                            </del>
                                        </div>
                                        @else
                                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                                }}</span></div>
                                        @endif
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</main>
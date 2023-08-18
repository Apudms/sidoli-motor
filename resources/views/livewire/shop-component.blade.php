<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Halaman Utama</a></li>
                <li class="item-link"><span>Toko</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Toko</h1>

                    <div class="wrap-right">

                        <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen" wire:model="sorting">
                                <option value="default" selected="selected">Sortir berdasarkan (default)</option>
                                {{-- <option value="popularity">Terpopuler</option> --}}
                                {{-- <option value="rating">Terlaris</option> --}}
                                <option value="date">Terbaru</option>
                                <option value="price">Harga: Rendah ke Tinggi</option>
                                <option value="price-desc">Harga: Tinggi ke Rendah</option>
                            </select>
                        </div>

                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen" wire:model="pageSize">
                                <option value="9" selected="selected">9 per halaman</option>
                                <option value="12">12 per halaman</option>
                                <option value="15">15 per halaman</option>
                                <option value="18">18 per halaman</option>
                                <option value="21">21 per halaman</option>
                                <option value="24">24 per halaman</option>
                            </select>
                        </div>

                    </div>

                </div>
                <!--end wrap shop control-->

                <div class="row">

                    <ul class="product-list grid-products equal-container">

                        @foreach ($products as $product)

                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                        title="{{ $product->nama_produk }}">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                alt="{{ $product->nama_produk }}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('produk.detail',['slug'=>$product->slug]) }}"
                                        class="product-name"><span>{{ $product->nama_produk
                                            }}</span></a>
                                    <div class="stock-info">
                                        <br>
                                        <p class="availability">Stok:
                                            @if ($product->jumlah_stok < 1) <b class="text-danger">Habis</b>
                                                @else
                                                <b>{{ $product->jumlah_stok }}</b>
                                                @endif
                                        </p>
                                    </div>
                                    <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                            }}</span></div>
                                    <a href="#" class="btn add-to-cart"
                                        wire:click.prevent="store('{{ $product->id }}', '{{ $product->nama_produk }}', {{ $product->harga_normal }})">Masukkan
                                        Keranjang</a>
                                </div>
                            </div>
                        </li>

                        @endforeach

                    </ul>

                </div>

                <div class="wrap-pagination-info">
                    {{ $products->links() }}
                    {{-- <ul class="page-numbers">
                        <li><span class="page-number-item current">1</span></li>
                        <li><a class="page-number-item" href="#">2</a></li>
                        <li><a class="page-number-item" href="#">3</a></li>
                        <li><a class="page-number-item next-link" href="#">Next</a></li>
                    </ul>
                    <p class="result-count">Menampilkan 1-9 dari 21 hasil</p> --}}
                </div>
            </div>
            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">

                <hr>

                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">Semua Kategori</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            @foreach ($categories as $category)
                            <li class="category-item has-child-cate active">
                                <a href="{{ route('produk.kategori',['category_slug' => $category->slug]) }}"
                                    class="cate-link">{{ $category->nama_kategori }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- Categories widget-->

                <hr>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <h2 class="widget-title">Merk</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list list-limited" data-show="4">
                            <li class="list-item"><a class="filter-link active" href="#">Honda</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Kawahara</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Kawasaki</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Repsol</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Suzuki</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Swallow</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">TDR</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Yamaha</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Yamalube</a></li>
                            <li class="list-item"><a
                                    data-label='Tampilkan lebih sedikit<i class="fa fa-angle-up" aria-hidden="true"></i>'
                                    class="btn-control control-show-more" href="#">Tampilkan lainnya<i
                                        class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div><!-- brand widget-->

                <hr>

                <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Harga: <span class="text-info">Rp{{ $min_price }} - Rp{{ $max_price
                            }}</span>
                    </h2>
                    <div class="widget-content" style="padding: 10px 5px 40px 5px;">
                        <div id="slider" wire:ignore>

                        </div>
                    </div>
                </div><!-- Price-->

            </div>
            <!--end sitebar-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>

@push('scripts')
<script>
    var slider = document.getElementById('slider');
    noUiSlider.create(slider,{
        start : [100,10000000],
        connect : true,
        range : {
            'min' : 100,
            'max' : 10000000,
        },
        pips : {
            mode : 'steps',
            stepped : true,
            density : 4
        }
    });

    slider.noUiSlider.on('update', function(value) {
        @this.set('min_price', value[0]);
        @this.set('max_price', value[1]);
    });
</script>
@endpush
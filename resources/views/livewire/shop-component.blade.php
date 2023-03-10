<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Halaman Utama</a></li>
                <li class="item-link"><span>Velg</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Velg</h1>

                    <div class="wrap-right">

                        <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen">
                                <option value="menu_order" selected="selected">Sortir berdasarkan</option>
                                <option value="popularity">Terpopuler</option>
                                <option value="rating">Terlaris</option>
                                <option value="date">Terbaru</option>
                                <option value="price">Harga: Rendah ke Tinggi</option>
                                <option value="price-desc">Harga: Tinggi ke Rendah</option>
                            </select>
                        </div>

                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen">
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

                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Nama Produk</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                    <a href="#" class="btn add-to-cart">Masukkan Keranjang</a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <div class="wrap-pagination-info">
                    <ul class="page-numbers">
                        <li><span class="page-number-item current">1</span></li>
                        <li><a class="page-number-item" href="#">2</a></li>
                        <li><a class="page-number-item" href="#">3</a></li>
                        <li><a class="page-number-item next-link" href="#">Next</a></li>
                    </ul>
                    <p class="result-count">Menampilkan 1-9 dari 21 hasil</p>
                </div>
            </div>
            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">

                <hr>

                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">Semua Kategori</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            <li class="category-item has-child-cate">
                                <a href="#" class="cate-link">Ban</a>
                                <span class="toggle-control">+</span>
                                <ul class="sub-cate">
                                    <li class="category-item"><a href="#" class="cate-link">Dalam (6)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Luar (23)</a></li>
                                </ul>
                            </li>
                            <li class="category-item has-child-cate">
                                <a href="#" class="cate-link">Oli</a>
                                <span class="toggle-control">+</span>
                                <ul class="sub-cate">
                                    <li class="category-item"><a href="#" class="cate-link">Gardan (4)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Mesin (15)</a></li>
                                    <li class="category-item"><a href="#" class="cate-link">Rem (8)</a></li>
                                </ul>
                            </li>
                            <li class="category-item has-child-cate">
                                <a href="#" class="cate-link">Handle Rem</a>
                            </li>
                            <li class="category-item has-child-cate">
                                <a href="#" class="cate-link">Knalpot</a>
                            </li>
                            <li class="category-item has-child-cate active">
                                <a href="#" class="cate-link">Velg</a>
                            </li>
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
                            <li class="list-item"><a data-label='Tampilkan lebih sedikit<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Tampilkan lainnya<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div><!-- brand widget-->

                <hr>

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Produk Populer</h2>
                    <div class="widget-content">
                        <ul class="products">
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Nama Produk</span></a>
                                        <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                    </div>
                                </div>
                            </li>

                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Nama Produk</span></a>
                                        <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                    </div>
                                </div>
                            </li>

                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="{{ asset('/assets') }}/images/products/produk.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Nama Produk</span></a>
                                        <div class="wrap-price"><span class="product-price">Rp123</span></div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div><!-- brand widget-->

            </div>
            <!--end sitebar-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Halaman Utama</a></li>
                <li class="item-link"><a href="/toko" class="link">Toko</a></li>
                <li class="item-link"><span>Detail</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                            <ul class="slides">

                                <li data-thumb="{{ asset('/assets/images/products') }}/{{ $product->image }}">
                                    <img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                        alt="product thumbnail" />
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        <h2 class="product-name"><b>{{ $product->nama_produk }}</b></h2>
                        <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal }}</span></div>
                        <div class="stock-info in-stock">
                            <br>
                            <p class="availability">Stok: <b>{{ $product->jumlah_stok }}</b></p>
                        </div>
                        <div class="quantity">
                            <span>Jumlah:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quantity" value="1" data-max="120" pattern="[0-9]*">

                                <a class="btn btn-reduce" href="#"></a>
                                <a class="btn btn-increase" href="#"></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            <a href="#" class="btn add-to-cart"
                                wire:click.prevent="store('{{ $product->id }}','{{ $product->nama_produk }}',{{ $product->harga_normal }})">Tambahkan
                                keranjang</a>
                            <div class="wrap-btn">
                                <a href="#" class="btn btn-wishlist">Tambahkan disukai</a>
                            </div>
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">Deskripsi</a>
                            {{-- <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a> --}}
                            {{-- <a href="#review" class="tab-control-item">Reviews</a> --}}
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                <p>{{ $product->deskripsi }}</p>
                            </div>
                            {{-- <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>Weight</th>
                                            <td class="product_weight">1 kg</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions</th>
                                            <td class="product_dimensions">12 x 15 x 23 cm</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td>
                                                <p>Black, Blue, Grey, Violet, Yellow</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> --}}
                            {{-- <div class="tab-content-item " id="review">

                                <div class="wrap-review-form">

                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6
                                                Chainsaw Omnidirectional [Orage]</span></h2>
                                        <ol class="commentlist">
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                id="li-comment-20">
                                                <div id="comment-20" class="comment_container">
                                                    <img alt="" src="{{ asset('/assets/images') }}/author-avata.jpg"
                                                        height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span class="width-80-percent">Rated <strong
                                                                    class="rating">5</strong> out of 5</span>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="woocommerce-review__author">admin</strong>
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date"
                                                                datetime="2008-02-14 20:00">Tue, Aug 15, 2017</time>
                                                        </p>
                                                        <div class="description">
                                                            <p>Pellentesque habitant morbi tristique senectus et netus
                                                                et malesuada fames ac turpis egestas.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div><!-- #comments -->

                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">

                                                <form action="#" method="post" id="commentform" class="comment-form"
                                                    novalidate="">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Your email address will not be
                                                            published.</span> Required fields are marked <span
                                                            class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <span>Your rating</span>
                                                        <p class="stars">

                                                            <label for="rated-1"></label>
                                                            <input type="radio" id="rated-1" name="rating" value="1">
                                                            <label for="rated-2"></label>
                                                            <input type="radio" id="rated-2" name="rating" value="2">
                                                            <label for="rated-3"></label>
                                                            <input type="radio" id="rated-3" name="rating" value="3">
                                                            <label for="rated-4"></label>
                                                            <input type="radio" id="rated-4" name="rating" value="4">
                                                            <label for="rated-5"></label>
                                                            <input type="radio" id="rated-5" name="rating" value="5"
                                                                checked="checked">
                                                        </p>
                                                    </div>
                                                    <p class="comment-form-author">
                                                        <label for="author">Name <span class="required">*</span></label>
                                                        <input id="author" name="author" type="text" value="">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email <span class="required">*</span></label>
                                                        <input id="email" name="email" type="email" value="">
                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Your review <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45"
                                                            rows="8"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit"
                                                            value="Submit">
                                                    </p>
                                                </form>

                                            </div><!-- .comment-respond-->
                                        </div><!-- #review_form -->
                                    </div><!-- #review_form_wrapper -->

                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Produk Terkait</h2>
                    <div class="widget-content">
                        <ul class="products">

                            @foreach ($popular_products as $popular)

                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="{{ route('produk.detail', ['slug' => $popular->slug]) }}"
                                            title="{{ $popular->nama_produk }}">
                                            <figure><img
                                                    src="{{ asset('/assets/images/products') }}/{{ $popular->image }}"
                                                    alt="{{ asset('/assets/images/products') }}/{{ $popular->image }}">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('produk.detail', ['slug' => $popular->slug]) }}"
                                            title="{{ $popular->nama_produk }}"><span>{{ $popular->nama_produk
                                                }}</span></a>
                                        <div class="wrap-price"><span class="product-price">Rp{{ $popular->harga_normal
                                                }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>
            <!--end sitebar-->

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Kategori Terkait</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                            data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                            @foreach ($related_products as $related)

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ route('produk.detail', ['slug' => $related->slug]) }}"
                                        title="{{ $related->nama_produk }}">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $related->image }}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="{{ route('produk.detail', ['slug' => $related->slug]) }}"
                                            title="{{ $related->nama_produk }}" class="function-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('produk.detail', ['slug' => $related->slug]) }}"
                                        title="{{ $related->nama_produk }}" class="product-name"><span>{{
                                            $related->nama_produk
                                            }}</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp{{ $related->harga_normal }}
                                        </span></div>
                                </div>
                            </div>

                            @endforeach


                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">Habis</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->nama_produk }}</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                        </ins> <del>
                                            <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                        <span class="flash-item sale-label">Habis</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->nama_produk }}</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                        </ins> <del>
                                            <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->nama_produk }}</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal }}
                                        </span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->nama_produk }}</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                            }}</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">Habis</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->nama_produk }}</span></a>
                                    <div class="wrap-price"><ins>
                                            <p class="product-price">Rp{{ $product->sale_price }}</p>
                                        </ins> <del>
                                            <p class="product-price">Rp{{ $product->harga_normal }}</p>
                                        </del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Baru</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->nama_produk }}</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                            }}</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('/assets/images/products') }}/{{ $product->image }}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Terlaris</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->nama_produk }}</span></a>
                                    <div class="wrap-price"><span class="product-price">Rp{{ $product->harga_normal
                                            }}</span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End wrap-products-->
                </div>
            </div>

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>
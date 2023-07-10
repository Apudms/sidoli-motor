<div class="wrap-icon-section minicart">
    <a href="/keranjang" class="link-direction">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <div class="left-info">
            @if (Cart::count() > 0)
            <span class="index">{{ Cart::count() }} pcs</span>
            @endif
            <span class="title">Keranjang</span>
        </div>
    </a>
</div>
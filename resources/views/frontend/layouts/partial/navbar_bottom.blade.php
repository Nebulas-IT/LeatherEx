<div class="header-bottom">
    <div class="navbar navbar-2">
        <div class="">
            <ul class="nav navbar-nav">
                <?php $brands = DB::table('product_brands')->get(); ?>
                @foreach($brands as $key => $brand)
                    <li class="nav-effect2">
                        <a href="{{ route('user.shop.show', $brand->id) }}">{{ $brand->brand_name }}</a></li>
                @endforeach
                @if (\Request::is('/'))
                    <li class="nav-effect2">
                        <a href="#youtube-tv">LeatherX Fashion TV</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
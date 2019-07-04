<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header brand-logo">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img-responsive" src="{{ asset('assets/logo.png') }}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbarOld" id="sidebarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav nav-top">
                <li class="active nav-effect1"><a href="{{ url('/') }}">Home</a></li>
                <li class="nav-effect1"><a href="{{ route('user.about.index') }}">About</a></li>
                <li class="dropdown nav-effect1">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Men
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php $sub_cats = DB::table('product_categories')->where('parent_id', '=', 1)->get(); ?>
                        @foreach($sub_cats as $key => $sub_cat)
                            <li><a href="{{ route('user.shop.show', $sub_cat->id) }}">{{ $sub_cat->category_name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown nav-effect1">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Women
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php $sub_cats = DB::table('product_categories')->where('parent_id', '=', 2)->get(); ?>
                        @foreach($sub_cats as $key => $sub_cat)
                            <li><a href="{{ route('user.shop.show', $sub_cat->id) }}">{{ $sub_cat->category_name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown nav-effect1">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Bags, Wallets & Accessories
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php $sub_cats = DB::table('product_categories')->where('parent_id', '=', 3)->get(); ?>
                        @foreach($sub_cats as $key => $sub_cat)
                            <li><a href="{{ route('user.shop.show', $sub_cat->id) }}">{{ $sub_cat->category_name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-effect1"><a href="{{ route('user.shop.show', 4) }}">Fashion News</a></li>
                <li class="nav-effect1"><a href="{{ route('user.shop.show', 4) }}">Campaigns</a></li>
                <li class="nav-effect1"><a href="{{ route('user.contact.index') }}">Contact</a></li>
                <li class="navbar-form-search">
                    <form class="Header-search-form" action="/search" method="get">
                        <input class="Header-search-form-input" name="q" type="text" spellcheck="false" value="" autocomplete="off" placeholder="Search">
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>


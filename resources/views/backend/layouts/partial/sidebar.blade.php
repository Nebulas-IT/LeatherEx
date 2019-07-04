<!--sidebar-menu-->

<div id="sidebar"><a href="{{ route('admin.index') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard2</a>
    <ul>
        <li class="<?php if (\Request::is('admin')) {echo "active";}?>">
            <a href="{{ route('admin.index') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a>
        </li>
        <li class="submenu <?php if (\Request::is('admin/product*')) {echo "active";}?>"> <a href=""><i class="icon icon-file"></i> <span>Product</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{ route('admin.product.index') }}">All Products</a></li>
                <li><a href="{{ route('admin.product.create') }}">Add Product</a></li>
            </ul>
        </li>
        <li class="submenu <?php if (\Request::is('admin/cat*')) {echo "active";}?>"> <a href=""><i class="icon icon-file"></i> <span>Category</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{ route('admin.cat.index') }}">All Categories</a></li>
                <li><a href="{{ route('admin.cat.create') }}">Add Category</a></li>
            </ul>
        </li>
        <li class="submenu <?php if (\Request::is('admin/sub-cat*')) {echo "active";}?>"> <a href=""><i class="icon icon-file"></i> <span>Sub Category</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{ route('admin.sub-cat.index') }}">All Sub Categories</a></li>
                <li><a href="{{ route('admin.sub-cat.create') }}">Add Sub Category</a></li>
            </ul>
        </li>
        <li class="submenu <?php if (\Request::is('admin/brand*')) {echo "active";}?>"> <a href=""><i class="icon icon-file"></i> <span>Brand</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{ route('admin.brand.index') }}">All Brands</a></li>
                <li><a href="{{ route('admin.brand.create') }}">Add Brand</a></li>
            </ul>
        </li>
        <li class="submenu <?php if (\Request::is('admin/home-image*')) {echo "active";}?>"> <a href=""><i class="icon icon-file"></i> <span>Home Page Image</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{ route('admin.home-image.index') }}">Home Structure</a></li>
                <li><a href="{{ route('admin.home-image.create') }}">Add Image</a></li>
            </ul>
        </li>
    </ul>
</div>

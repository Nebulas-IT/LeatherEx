@extends('backend.layouts.index')

@section('title','All Products')


@push('css')

@endpush


@section('content')
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                    <h5>All Products</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Product Name</th>
                            <th>Product SKU</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr class="gradeX">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_sku }}</td>
                                <td>{{ $product->product_category->category_name }}</td>
                                <td>{{ $product->product_brand->brand_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td class="center">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.product.edit', $product->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('admin.product.destroy', $product->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop


@push('scripts')
    <script src="{{ asset("backend/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("backend/js/matrix.tables.js") }}"></script>

@endpush

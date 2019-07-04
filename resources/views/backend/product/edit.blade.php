@extends('backend.layouts.index')

@section('title','Update Product')


@push('css')
    <link rel="stylesheet" href="{{ asset("backend/css/bootstrap-wysihtml5.css") }}" />

@endpush


@section('content')
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Update Product</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="control-group">
                            <label class="control-label">Product Name :</label>
                            <div class="controls">
                                <input type="text" value="{{ $product->product_name }}" name="product_name" class="span11" placeholder="Product Name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Product SKU :</label>
                            <div class="controls">
                                <input type="text" value="{{ $product->product_sku }}" name="product_sku" class="span11" placeholder="Product SKU" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Select Category: </label>
                            <div class="controls">
                                <select name="cat_id" id="">
                                    @foreach($categories as $key => $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Select Brand:</label>
                            <div class="controls">
                                <select name="brand_id" id="">
                                    @foreach($brands as $key => $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Product Price :</label>
                            <div class="controls">
                                <input type="text" value="{{ $product->product_price }}" name="price" class="span11" placeholder="Product Price" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Featured Image :</label>
                            <div class="controls">
                                <input type="file" value="{{ $product->id }}" name="image" class="span11" placeholder="Product Price" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Product Description :</label>
                            <div class="controls">
                                <textarea name="desc" class="textarea_editor span11" rows="6" placeholder="Enter Product Description">{{ $product->product_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


@push('scripts')
    <script src="{{ asset("backend/js/wysihtml5-0.3.0.js") }}"></script>
    <script src="{{ asset("backend/js/bootstrap-wysihtml5.js") }}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endpush

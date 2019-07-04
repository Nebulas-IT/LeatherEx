@extends('backend.layouts.index')

@section('title','Edit Home Image')


@push('css')

@endpush


@section('content')
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Add Home Page Image</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="{{ route('admin.home-image.update', $home_image->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="control-group">
                            <label class="control-label">Image Title :</label>
                            <div class="controls">
                                <input type="text" name="image_title" class="span11" placeholder="Image Title" value="{{ $home_image->image_title }}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Image :</label>
                            <div class="controls">
                                <input type="file" name="image" class="span11" placeholder="Product SKU" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Category Slug : </label>
                            <div class="controls">
                                <input type="text" name="image_slug"  class="span11" placeholder="Enter Category Slug" value="{{ $home_image->image_slug }}" />
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Change Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


@push('scripts')

@endpush
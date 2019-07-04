@extends('backend.layouts.index')

@section('title','Add Home Image')


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
                    <form action="{{ route('admin.home-image.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <label class="control-label">Image Title :</label>
                            <div class="controls">
                                <input type="text" name="image_title" class="span11" placeholder="Image Title" />
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
                                <input type="text" name="image_slug"  class="span11" placeholder="Enter Category Slug"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Image Position :</label>
                            <div class="controls">
                                <select name="image_position" id="">
                                    @for($i = 1; $i< 11; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Add Home Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


@push('scripts')

@endpush
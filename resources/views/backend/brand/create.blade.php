@extends('backend.layouts.index')

@section('title','Add Brand')


@push('css')
    <link rel="stylesheet" href="{{ asset("backend/css/bootstrap-wysihtml5.css") }}" />

@endpush


@section('content')
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Add Brand</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="{{ route('admin.brand.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="control-group">
                            <label class="control-label">Brand Name :</label>
                            <div class="controls">
                                <input type="text" name="brand_name" class="span11" placeholder="Brand Name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Brand Description :</label>
                            <div class="controls">
                                <textarea name="desc" class="textarea_editor span11" rows="6" placeholder="Enter Brand Description"></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Add Brand</button>
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

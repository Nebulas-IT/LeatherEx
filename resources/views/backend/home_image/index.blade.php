@extends('backend.layouts.index')

@section('title','Home Page Image Structure')


@push('css')
    <link rel="stylesheet" href="{{ asset("backend/css/bootstrap-wysihtml5.css") }}"/>

@endpush


@section('content')
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Home Page Structure</h5>
                    <span class="label label-info">Home Images</span></div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Image Position</th>
                            <th>Image Title</th>
                            <th>Image</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($home_images as $key => $home_image)
                            <tr>
                                <td>{{ $home_image->id }}</td>
                                <td>{{ $home_image->image_title }}</td>
                                <td>
                                    <img src="{{ asset("assets/home-images/$home_image->image_url") }}" alt="{{ $home_image->image_title }}" class="img-responsive">
                                </td>
                                <td>{{ $home_image->image_slug }}</td>
                                <td class="center">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.home-image.edit', $home_image->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
    <script src="{{ asset("backend/js/wysihtml5-0.3.0.js") }}"></script>
    <script src="{{ asset("backend/js/bootstrap-wysihtml5.js") }}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endpush

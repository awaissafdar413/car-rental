<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SEO Panel</title>

    <link href="{{asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet"
        media="all">
    <link href="{{asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet" media="all">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        @if (session('message'))
        <div class="alert alert-warning" role="alert">
            {{ session('message') }}
        </div>
        @endif
        <div class="wrapper wrapper--w680">
            <div class="card bg-blue card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Add Blog</h2>
                    @foreach ($datas as $data )
                    <form method="POST" action="{{ route('blog.update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter Title" value="{{ $data->title }}" name="title">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="hidden" placeholder="Enter Title" value="{{ $data->id }}" name="id">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter Keyword" value="{{ $data->keyword }}" name="keyword">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter Blog Description" value="{{ $data->description }}"
                                name="description">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter SLUG" name="slug" value="{{ $data->slug }}">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter ogi link" value="{{ $data->ogi_link }}" name="ogilink">
                        </div>
                        <div class="input-group">
                            <label>Enter OGI Image</label>
                            <input class="input--style-1" type="file" placeholder="Enter  image" value="{{ $data->ogi_image }}" name="ogiimage">
                        </div>
                        <div class="input-group">
                            <label>Enter Featured Image</label>
                            <input class="input--style-1" type="file" placeholder="Enter  image" value="{{ $data->featured_image }}" name="image">
                        </div>
                        <div class="input-group">
                            <textarea name="content" class="input--style-1">{!! $data->blog !!}</textarea>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('admin/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/js/global.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</body>

</html>

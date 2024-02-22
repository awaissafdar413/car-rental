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
    <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
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
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">SEO Form</h2>
                    <form method="POST" action="{{ route('admin.addblog') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter Title" name="title">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter Keyword" name="keyword">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter Description"
                                name="description">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter Slug"
                                name="slug">
                        </div>



                        <div class="input-group">
                            <label>Featured Image</label>
                            <input class="input--style-1" type="file" placeholder="Enter OGI image" name="image">

                        </div>
                        <div class="input-group">
                            <textarea class="form-control" id="content" placeholder="Enter the Description" rows="5"
                                name="content"></textarea>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('admin/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datepicker/daterangepicker.js')}}"></script>
    <script>
        CKEDITOR.replace('content');
    //    ClassicEditor.create(document.querySelector('#content'))
    //     .catch(error => {
    //        console.error(error);
    //       });
    </script>
    <script src="{{asset('admin/js/global.js')}}"></script>
</body>

</html>

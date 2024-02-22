{{-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Blogs</title>

    <link href="{{asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet"
        media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="{{asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet" media="all">
    <meta name="robots" content="noindex, follow">
</head>

<body>


    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('admin/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datepicker/daterangepicker.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>r
    <script src="{{asset('admin/js/global.js')}}"></script>

</body>

</html> --}}

@extends('layout.app')
@section('content')
<div class="page-wrapper p-t-100 p-b-100 font-robo">
    @if (session('message'))
    <div class="alert alert-warning" role="alert">
        {{ session('message') }}
    </div>
    @endif
    <div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Add Blog</h2>
                <a href="{{ route('add_blog_admin') }}" class="btn btn-lg btn-main my-4">Blog Dashboard</a>
                <table class="table table-light">
                    <tr>
                        <th  width="15%"class='fw-bold fs-3'>id</th>
                        <th  width="15%"class='fw-bold fs-3'>title</th>
                        <th  width="15%"class='fw-bold fs-3'>keyword</th>
                        <th  width="15%"class='fw-bold fs-3'>slug</th>
                        <th  width="15%"class='fw-bold fs-3' colspan="2">Action</th>
                    </tr>
                    @foreach ($datas as $data )
                    <tr>
                        <td width="15%">{{$loop->iteration}}</td>
                        <td width="15%">{{ $data->title }}</td>
                        <td width="15%">{{ $data->keyword }}</td>
                        <td width="15%">{{ $data->slug }}</td>
                        <td width="15%"><a href="{{ route('admin.update',$data->id) }}" class="btn btn-danger btn-sm">Update</a></td>
                        <td><a href="{{ url('deleted/'.$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@push('style')
    <style>
           table {
        width: 100% !important;
        border-collapse: collapse !important;
    }
    th, td {
        color: var(--body-font-color) !important;
        width:150px !important;
        border-bottom: 1px solid #ddd !important;
        word-wrap: break-word !important; /* Ensures long text wraps within cells */
    }
    </style>
@endpush
@endsection

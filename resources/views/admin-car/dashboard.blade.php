
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
                        <th  width="15%"class='fw-bold fs-3'>Car Name</th>
                        <th  width="15%"class='fw-bold fs-3'>Brand Name</th>
                        <th  width="15%"class='fw-bold fs-3'>Rent</th>
                        <th  width="15%"class='fw-bold fs-3'>short Description</th>
                        <th  width="15%"class='fw-bold fs-3' colspan="2">Action</th>
                    </tr>
                    @foreach ($datas as $data )
                    <tr>
                        <td width="15%">{{$loop->iteration}}</td>
                        <td width="15%">{{ $data->car_name }}</td>
                        <td width="15%">{{ $data->car_type }}</td>
                        <td width="15%">{{ $data->car_rent }}</td>
                        <td width="15%">{{ $data->shortdescription }}</td>
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

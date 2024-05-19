@extends('layout.app')
@push('title')
    <title>Rentaly | email marketing | all email </title>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-md-10">
                <div class="card p-4 rounded-5 mb25" style="background-size: 100%; background-repeat: no-repeat;">
                    <h4>Scheduled Orders</h4>

                    <table class="table de-table">
                        <thead>
                            <tr>
                                <th scope="col"><span class="text-uppercase fs-12 text-gray">Id</span></th>
                                <th scope="col"><span class="text-uppercase fs-12 text-gray">Email address</span></th>
                                <th scope="col" colspan="2"><span class="text-uppercase fs-12 text-gray">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="d-lg-none d-sm-block">Order ID</span>
                                    <div class="badge bg-gray-100 text-dark"
                                        style="background-size: 100%; background-repeat: no-repeat;">#01245</div>
                                </td>
                                <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ferrari
                                        Enzo</span></td>
                                <td><a href="" class="btn btn-danger btn-sm ripple-surface">Update</a></td>
                                <td><a href="" class="btn btn-danger btn-sm ripple-surface">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-1 col-sm-1"></div>
        </div>
    </div>
@endsection

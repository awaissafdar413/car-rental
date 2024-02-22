


@extends('layout.app')
@section('content')
<div class="page-wrapper  p-t-100 p-b-100 font-robo">
    @if (session('message'))
    <div class="alert alert-warning" role="alert">
        {{ session('message') }}
    </div>
    @endif
    <div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Add Car</h2>
                <form method="POST" action="{{ route('admin.addblog') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Enter Car Name" name="car_name">
                    </div>
                    <div class="input-group">
                        <select name="car_type" class="input--style-1" style="width: 100%;">
                            <option value="">Select Car Brand</option>
                            @foreach ($cars as $car)
                            <option value="{{ $car->brand_id }}">{{ $car->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="number" placeholder="Enter Car rent"
                            name="car_rent">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="Number" placeholder="Enter Passenger"
                            name="car_passenger">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="Number" placeholder="Enter Gate"
                            name="car_gate">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="file" placeholder="Enter Car image" name="image">
                    </div>
                    <div class="content">
                        Enter Your Short Description
                    </div>
                    <br>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder=" Enter Your Short Description" name="shortdescription">
                    </div>
                    <br>
                    <div class="content">
                        Enter Your Long Description
                    </div>
                    <br>
                    <div class="input-group">

                        <textarea class="form-control" id="content" style="
                        width: 100%;
                    "placeholder="Enter the Long Description"
                            name="content"></textarea>
                    </div>

                    <div class="p-t-20">
                        <button class="btn btn--radius btn-main btn--green" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
<script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
<style>
    input{
    font-size: 18px !important;
    padding: 11px 22px !important;
}
.content{
    font-size: 21px;
    font-weight: 800;
}
</style>
@endpush
@push('script')
<script>
    CKEDITOR.replace('content');
</script>
@endpush

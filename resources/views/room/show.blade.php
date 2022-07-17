@extends('app')

@section('title','Room -'.$room->name_short)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            @include('partials.menu')
            <h1>รายละเอียด Room</h1>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>id: {{ $room->id }}</td>
                    </tr>
                    <tr>
                        <td>name short: {{ $room->name_short}}</td>
                    </tr>
                    <tr>
                        <td>name: {{ $room->name}}</td>
                    </tr>
                    <tr>
                        <td><a href=" {{ route('room')}} "><button type="button"
                                    class="btn btn-primary">Back</button></a></td>
                    </tr>
                </tbody>
        </div>

    </div>
    @include('partials.footer')
</div>

@endsection

@extends('app')

@section('title','Room')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>รายละเอียด Room</h1>

            @if(session('feedback'))
                <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
            @endif

            <div class="row">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" role="button" href="{{ route('room.create') }}">เพิ่มห้อง</a>
                </div>

            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name short</th>
                        <th scope="col">name</th>
                        <th scope="col">Show</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room )
                    <tr>
                        <td>{{ $room->id }}</td>
                        <td>{{ $room->name_short}}</td>
                        <td>{{ $room->name}}</td>
                        <td><a href=" {{ route('room.show', $room)}} "> <button class="btn btn-primary"
                                    type="button">Show</button> </a></td>
                        <td><a href=" {{ route('room.edit', $room)}} "> <button class="btn btn-primary"
                                    type="button">Edit</button> </a></td>
                        <td>
                            <form action="{{ route('room.destroy', $room)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary"
                                type="submit">Del</button> </a></td>
                            </form>

                            {{-- <a href=" {{ route('room.show', $room)}} "> <button class="btn btn-primary"
                                    type="button">Del</button> </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
</div>

@endsection

@extends('app')

@section('title','Room')

@section('content')
<div class="container">
    @include('partials.menu')
    <div class="row">
        <div class="col-8">

            <div class="col pull-left"><h1>รายละเอียดห้อง</h1></div>
            <div class="col pull-right"><h6>คุณ {{ Auth::user()->full_name }}</h6></div>

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
                        <th scope="col">active</th>
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
                        <td>{{ $room->active }}</td>
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
            </table>
        </div>
    </div>
    @include('partials.footer')
</div>

@endsection

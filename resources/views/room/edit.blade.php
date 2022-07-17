@extends('app')

@section('title','Room -'.$room->name_short)

@section('content')
<div class="container">
    @include('partials.menu')

    <h1>Room : Edit</h1>

    @include('partials.form-feedback')

    <form action="{{ route('room.update', $room) }}" method="post">
        @method('patch')
        @include('room.form')
    </form>
    @include('partials.footer')
</div>
@endsection

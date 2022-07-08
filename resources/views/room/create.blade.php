@extends('app')

@section('title','Room -'.$room->name_short)

@section('content')
<div class="container">

    <h1>Room : create</h1>

    @include('partials.form-feedback')

    <form action="/room" method="post">
    @include('room.form')
    </form>
</div>
@endsection

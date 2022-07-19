@extends('app')

@section('title','create room')

@section('content')
<div class="container">
    @include('partials.menu')

    <h1>Room : Create</h1>

    @include('partials.form-feedback')

    <form action="/room" method="post">
    @include('room.form')
    </form>
    @include('partials.footer')
</div>

@endsection

@extends('app')

@section('title', 'Create Booking')

@section('content')
<div class="container">
    @include('partials.menu')
    <h1>Booking : Create</h1>

    @include('partials.form-feedback')

    <form action="/booking" method="post">
     @include('booking.form')

    </form>
    @include('partials.footer')
</div>

@endsection

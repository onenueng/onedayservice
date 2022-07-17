@extends('app')

@section('title', 'Create clinic')

@section('content')
<div class="container">
    @include('partials.menu')

    <h1>Clinic</h1>

    @include('partials.form-feedback')

    <form action="/clinic" method="post">
        @include('clinic.form')
    </form>
    @include('partials.footer')
</div>
@endsection

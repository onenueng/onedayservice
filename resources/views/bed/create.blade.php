@extends('app')

@section('title','Create Bed')

@section('content')
<div class="container">
    <h1>Bed : Create</h1>

    @include('partials.form-feedback')

    <form action="/bed" method="post">
     @include('bed.form')

    </form>
</div>
@endsection

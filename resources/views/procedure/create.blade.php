@extends('app')

@section('title','Procedure')

@section('content')
<div class="container">
    @include('partials.menu')
    <h1>Procedure</h1>

    @include('partials.form-feedback')

    <form action="/procedure" method="post">
     @include('procedure.form')
    </form>
    @include('partials.footer')
</div>
@endsection

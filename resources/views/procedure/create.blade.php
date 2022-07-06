@extends('app')

@section('title','Procedure - '.$procedure->name)

@section('content')
<div class="container">
    <h1>Procedure</h1>

    @include('partials.form-feedback')

    <form action="/procedure" method="post">
     @include('procedure.form')
    </form>
</div>
@endsection

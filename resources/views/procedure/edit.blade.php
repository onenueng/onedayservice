@extends('app')

@section('title','Procedure -'  .$procedure->name )

@section('content')
<div class="container">
    <h1>Procedure : Edit</h1>

    @include('partials.form-feedback')

    <form action="{{ route('procedure.update', $procedure) }}" method="post">
        @method('patch')
        @include('procedure.form')
    </form>
</div>

@endsection

@extends('app')

@section('title',  'Clinic - '. $clinic->name)

@section('content')
<div class="container">

    <h1>Clinic : Edit</h1>

    @include('partials.form-feedback')

    <form action="{{ route('clinic.update', $clinic) }}" method="post">
        @method('patch')
        @include('clinic.form')
    </form>
</div>
@endsection
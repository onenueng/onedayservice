@extends('app')

@section('title',  'Patient - '. $patient->id)

@section('content')
<div class="container">
    @include('partials.menu')

    <h1>Patient : Edit</h1>

    @include('partials.form-feedback')

    <form action="{{ route('patient.update', $patient) }}" method="post">
        @method('patch')
        @include('patient.form')
    </form>
    @include('partials.footer')
</div>
@endsection

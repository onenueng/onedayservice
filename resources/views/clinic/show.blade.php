@extends('app')

@section('title', 'Clinic - '. $clinic->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
    <h1>รายละเอียด Clinic</h1>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>id: {{ $clinic->id }}</td>
            </tr>
            <tr>
                <td>code: {{ $clinic->code }}</td>
            </tr>
            <tr>
                <td>name: {{ $clinic->name }}</td>
            </tr>
            <tr>
                <td><a href="{{ route('clinic') }}"><button type="button" class="btn btn-primary">back</button></a></td>
            </tr>
        </tbody>
        </div>
    </div>
</div>
@endsection
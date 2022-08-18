@extends('app')

@section('title','Procedure -' .$procedure->name)

@section('content')
<div class="container">
    @include('partials.menu')
    <div class="row">
        <div class="col-6">
            <h1>รายละเอียด Procedure</h1>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>id: {{ $procedure->id }}</td>
                    </tr>
                    <tr>
                        <td>name: {{ $procedure->name }}</td>
                    </tr>
                    <tr>
                        <td>Clinic: {{ $procedure->clinic->name }}</td>
                    </tr>
                    <tr>
                        <td>active: {{ $procedure->active }}</td>
                    </tr>
                    <tr>
                        <td><a href="{{ route('procedure') }}"><button type="button" class="btn btn-primary">back</button></a></td>
                    </tr>
            </tbody>
        </table>
        @include('partials.footer')
        </div>
    </div>
@endsection

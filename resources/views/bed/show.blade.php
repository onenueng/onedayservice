@extends('app')

@section('title','Bed - '.$bed->id)

@section('content')
<div class="container">
    @include('partials.menu')
    <div class="row">
        <div class="col-6">
        <h1>รายละเอียด bed</h1>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>id: {{ $bed->id }}</td>
                </tr>
                <tr>
                    <td>no: {{ $bed->no }}</td>
                </tr>
                <tr>
                    <td>type: {{ $bed->type }}</td>
                </tr>
                <tr>
                    <td>room: {{ $bed->room->name_short }}</td>
                </tr>
                <tr>
                    <td><a href="{{ route('bed') }}"><button type="button" class="btn btn-primary">back</button></a></td>
                </tr>
            </tbody>
        </table>
        @include('partials.footer')

        </div>

    </div>
</div>

@endsection


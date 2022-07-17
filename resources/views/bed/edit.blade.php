@extends('app')

@section('title','Bed - '.$bed->id)

@section('content')
<div class="container">
    @include('partials.menu')
    <h1>Bed : Edit</h1>

    @include('partials.form-feedback')

    <form action="{{ route('bed.update', $bed) }}" method="post">
        @method('patch')
        @include('bed.form')
    </form>
    @include('partials.footer')
</div>
@endsection

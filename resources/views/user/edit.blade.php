@extends('app')

@section('title',  'User - '. $user->id)

@section('content')
<div class="container">
    @include('partials.menu')

    <h1>User : Edit</h1>

    @include('partials.form-feedback')

    <form action="{{ route('user.update', $user) }}" method="post">
        @method('patch')
        @include('user.form')
    </form>
    @include('partials.footer')
</div>
@endsection

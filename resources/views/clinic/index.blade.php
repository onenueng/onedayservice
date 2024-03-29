@extends('app')

@section('title', 'Clinic')

@section('content')
<div class="container">
    @include('partials.menu')
    <div class="row">
        <div class="col-6">
            <div class="col pull-left"><h1>รายละเอียดคลินิก</h1></div>
            <div class="col pull-right"><h6>คุณ {{ Auth::user()->full_name }}</h6></div>

            @if(session('feedback'))
                <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
            @endif

            <div class="row">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" role="button" href="{{ route('clinic.create') }}">เพิ่มคลินิก</a>
                </div>

            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Active</th>
                        <th scope="col">Show</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clinics as $clinic)
                    <tr>
                        <th scope="row"> {{ $clinic->id }}</th>
                        <td>{{ $clinic->code }}</td>
                        <td>{{ $clinic->name }}</td>
                        <td>{{ $clinic->active }}</td>
                        <td><a href="{{ route('clinic.show', $clinic) }}">
                            <button type="button" class="btn btn-primary">show</button>
                            </a>
                        </td>
                        <td><a href="{{ route('clinic.edit', $clinic) }}">
                            <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('clinic.destroy', $clinic) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Del</button>
                            </form>
                            {{-- <a href="{{ route('clinic.destroy', $clinic) }}"><button type="submit" class="btn btn-primary">Del</button>
                            </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('partials.footer')
</div>
@endsection

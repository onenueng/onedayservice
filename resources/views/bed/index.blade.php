@extends('app')

@section('title', 'Bed')

@section('content')
<div class="container">
    @include('partials.menu')
    <div class="row">
        <div class="col-6">
            <div class="col pull-left"><h1>รายละเอียดเตียง</h1></div>
            <div class="col pull-right"><h6>คุณ {{ Auth::user()->full_name }}</h6></div>
            {{-- {{ session('feedback', null) }} --}}

            @if(session('feedback'))
                <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
            @endif

            <div class="row">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" role="button" href="{{ route('bed.create') }}">เพิ่มเตียง</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">type</th>
                        <th scope="col">room</th>
                        <th scope="col">active</th>
                        <th scope="col">Show</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beds as $bed)
                    <tr>
                        <th scope="row"> {{ $bed->id }}</th>
                        <th>{{ $bed->no }}</th>
                        <td>{{ $bed->type }}</td>
                        <td>{{ $bed->room->name_short}}</td>
                        <td>{{ $bed->active }}</td>
                        <td>
                            <a href="{{ route('bed.show', $bed) }}"><button type="button" class="btn btn-primary">show</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('bed.edit', $bed) }}"><button type="button" class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('bed.destroy', $bed) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Del</button>
                            </form>
                            <!-- <a href=""><button type="button" class="btn btn-primary">Del</button> -->
                            </a>
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

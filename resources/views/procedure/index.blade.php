@extends('app')

@section('title','Procedure')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>รายละเอียด Procedure</h1>

            @if(session('feedback'))
                <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
            @endif


            <div class="row">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" role="button" href="{{ route('procedure.create') }}">เพิ่มหัตถการ</a>
                </div>

            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">clinic</th>
                        <th scope="col">Show</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($procedures as $procedure)
                    <tr>
                        <td>{{ $procedure->id }}</td>
                        <td>{{ $procedure->name}}</td>
                        <td>{{ $procedure->clinic->name }}</td>
                        <td><a href="{{ route('procedure.show', $procedure) }}">
                                <button type="button" class="btn btn-primary">Show</button>
                            </a>
                        </td>
                        <td><a href="{{ route('procedure.edit', $procedure) }}">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('procedure.destroy', $procedure) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    {{-- {{ $procedure }} --}}
                </tbody>
        </div>
    </div>
</div>

@endsection

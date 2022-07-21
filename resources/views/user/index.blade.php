@extends('app')

@section('title','User')

@section('content')
    <div class="container">
        @include('partials.menu')
        <div class="row">
            <h6>User:</h6>
            <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">sap_id</th>
                        <th scope="col">name</th>
                        <th scope="col">full_name</th>
                        <th scope="col">Show</th>
                        <th scope="col">Del</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->sap_id }}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->full_name}}</td>
                            <td>
                                <a href=" {{ route('user.show', $user)}} "> <button class="btn btn-primary"
                                    type="button">Show</button> </a>

                            </td>

                            <td>
                                <button type="button" class="btn btn-primary">Del</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @include('partials.footer')
        </div>

    </div>

    @endsection


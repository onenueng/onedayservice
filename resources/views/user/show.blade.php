@extends('app')

@section('title', 'User - '. $user->id)

@section('content')
    <div class="container">
        @include('partials.menu')
        <div class="row">
            <div class="col-6">
                <h1>รายละเอียด User</h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>id: {{ $user->id }}</td>
                        </tr>
                        <tr>
                            <td>sap_id: {{ $user->sap_id}}</td>
                        </tr>
                        <tr>
                            <td>username: {{ $user->username}}</td>
                        </tr>
                        <tr>
                            <td>full_name: {{ $user->full_name}}</td>
                        </tr>
                        <tr>
                            <td>admin: {{ $user->admin}}</td>
                        </tr>
                        <tr>
                            <td><a href=" {{ route('user')}} "><button type="button"
                                        class="btn btn-primary">Back</button></a></td>
                        </tr>
                    </tbody>
                </table>
                @include('partials.footer')
            </div>
        </div>
    </div>
@endsection

@extends('app')

@section('title','Patient')

@section('content')
<div class="container">
    @include('partials.menu')
    <div class="row">
        <h6>Patients:</h6>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">hn</th>
                    <th scope="col">full_name</th>
                    <th scope="col">gender</th>
                    <th scope="col">dob</th>
                    <th scope="col">phone</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->hn }}</td>
                        <td>{{ $patient->full_name}}</td>
                        <td>{{ $patient->gender}}</td>
                        <td>{{ $patient->dob}}</td>
                        <td>{{ $patient->phone}}</td>
                        <td>
                            <a href="{{ route('patient.show', $patient)}}  "> <button class="btn btn-primary"
                                type="button">Show</button> </a>

                        </td>
                        <td><a href="{{ route('patient.edit', $patient) }}">
                            <button type="button" class="btn btn-primary">Edit</button>
                            </a>
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

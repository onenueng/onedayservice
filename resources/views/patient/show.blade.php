@extends('app')

@section('title', 'Patinet - '. $patient->id)

@section('content')
<div class="container">
        @include('partials.menu')
        <div class="row">
            <div class="col-6">
                <h1>รายละเอียดคนไข้</h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>id: {{ $patient->id }}</td>
                        </tr>
                        <tr>
                            <td>HN: {{ $patient->hn}}</td>
                        </tr>
                        <tr>
                            <td>ชื่อ: {{ $patient->full_name}}</td>
                        </tr>
                        <tr>
                            <td>เพศ: {{ $patient->gender}}</td>
                        </tr>
                        <tr>
                            <td>วันเดือนปีเกิด: {{ $patient->dob}}</td>
                        </tr>
                        <tr>
                            <td>โทรศัพท์: {{ $patient->phone}}</td>
                        </tr>
                        <tr>
                            <td><a href=" {{ route('patient')}} "><button type="button"
                                        class="btn btn-primary">Back</button></a></td>
                        </tr>
                    </tbody>
                </table>
                @include('partials.footer')
            </div>
        </div>
    </div>
@endsection

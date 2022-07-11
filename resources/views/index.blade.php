@extends('app')

@section('title', 'home')

@section('content')
<body>
    <div class="container">

        <h1>รายการจองของฉัน</h1>

        @if(session('feedback'))
        <div class="alert alert-success" role="alert">{{ session('feedback') }}</div>
        @endif

        <a class="btn btn-primary" role="button" href="booking">จองเตียง</a>
        <a class="btn btn-primary" role="button" href="room">ห้อง</a>
        <a class="btn btn-primary" role="button" href="clinic">คลินิก</a>
        <a class="btn btn-primary" role="button" href="procedure">หัตถการ</a>
        <a class="btn btn-primary" role="button" href="bed">เตียง</a>




    </div>
</body>
</html>
@endsection

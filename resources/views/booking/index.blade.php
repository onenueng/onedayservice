@extends('app')

@section('title','booking')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>รายละเอียดการจอง</h1>

            @if(session('feedback'))
                <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
            @endif

            <div class="row">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" role="button" href="{{ route('booking.create') }}">จองเตียง</a>
                </div>

            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">วันที่</th>
                        <!-- <th scope="col">วันที่สิ้นสุด</th> -->
                        <th scope="col">เวลา</th>
                        <th scope="col">เตียง</th>
                        <th scope="col">ห้อง</th>
                        <th scope="col">คลินิก</th>
                        <th scope="col">หัตถการ</th>
                        <th scope="col">HN</th>
                        <th scope="col">Name</th>

                        <th scope="col">Edit</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <th scope="row"> {{ $booking->id }}</th>
                        <td>{{ $booking->date_label }}</td>
                        <!-- <td>{{ $booking->datetime_stop }}</td> -->
                        <td>{{ $booking->time_label }}</td>
                        <td>{{ $booking->bed_id }}</td>
                        <td>{{ $booking->room->name_short }}</td>
                        <td>{{ $booking->clinic->name }}</td>
                        <td>{{ $booking->procedure->name}}</td>
                        <td>{{ $booking->patient_id }}</td>
                        <td>{{ $booking->patient->full_name }}</td>
                        <td>
                            <a href="{{ route('booking.edit', $booking) }}"><button type="button" class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('booking.destroy', $booking) }}" method="post">
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
</div>
@endsection

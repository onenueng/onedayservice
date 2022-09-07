<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>One Day Service : information</title>
    
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   

    <div class="container">
    <h1>One Day Service : ข้อมูลการจองเตียง</h1>
        @if(session('feedback'))
            <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
        @endif

    <div class="col-md-6 pull-right"><h6>คุณ {{ Auth::user()->full_name }}</h6></div>


        <div class="row">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" role="button" href="{{ route('booking.create') }}">จองเตียง</a>
            </div>
        </div>
        <form action="">
            <div class="form-group row">
                <div class="col col-sm-4">
                    <label for="clinic_name">คลินิก</label>
                    <select id="clinic_name" class="form-control">
                        <option selected>เลือกคลินิก</option>
                        @foreach ($clinics as $clinic)
                                <option value="{{ $clinic->id  }}" {{ old('clinic_id', $clinic ?? null) == $clinic->id ? 'selected' : '' }}> {{ $clinic->name }}</option>
                        @endforeach 
                        </option>
                    </select>
                </div>
                <div class="col col-sm-4">
                    <label for="datetime_start" class="form-label"> วันที่เริ่มต้น</label>
                    <input type="date" class="form-control" name="datetime_start" id="datetime_start" value="{{ old('datetime_start') }}" placeholder="กรุณากรอกวันที่" required>
                </div>
                <div class="col col-sm-4">
                    <label for="datetime_stop" class="form-label"> วันที่สิ้นสุด</label>
                    <input type="date" class="form-control" name="datetime_stop" id="datetime_stop" value="{{ old('datetime_stop') }}" placeholder="กรุณากรอกวันที่" required>
                </div>
            </div>
            <input type="submit" value ="search" class="btn btn-primary">
        </form>
    </div>

    <div class="container">
        <table class="table table-striped mt-3">
            <tr class="text-center">
                <th rowspan="2">#</th>
                <th rowspan="2">คลินิก</th>
                <th rowspan="2">วัน</th>
                <th rowspan="2">วันที่</th>
                <th colspan="2"> เตียง 1</th>
                <th colspan="2"> เตียง 2 </th>
                <th colspan="2"> เตียง 3 </th>
                <th colspan="2"> เตียง 4 </th>
            </tr>
            <tr class="text-center">
                <th>เช้า</th>
                <th>บ่าย </th>
                <th>เช้า </th>
                <th>บ่าย </th>
                <th>เช้า</th>
                <th>บ่าย </th>
                <th>เช้า </th>
                <th>บ่าย </th>
            </tr>
            <tbody>
            @foreach($bookings as $booking)
                <tr class="text-center">
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->clinic->name }}</td>
                    <td>{{ $booking->week_day }}</td>
                    <td>{{ $booking->datetime_start }}</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>

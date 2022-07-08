<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bed-{{ $booking->id }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="margin-top: 20px;" >
        <h1>Booking - Edit</h1>

        @if(session('feedback'))
        <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('booking.update', $booking) }}" method = "post" class="row g-3">
        @csrf
        @method('patch')


        <div class="mb-3">
            <label for="datetime_start" class="form-label"> วันที่</label>
            <input type="date" class="form-control" name="datetime_start" id="datetime_start" value="{{ old('datetime_start') }}" placeholder="กรุณากรอกวันที่" required>
        </div>
        <div class="form-check">
            <label for="time" class="form-label">เวลา</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="time" id="time1" {{ old('time') == 'morning' ? 'checked' : '' }} value="morning">
            <label class="form-check-label" for="time1" >เช้า</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"  name="time" id="time2" {{ old('time') == 'afternoon' ? 'checked' : '' }} value="afternoon">
            <label class="form-check-label" for="time2">บ่าย</label>
        </div>
        <div class="mb-3" >
            <label for="bed_id" class="form-label">เตียง</label>
            <select name="bed_id" id="bed_id" class="form-select">
                <option selected>--กรุณาเลือกเตียง--</option>
                @foreach ($beds as $bed)
                <option value="{{ $bed->id  }}" {{ old('bed_id') == $bed->id ? 'selected' : '' }}> {{ $bed->room->name_short.'bed no' . $bed->no .' เตียง '.$bed->type }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3" >
            <label for="procedure_id" class="form-label">หัตถการ</label>
            <select name="procedure_id" id="procedure_id" class="form-select">
                <option selected>--กรุณาเลือกหัตถการ--</option>
                @foreach ($procedures as $procedure)
                <option value="{{  $procedure->id  }}" {{ old('procedure_id') == $procedure->id ? 'selected' : '' }}> {{ $procedure->clinic->name. ' '. $procedure->name }}</option>
                @endforeach
            </select>
        </div>

            <input type="submit" value ="submit" class="btn btn-primary">
        </form>

    </div>

</body>
</html>

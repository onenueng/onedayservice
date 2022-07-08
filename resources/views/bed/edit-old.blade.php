<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bed-{{ $bed->id }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Bed</h1>

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



        <form action="{{ route('bed.update', $bed) }}" method="post">
            @method('patch')
            @csrf

         <div class="mb-3 col-sm-4">
            <label for="no" class="form-label"> หมายเลขเตียง</label>
            <input type="text" class="form-control" name="no" id="no" value="{{ old('no', $bed) }}" placeholder="กรุณากรอกหมายเลขเตียง">
        </div>
        <div class="mb-3 col-sm-4">
            <label for="type" class="form-label"> ชนิดของเตียง</label>
            <select name="type" id="type" class="form-select">
                <option selected value ="">--กรุณาเลือกชนิดของเตียง--</option>
                <option value="large" {{ old('type', $bed) == 'large'? 'selected' : '' }}>Large</option>
                <option value="small" {{ old('type', $bed) == 'small' ? 'selected' : '' }}>Small</option>
                <option value="sofa" {{ old('type', $bed) == 'sofa' ? 'selected' : '' }}>Sofa</option>
            </select>

        </div>
        <div class="mb-3 col-sm-4">
            <label for="room_id" class="form-label"> ห้อง</label>
            <select name="room_id" id="room_id" class="form-select">
                <option selected>--กรุณาเลือกห้อง--</option>
                @foreach ( $rooms as $room )
                <option value="{{ $room->id }}" {{ old('room_id', $bed) == $room->id  ? 'selected' : '' }}> {{ $room->name_short}}</option>
                @endforeach
            </select>

        </div>

        <div class="mb-3 col-sm-4">
            <input type="submit" value ="submit" class="btn btn-primary">
        </div>

        </form>
    </div>
    {{-- {{ $rooms }} --}}
</body>
</html>

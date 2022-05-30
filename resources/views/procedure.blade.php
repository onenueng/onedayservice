<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>procedure</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Procedure</h1>

        @if(session('feedback'))
        <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
        @endif


        <form action="/procedure" method="post">
         @csrf

         <div class="mb-3 col-sm-4">
            <label for="name" class="form-label"> ชื่อหัตถการ</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="กรุณากรอกชื่อ" required>
        </div>
        <div class="mb-3 col-sm-4" >
            <label for="clinic_id" class="form-label">คลินิก</label>
            <select name="clinic_id" id="clinic_id" class="form-select">
                <option selected>--กรุณาเลือกคลินิก--</option>
                @foreach ($clinics as $clinic)
                <option value="{{ $clinic->id  }}" {{ old('clinic_id') == $clinic->id  ? 'selected' : '' }}> {{ $clinic->name}}</option>
                @endforeach


            </select>
        </div>
        <div class="mb-3 col-sm-4">
            <input type="submit" value ="submit" class="btn btn-primary">
        </div>
        </form>
    </div>
    {{-- {{ $clinics}} --}}
</body>
</html>

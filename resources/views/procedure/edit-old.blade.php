<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Procedure :  {{ $procedure->name }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Procedure : Edit</h1>

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


        <form action="{{ route('procedure.update', $procedure) }}" method="post">
            @csrf
            @method('patch')

         <div class="mb-3 col-sm-4">
            <label for="name" class="form-label"> ชื่อหัตถการ</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $procedure) }}" placeholder="กรุณากรอกชื่อ">
        </div>
        <div class="mb-3 col-sm-4" >
            <label for="clinic_id" class="form-label">คลินิก</label>
            <select name="clinic_id" id="clinic_id" class="form-select">
                <option selected value="">--กรุณาเลือกคลินิก--</option>
                @foreach ($clinics as $clinic)
                <option value="{{ $clinic->id  }}" {{ old('clinic_id',$procedure) == $clinic->id  ? 'selected' : '' }}> {{ $clinic->name}}</option>
                @endforeach
                <option value="100">foo clinic</option>

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

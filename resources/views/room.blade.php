<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Room</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <h1>Room</h1>

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

    <form action="/room" method="post">
    @csrf
        <div class="mb-3 col-sm-4">
            <label for="name_short" class="form-label"> ชื่อย่อ</label>
            <input type="text" class="form-control" name="name_short" id="name_short" value="{{ old('name_short') }}" placeholder="กรุณากรอกชื่อย่อ">
        </div>
        <div class="mb-3 col-sm-4">
            <label for="name" class="form-label"> ชื่อห้อง</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="กรุณากรอกชื่อห้อง">
        </div>
        <div class="mb-3 col-sm-4">
            <input type="submit" value ="submit" class="btn btn-primary">
        </div>
    </form>
    </div>
</body>
</html>

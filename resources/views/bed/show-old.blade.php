<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed-{{ $bed->id }} </title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
    <h1>รายละเอียด bed</h1>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>id: {{ $bed->id }}</td>
            </tr>
            <tr>
                <td>no: {{ $bed->no }}</td>
            </tr>
            <tr>
                <td>type: {{ $bed->type }}</td>
            </tr>
            <tr>
                <td>room: {{ $bed->room->name_short }}</td>
            </tr>
            <tr>
                <td><a href="{{ route('bed') }}"><button type="button" class="btn btn-primary">back</button></a></td>
            </tr>
        </tbody>
        </div>
    </div>
</div>
</body>
</html>

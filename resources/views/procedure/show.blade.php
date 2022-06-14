<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Procedure :  {{ $procedure->name }}</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
        <h1>รายละเอียด Procedure</h1>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>id: {{ $procedure->id }}</td>
                </tr>
                <tr>
                    <td>code: {{ $procedure->code }}</td>
                </tr>
                <tr>
                    <td>name: {{ $procedure->name }}</td>
                </tr>
                <tr>
                    <td><a href="{{ route('procedure') }}"><button type="button" class="btn btn-primary">back</button></a></td>
                </tr>
            </tbody>
            </div>
        </div>
    </div>
</body>
</html>

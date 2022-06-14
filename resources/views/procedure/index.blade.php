<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>รายละเอียด Procedure</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">clinic id</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Del</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($procedures as $procedure)
                        <tr>
                            <td>{{ $procedure->id }}</td>
                            <td>{{ $procedure->name}}</td>
                            <td>{{ $procedure->clinic_id}}</td>
                            <td><a href="{{ route('procedure.show', $procedure) }}">
                                    <button type="button" class="btn btn-primary">Show</button>
                                </a>
                            </td>
                            <td><a href="{{ route('procedure.show', $procedure) }}">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                            </td>
                            <td><a href="{{ route('procedure.show', $procedure) }}">
                                    <button type="button" class="btn btn-primary">Del</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </div>
</body>

</html>

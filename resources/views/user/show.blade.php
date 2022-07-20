<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h6>User:</h6>
            <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">sap_id</th>
                        <th scope="col">name</th>
                        <th scope="col">full_name</th>
                        <th scope="col">status</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->sap_id }}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->full_name}}</td>
                            <td>
                                <button type="button" class="btn btn-primary">Edit</button>
                                
                            </td>
                            <!-- <td><a href="{{ route('user.show', $procedure) }}">
                                    <button type="button" class="btn btn-primary">Show</button>
                                </a>
                            </td>
                            <td><a href="{{ route('procedure.edit', $procedure) }}">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                            </td> -->
                            <td>
                                <form action="{{ route('procedure.destroy', $procedure) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Del</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>status</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>
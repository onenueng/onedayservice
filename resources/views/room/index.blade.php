<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Room</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>รายละเอียด Room</h1>

                @if(session('feedback'))
                    <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name short</th>
                            <th scope="col">name</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Del</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room )
                        <tr>
                            <td>{{ $room->id }}</td>
                            <td>{{ $room->name_short}}</td>
                            <td>{{ $room->name}}</td>
                            <td><a href=" {{ route('room.show', $room)}} "> <button class="btn btn-primary"
                                        type="button">Show</button> </a></td>
                            <td><a href=" {{ route('room.show', $room)}} "> <button class="btn btn-primary"
                                        type="button">Edit</button> </a></td>
                            <td>
                                <form action="{{ route('room.destroy', $room)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary"
                                    type="submit">Del</button> </a></td>
                                </form>

                                {{-- <a href=" {{ route('room.show', $room)}} "> <button class="btn btn-primary"
                                        type="button">Del</button> </a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </div>
</body>

</html>

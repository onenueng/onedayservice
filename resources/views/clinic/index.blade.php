<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Clinic</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>รายละเอียด Clinic</h1>

                @if(session('feedback'))
                    <div class="alert alert-danger" role="alert">{{ session('feedback') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Del</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clinics as $clinic)
                        <tr>
                            <th scope="row"> {{ $clinic->id }}</th>
                            <td>{{ $clinic->code }}</td>
                            <td>{{ $clinic->name }}</td>
                            <td><a href="{{ route('clinic.show', $clinic) }}">
                                <button type="button" class="btn btn-primary">show</button>
                                </a>
                            </td>
                            <td><a href="{{ route('clinic.show', $clinic) }}">
                                <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('clinic.destroy', $clinic) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Del</button>
                                </form>
                                {{-- <a href="{{ route('clinic.destroy', $clinic) }}"><button type="submit" class="btn btn-primary">Del</button>
                                </a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

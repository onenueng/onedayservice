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
    <title>Patient</title>
</head>

<body>
    <div class="container">
    <div class="row">
        <h6>Patients:</h6>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">hn</th>
                    <th scope="col">full_name</th>
                    <th scope="col">gender</th>
                    <th scope="col">dob</th>
                    <th scope="col">phone</th>
                    <th scope="col">Show</th>
                    <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->hn }}</td>
                        <td>{{ $patient->full_name}}</td>
                        <td>{{ $patient->gender}}</td>
                        <td>{{ $patient->dob}}</td>
                        <td>{{ $patient->phone}}</td>
                        <td>
                            <a href="  "> <button class="btn btn-primary"
                                type="button">Show</button> </a>

                        </td>

                        <td>
                            <button type="button" class="btn btn-primary">Del</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @include('partials.footer')
    </div>
</div>

</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </script>
    <title>User - {{ $user->id }}</title>
</head>

<body>
    <div class="container">
        @include('partials.menu')
        <div class="row">
            <div class="col-6">
                <h1>รายละเอียด User</h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>id: {{ $user->id }}</td>
                        </tr>
                        <tr>
                            <td>sap_id: {{ $user->sap_id}}</td>
                        </tr>
                        <tr>
                            <td>name: {{ $user->name}}</td>
                        </tr>
                        <tr>
                            <td>full_name: {{ $user->full_name}}</td>
                        </tr>
                        <tr>
                            <td><a href=" {{ route('user')}} "><button type="button"
                                        class="btn btn-primary">Back</button></a></td>
                        </tr>
                    </tbody>
                </table>
                @include('partials.footer')
            </div>
        </div>
    </div>
</body>

</html>

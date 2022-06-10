<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic</title>
</head>
<body>
    @foreach($clinics as $clinic)
        <p>id: {{ $clinic->id }}</p>
        <p>code: {{ $clinic->code }}</p>
        <p>name: {{ $clinic->name }}</p>
        <a href="{{ route('clinic.show', $clinic) }}">show</a>
        <hr>
    @endforeach
</body>
</html>
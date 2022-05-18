<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>รายการจองของฉัน</h1>

    @if(session('feedback'))
    <div>{{ session('feedback') }}</div>
    @endif
    <a href="booking">จองเตียง</a>


</body>
</html></html>
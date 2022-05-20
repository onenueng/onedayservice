<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic</title>
</head>
<body>
    <form action="/clinic" method="post">
    @csrf
        <div class="mb-3">
            <label for="code" class="form-label"> รหัส</label>
            <input type="text" class="form-control" name="code" id="code" value="" placeholder="กรุณากรอกรหัส" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label"> ชื่อคลินิก</label>
            <input type="text" class="form-control" name="name" id="name" value="" placeholder="กรุณากรอกชื่อคลินิก" required>
        </div>
        <div>
            <input type="submit" value ="submit" class="btn btn-primary">
        </div>
    </form>
</body>
</html>
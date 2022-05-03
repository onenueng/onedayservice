<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>booking</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form action="/booking" method = "post">
        @csrf
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">วันที่</label>
        <input type="date" class="form-control" name="datetime_start" id="formGroupExampleInput" placeholder="Example input placeholder" required> 
        </div>
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">เวลา</label>
        <input class="form-check-input" type="radio" name="times" id="flexRadioDefault1" value ="m">
            <label class="form-check-label" for="flexRadioDefault1">
            เช้า
            </label>
        <input class="form-check-input" type="radio" name="times" id="flexRadioDefault1" value ="a">
            <label class="form-check-label" for="flexRadioDefault1">
            บ่าย
            </label>
        </div>
        <input type="submit" value ="submit" class="btn btn-primary">
    </form>
    
</body>
</html>
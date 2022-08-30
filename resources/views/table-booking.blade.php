<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>One Day Service : Time Table</title>
    
</head>
<body>
    @include('partials.menu')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <h1>One Day Service</h1>

    <div class="container">
        <div class="row">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" role="button" href="{{ route('booking.create') }}">จองเตียง</a>
            </div>
        </div>
        <form action="">
            <div class="form-group row">
                <div class="col col-sm-4">
                    <label for="clinic_name">คลินิก</label>
                    <select id="clinic_name" class="form-control">
                      <option selected>เลือกคลินิก</option>
                      <option>ต่อมไร้ท่อ</option>
                      <option>โรคผิวหนัง</option>
                      <option>โรคภูมิแพ้</option>
                      <option>โรคไต</option>
                    </select>
                </div>
                <div class="col col-sm-4">
                    <label for="datetime_start" class="form-label"> วันที่เริ่มต้น</label>
                    <input type="date" class="form-control" name="datetime_start" id="datetime_start"  placeholder="กรุณากรอกวันที่" required>
                </div>
                <div class="col col-sm-4">
                    <label for="datetime_stop" class="form-label"> วันที่สิ้นสุด</label>
                    <input type="date" class="form-control" name="datetime_stop" id="datetime_stop"  placeholder="กรุณากรอกวันที่" required>
                </div>
                
            </div>
            <input type="submit" value ="submit" class="btn btn-primary">
        </form>
    </div>

    <div class="container">
        <table class="table table-striped mt-3">
            <tr class="text-center">
                <th rowspan="2">คลินิก</th>
                <th rowspan="2">วัน</th>
                <th rowspan="2">วันที่</th>
                <th colspan="2"> เตียง 1</th>
                <th colspan="2"> เตียง 2 </th>
                <th colspan="2"> เตียง 3 </th>
                <th colspan="2"> เตียง 4 </th>
            </tr>
            <tr class="text-center">
                <th>เช้า</th>
                <th>บ่าย </th>
                <th>เช้า </th>
                <th>บ่าย </th>
                <th>เช้า</th>
                <th>บ่าย </th>
                <th>เช้า </th>
                <th>บ่าย </th>
            </tr>
            <tbody>
                <tr class="text-center">
                    <td>ต่อมไร้ท่อ</td>
                    <td>ศุกร์</td>
                    <td>19/08/2022</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                </tr>
                <tr class="text-center">
                    <td>โรคผิวหนัง</td>
                    <td>จันทร์</td>
                    <td>22/08/2022</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr class="text-center">
                    <td>โรคภูมิแพ้</td>
                    <td>พุธ</td>
                    <td>24/08/2022</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

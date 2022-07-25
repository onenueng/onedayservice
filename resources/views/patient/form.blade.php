@csrf

<div class="mb-3 col-sm-4">
    <label for="hn" class="form-label"> hn</label>
    <input type="text" class="form-control" name="hn" id="hn" value="{{ old('hn', $patient ?? null) }}" placeholder="กรุณากรอก HN" >
</div>
<div class="mb-3 col-sm-4">
    <label for="full_name" class="form-label"> full_name</label>
    <input type="text" class="form-control" name="full_name" id="full_name" value="{{ old('full_name', $patient ?? null) }}" placeholder="กรุณากรอกชื่อ-สุกล" >
</div>
<div class="mb-3 col-sm-4">
    <label for="gender" class="form-label"> เพศ</label>
    <input type="text" class="form-control" name="gender" id="gender" value="{{ old('gender', $patient ?? null) }}" placeholder="กรุณากรอกเพศ" >
</div>
<div class="mb-3 col-sm-4">
    <label for="dob" class="form-label"> วันเดือนปีเกิด</label>
    <input type="text" class="form-control" name="dob" id="dob" value="{{ old('dob', $patient ?? null) }}" placeholder="กรุณากรอกวันเดือนปีเกิด" >
</div>
<div class="mb-3 col-sm-4">
    <label for="phone" class="form-label"> โทรศัพท์</label>
    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $patient ?? null) }}" placeholder="กรุณากรอกวันเดือนปีเกิด" >
</div>
<div class="mb-3 col-sm-4">
    <input type="submit" value ="submit" class="btn btn-primary">
    <td><a href="{{ route('patient') }}"><button type="button" class="btn btn-primary">back</button></a></td>
</div>

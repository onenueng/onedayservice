@csrf

<div class="mb-3 col-sm-4">
    <label for="code" class="form-label"> sap_id</label>
    <input type="text" class="form-control" name="sap_id" id="sap_id" value="{{ old('sap_id', $user ?? null) }}" placeholder="กรุณากรอก sap_id" >
</div>
<div class="mb-3 col-sm-4">
    <label for="user_name" class="form-label"> user_name</label>
    <input type="text" class="form-control" name="username" id="username" value="{{ old('username', $user ?? null) }}" placeholder="กรุณากรอก ชื่อ.นามสกุล 3 คัว" >
</div>
<div class="mb-3 col-sm-4">
    <label for="name" class="form-label"> full_name</label>
    <input type="text" class="form-control" name="full_name" id="full_name" value="{{ old('full_name', $user ?? null) }}" placeholder="กรุณากรอกชื่อ-นามสกุล" >
</div>
<div class="mb-3 col-sm-4">
    <label for="name" class="form-label"> admin</label>
    <input type="text" class="form-control" name="admin" id="admin" value="{{ old('admin', $user ?? null) }}" placeholder="admin" >
</div>
<div class="mb-3 col-sm-4">
    <input type="submit" value ="submit" class="btn btn-primary">
    <td><a href="{{ route('user') }}"><button type="button" class="btn btn-primary">back</button></a></td>
</div>

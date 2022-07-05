@csrf

<div class="mb-3 col-sm-4">
    <label for="code" class="form-label"> รหัส</label>
    <input type="text" class="form-control" name="code" id="code" value="{{ old('code', $clinic ?? null) }}" placeholder="กรุณากรอกรหัส" >
</div>
<div class="mb-3 col-sm-4">
    <label for="name" class="form-label"> ชื่อคลินิก</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $clinic ?? null) }}" placeholder="กรุณากรอกชื่อคลินิก" >
</div>
<div class="mb-3 col-sm-4">
    <input type="submit" value ="submit" class="btn btn-primary">
</div>
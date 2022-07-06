@csrf
<div class="mb-3 col-sm-4">
    <label for="name_short" class="form-label"> ชื่อย่อ</label>
    <input type="text" class="form-control" name="name_short" id="name_short" value="{{ old('name_short',$room ?? null) }}" placeholder="กรุณากรอกชื่อย่อ">
</div>
<div class="mb-3 col-sm-4">
    <label for="name" class="form-label"> ชื่อห้อง</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name',$room ?? null) }}" placeholder="กรุณากรอกชื่อห้อง">
</div>
<div class="mb-3 col-sm-4">
    <input type="submit" value ="submit" class="btn btn-primary">
</div>

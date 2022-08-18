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
    <label for="active" class="form-label"> active</label>
    <select name="active" id="active" class="form-select">
        <option selected value ="">--กรุณาเลือก--</option>
        <option value="large" {{ old('active', $room ?? null) == '1'? 'selected' : '' }}>true</option>
        <option value="small" {{ old('active', $room ?? null) == '0' ? 'selected' : '' }}>false</option>
    </select>
</div>
<div class="mb-3 col-sm-4">
    <input type="submit" value ="submit" class="btn btn-primary">
    <button type="reset" class="btn btn-primary">Cancel</button></td>
    <td><a href=" {{ route('room')}} "><button type="button"
        class="btn btn-primary">Back</button></a></td>
</div>

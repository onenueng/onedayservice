@csrf

<div class="mb-3 col-sm-4">
    <label for="code" class="form-label"> รหัส</label>
    <input type="text" class="form-control" name="code" id="code" value="{{ old('code', $clinic ?? null) }}" placeholder="กรุณากรอกรหัส" >
</div>
<div class="mb-3 col-sm-4">
    <label for="name" class="form-label"> ชื่อคลินิก</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $clinic ?? null) }}" placeholder="กรุณากรอกชื่อคลินิก" >
</div>
{{-- <div class="mb-3 col-sm-4">
    <label for="active" class="form-label"> Active</label>
    <input type="text" class="form-control" name="active" id="active" value="{{ old('active', $clinic ?? null) }}" placeholder="active" >

</div> --}}

<div class="mb-3 col-sm-4">
    <label for="active" class="form-label"> active</label>
    <select name="active" id="active" class="form-select">
        <option selected value ="">--กรุณาเลือก--</option>
        <option value="large" {{ old('active', $clinic ?? null) == '1'? 'selected' : '' }}>true</option>
        <option value="small" {{ old('active', $clinic ?? null) == '0' ? 'selected' : '' }}>false</option>

    </select>

</div>


<div class="mb-3 col-sm-4">
    <input type="submit" value ="submit" class="btn btn-primary">
    <td><a href="{{ route('clinic') }}"><button type="button" class="btn btn-primary">back</button></a></td>
</div>

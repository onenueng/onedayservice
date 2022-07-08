    @csrf

    <div class="mb-3 col-sm-4">
        <label for="name" class="form-label"> ชื่อหัตถการ</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $procedure ?? null) }}" placeholder="กรุณากรอกชื่อ">
    </div>
    <div class="mb-3 col-sm-4" >
        <label for="clinic_id" class="form-label">คลินิก</label>
        <select name="clinic_id" id="clinic_id" class="form-select">
            <option selected value="">--กรุณาเลือกคลินิก--</option>
            @foreach ($clinics as $clinic)
            <option value="{{ $clinic->id  }}" {{ old('clinic_id',$procedure ?? null) == $clinic->id  ? 'selected' : '' }}> {{ $clinic->name}}</option>
            @endforeach
            <option value="100">foo clinic</option>

        </select>
    </div>
    <div class="mb-3 col-sm-4">
        <input type="submit" value ="submit" class="btn btn-primary">
    </div>

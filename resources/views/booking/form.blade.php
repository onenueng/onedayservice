    @csrf

    <div class="mb-3">
        <label for="datetime_start" class="form-label"> วันที่</label>
        <input type="date" class="form-control" name="datetime_start" id="datetime_start" value="{{ old('datetime_start', $booking ?? null) }}" placeholder="กรุณากรอกวันที่" required>
    </div>
    <div class="form-check">
        <label for="time" class="form-label">เวลา</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="time" id="time1" {{ old('time',$booking ?? null) == 'morning' ? 'checked' : '' }} value="morning">
        <label class="form-check-label" for="time1" >เช้า</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio"  name="time" id="time2" {{ old('time',$booking ?? null) == 'afternoon' ? 'checked' : '' }} value="afternoon">
        <label class="form-check-label" for="time2">บ่าย</label>
    </div>
    <div class="mb-3" >
        <label for="bed_id" class="form-label">เตียง</label>
        <select name="bed_id" id="bed_id" class="form-select">
            <option selected>--กรุณาเลือกเตียง--</option>
            @foreach ($beds as $bed)
            <option value="{{ $bed->id  }}" {{ old('bed_id', $booking ?? null) == $bed->id ? 'selected' : '' }}> {{ $bed->room->name_short.'bed no' . $bed->no .' เตียง '.$bed->type }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3" >
        <label for="procedure_id" class="form-label">หัตถการ</label>
        <select name="procedure_id" id="procedure_id" class="form-select">
            <option selected>--กรุณาเลือกหัตถการ--</option>
            @foreach ($procedures as $procedure)
            <option value="{{  $procedure->id  }}" {{ old('procedure_id', $booking ?? null) == $procedure->id ? 'selected' : '' }}> {{ $procedure->clinic->name. ' '. $procedure->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col-sm-4">
        <input type="submit" value ="submit" class="btn btn-primary">
    </div>


    @csrf

     <div class="mb-3 col-sm-4">
        <label for="no" class="form-label"> หมายเลขเตียง</label>
        <input type="text" class="form-control" name="no" id="no" value="{{ old('no', $bed ?? null) }}" placeholder="กรุณากรอกหมายเลขเตียง">
    </div>
    <div class="mb-3 col-sm-4">
        <label for="type" class="form-label"> ชนิดของเตียง</label>
        <select name="type" id="type" class="form-select">
            <option selected value ="">--กรุณาเลือกชนิดของเตียง--</option>
            <option value="large" {{ old('type', $bed ?? null) == 'large'? 'selected' : '' }}>Large</option>
            <option value="small" {{ old('type', $bed ?? null) == 'small' ? 'selected' : '' }}>Small</option>
            <option value="sofa" {{ old('type', $bed ?? null) == 'sofa' ? 'selected' : '' }}>Sofa</option>
        </select>

    </div>
    <div class="mb-3 col-sm-4">
        <label for="room_id" class="form-label"> ห้อง</label>
        <select name="room_id" id="room_id" class="form-select">
            <option selected>--กรุณาเลือกห้อง--</option>
            @foreach ( $rooms as $room )
            <option value="{{ $room->id }}" {{ old('room_id', $bed ?? null) == $room->id  ? 'selected' : '' }}> {{ $room->name_short}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col-sm-4">
        <label for="active" class="form-label"> active</label>
        <select name="active" id="active" class="form-select">
            <option selected value ="">--กรุณาเลือก--</option>
            <option value="large" {{ old('active', $bed ?? null) == '1'? 'selected' : '' }}>true</option>
            <option value="small" {{ old('active', $bed ?? null) == '0' ? 'selected' : '' }}>false</option>
        </select>
    </div>

    <div class="mb-3 col-sm-4">
        <tr>
        <td><input type="submit" value ="submit" class="btn btn-primary"></td>
        <button type="reset" class="btn btn-primary">Cancel</button></td>
        <td><a href="{{ route('bed') }}"><button type="button" class="btn btn-primary">back</button></a></td>
        </tr>
    </div>

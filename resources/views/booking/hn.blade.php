<form method="POST" action="{{ route('search-hn') }}">
    @csrf
    <div class="row g-3">
        <div class="col">
            {{-- <label for="hn">hn : </label> --}}
            <input name="hn" type="number" id="hn" class="form-control" placeholder="hn"/>

        </div>
        <div class="col">
            <input type="submit" value="search" class="btn btn-outline-primary" />
        </div>
    </div>
</form>

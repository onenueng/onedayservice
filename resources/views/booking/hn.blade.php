<form method="POST" action="{{ route('search-hn') }}">
    @csrf
    <div>
        <label>hn : </label>
        <input name="hn" type="number" />

    </div>

    <input type="submit" value="search" />
</form>
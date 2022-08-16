 <!-- nav menu -->
 <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">One Day Service</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('booking') }}">จองเตียง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('room') }}">ห้อง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('clinic') }}">คลินิก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('procedure') }}">หัตถการ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('bed') }}">เตียง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user') }}">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('patient') }}">Patient</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- <li >คุณ {{ $user->full_name}} </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </ul>
      </div>
  </nav>
  <!--end nav bar menu-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
</head>
<body>
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
                <a class="nav-link active" aria-current="page" href="booking">จองเตียง</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="room">ห้อง</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clinic">คลินิก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="procedure">หัตถการ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bed">เตียง</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!--end nav bar menu-->

    @yield('content')
    <!-- footer -->
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
          <h5 class="card-title">ภาควิชากุมารเวชศาตร์ คณะแพทยศาสตร์ศิริราชพยาบาล
            </h5>
          <p class="card-text">เลขที่ 2 ถนนวังหลัง แขวงศิริราช เขตบางกอกน้อย กรุงเทพมหานคร 10700 โทร. 02-419-5962</p>

          <a href= "mailto: ped.siriraj@gmail.com" class="btn btn-primary">ped.siriraj@gmail.com</a>
        </div>
      </div>
    <!--end footer -->
</body>
</html>

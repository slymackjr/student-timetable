<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <title>Student Timetable Management</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="{{route('home-staff')}}">Student TimeTable</a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              {{-- <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
              <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button> --}}
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{session('name')}}<i class="bi bi-person-fill"></i></a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{route('profile-staff')}}">{{session('email')}}</a></li>
                <li>
                  <a class="dropdown-item" href="{{route('logout-staff')}}">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">CORE</div>
            </li>
            <li>
              <a href="{{route('home-staff')}}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">Interface</div>
            </li>
            <li>
              <a href="{{route('classes-staff')}}" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-book"></i></span>
                <span>Classes Timetable</span>
              </a>
            </li>
            <li>
              <a href="{{route('notices')}}" class="nav-link px-3">
                <span class="me-2"> <i class="bi bi-file-earmark-text"></i></span>
                <span>Notices</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="{{route('profile-staff')}}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-person-fill"></i></span>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <a href="{{route('logout-staff')}}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-box-arrow-right"></i></span>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>
              @if(session('course'))
                {{ session('course') }}
             @endif
             Classes TimeTable
            </h4>
          </div>
        </div>
        <div class="pb-3">
          <a href="{{route('classes-staff')}}">
            <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-arrow-left me-2"></i>Courses</button>
          </a>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-3 col-md-4 mb-3 max-w-280">
              <div class="card bg-primary text-white h-100">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center">
                      <i class="bi bi-emoji-laughing display-4 mb-3"></i> <!-- Beginner icon -->
                      <h5 class="card-title h6">YEAR 1</h5>
                  </div>
                  <a href="{{ route('year-group', ['year' => '1']) }}" class="nav-link text-white">
                      <div class="card-footer d-flex">
                          View Details
                          <span class="ms-auto">
                              <i class="bi bi-chevron-right"></i>
                          </span>
                      </div>
                  </a>
              </div>
          </div>
      
          <div class="col-lg-3 col-md-4 mb-3 max-w-280">
              <div class="card bg-success text-white h-100">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center">
                      <i class="bi bi-emoji-neutral display-4 mb-3"></i> <!-- Intermediate icon -->
                      <h5 class="card-title h6">YEAR 2</h5>
                  </div>
                  <a href="{{ route('year-group', ['year' => '2']) }}" class="nav-link text-white">
                      <div class="card-footer d-flex">
                          View Details
                          <span class="ms-auto">
                              <i class="bi bi-chevron-right"></i>
                          </span>
                      </div>
                  </a>
              </div>
          </div>
      
          <div class="col-lg-3 col-md-4 mb-3 max-w-280">
              <div class="card bg-danger text-white h-100">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center">
                      <i class="bi bi-emoji-smile display-4 mb-3"></i> <!-- Pro icon -->
                      <h5 class="card-title h6">YEAR 3</h5>
                  </div>
                  <a href="{{ route('year-group', ['year' => '3']) }}" class="nav-link text-white">
                      <div class="card-footer d-flex">
                          View Details
                          <span class="ms-auto">
                              <i class="bi bi-chevron-right"></i>
                          </span>
                      </div>
                  </a>
              </div>
          </div>
      </div>
      
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>

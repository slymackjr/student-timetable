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
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="{{route('home-student')}}">Student TimeTable</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
              <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i></a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{route('profile-student')}}">{{session('regno')}}</a></li>
                <li><a class="dropdown-item" href="{{route('logout-student')}}">Logout</a></li>
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
              <a href="{{route('home-student')}}" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">Timetables</div>
            </li>
            <li>
              <a href="{{route('week-classes')}}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-calendar-check"></i></span>
                <span>Class Timetable</span>
              </a>
            </li>
            {{-- <li>
              <a href="{{route('exam-sessions')}}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-calendar-check"></i></span>
                <span>Exam Timetable</span>
              </a>
            </li> --}}
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Details
              </div>
            </li>
            <li>
              <a href="{{route('profile-student')}}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-person-fill"></i></span>
                <span>Profile Details</span>
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
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-book text-white display-4 mb-3"></i>
                <h5 class="card-title">Class Timetable</h5>
              </div>
              <div class="card-footer d-flex">
                <a href="{{ route('week-classes') }}" class="nav-link text-white">
                  View Details
                </a>
                <span class="ms-auto">
                  <i class="bi bi-chevron-right text-white"></i>
                </span>
              </div>
            </div>
          </div>
                   
          {{-- <div class="col-md-4 mb-3">
            <div class="card bg-secondary text-white h-100">
              <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-calendar text-white display-4 mb-3"></i>
                <h5 class="card-title">Exam Timetable</h5>
              </div>
              <div class="card-footer d-flex">
                <a href="{{ route('exam-sessions') }}" class="nav-link text-white">
                  View Details
                </a>
                <span class="ms-auto">
                  <i class="bi bi-chevron-right text-white"></i>
                </span>
              </div>
            </div>
          </div> --}}
                    
          <div class="col-md-6 mb-3">
            <div class="card bg-warning text-white h-100">
              <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="bi bi-person text-white display-4 mb-3"></i>
                <h5 class="card-title">Personal Details</h5>
              </div>
              <div class="card-footer d-flex justify-content-between">
                <a href="#" class="nav-link text-white">
                  View Details
                </a>
                <span>
                  <i class="bi bi-chevron-right text-white"></i>
                </span>
              </div>
            </div>
          </div>              
          
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Classes Today {{$date}}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped"
                  >
                    <thead>
                      <tr>
                        <th>Module Code</th>
                        <th>Module Name</th>
                        <th>Starts</th>
                        <th>Ends</th>
                        <th>Venue</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($today)
                      @foreach ($today as $timetable)
                      <tr>
                        <td>{{$timetable->module_id}}</td>
                        <td>{{$timetable->module_name}}</td>
                        <td>{{$timetable->start_time}}</td>
                        <td>{{$timetable->end_time}}</td>
                        <td>{{$timetable->room_name}}</td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Exams Today Fri-05-Jan-2024
              </div>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped"
                  >
                    <thead>
                      <tr>
                        <th>Module Code</th>
                        <th>Module Name</th>
                        <th>Starts</th>
                        <th>Ends</th>
                        <th>Venue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>CSU07801</td>
                        <td>System Architect</td>
                        <td>12:00PM</td>
                        <td>2:00PM</td>
                        <td>MK5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
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

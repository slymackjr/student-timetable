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
              {{-- <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
              <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button> --}}
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{session('name')}}<i class="bi bi-person-fill"></i></a>
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
              <a href="{{route('home-student')}}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">Timetables</div>
            </li>
            <li>
              <a href="{{route('week-classes')}}" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-calendar-check"></i></span>
                <span>Class Timetable</span>
              </a>
            </li>
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
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Classes  Weekly
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div class="pb-3 d-flex justify-content-between">
                    <a href="{{route('get-pdf')}}">
                      <button type="button" name="cid" class="btn btn-outline-info"><i class="bi bi-plus me-2"></i>Export PDF</button>
                    </a>
                  </div>
                  <table class="table table-bordered text-center table-striped">
                    <thead>
                        <tr class="bg-light-gray">
                            <th class="text-uppercase">Time</th>
                            <th class="text-uppercase">Monday</th>
                            <th class="text-uppercase">Tuesday</th>
                            <th class="text-uppercase">Wednesday</th>
                            <th class="text-uppercase">Thursday</th>
                            <th class="text-uppercase">Friday</th>
                            <th class="text-uppercase">Saturday</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 7; $i <= 19; $i++)
                            <tr>
                                <td class="align-middle">{{ $i }}:00 - {{ $i + 1 }}:00</td>
                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'] as $day)
                                    <td>
                                        @foreach($classesData as $class)
                                            @php
                                                $classStartTime = strtotime($class->start_time);
                                                $classEndTime = strtotime($class->end_time);
                                                $startTimeInRange = ($classStartTime <= strtotime("$i:00:00") && $classEndTime > strtotime("$i:00:00"));
                                                $endTimeInRange = ($classStartTime < strtotime(($i + 1) . ":00:00") && $classEndTime >= strtotime(($i + 1) . ":00:00"));
                                            @endphp
                
                                            @if ($class->day_of_week == $day && ($startTimeInRange || $endTimeInRange))
                                                <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-primary font-size16 xs-font-size13">{{ $class->module_name }}</span>
                                                <div class="margin-10px-top font-size14">{{ $class->start_time->format('H:i A') }} - {{ $class->end_time->format('H:i A') }}</div>
                                                <div class="font-size13 text-light-gray">{{ $class->lecturer_name }}</div>
                                                <div class="font-size13 text-success">{{ $class->room_name }}</div>
                                            @endif
                                        @endforeach
                                    </td>
                                @endforeach
                            </tr>
                        @endfor
                    </tbody>
                  </table>            
                </div>
              </div>
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

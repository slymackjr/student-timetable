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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
             {{--  <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
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
            {{-- <li>
              <a href="{{route('exams-staff')}}" class="nav-link px-3">
                <span class="me-2"> <i class="bi bi-file-earmark-text"></i></span>
                <span>Exams Timetable</span>
              </a>
            </li> --}}
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
            <h4>Course 
              @if(session('course'))
              {{session('course')}} 
              @endif
              @if(session('year'))
              {{session('year')}} 
              @endif
              GROUP 
              @if(session('group'))
              {{session('group')}}
              @endif
               Classes TimeTable
            </h4>
            @if(!is_null(session('success')))  
            <!-- Alert to be displayed -->
            <p class="text-center alert alert-success" id="myAlert"><strong>{{session('success')}}</strong></p>

            <!-- Add this script at the end of the body tag -->
            <script>
                // Function to hide the alert after 2 seconds
                function hideAlert() {
                    var alertDiv = document.getElementById('myAlert');
                    alertDiv.style.display = 'none';
                }

                // Show the alert
                document.addEventListener('DOMContentLoaded', function () {
                    setTimeout(hideAlert, 2000);
                });
            </script>
            @endif
          </div>
        </div>
        <div class="row pb-5">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Classes TimeTable
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div class="pb-3">
                    <a href="{{route('year-group',['year' => session('year')])}}">
                      <button type="button" name="cid" class="btn btn-outline-danger"><i class="bi bi-arrow-left"></i>Groups</button>
                    </a>
                  </div>
                  <div class="pb-3">
                    <a href="{{route('add-session')}}">
                      <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
                    </a>
                    <a href="{{route('show-class-sessions')}}">
                      <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-calendar"></i>Class Sessions</button>
                    </a>
                  </div>
                  <table
                    id="example"
                    class="table table-striped data-table"
                  >
                    <thead>
                      <tr>
                        <th>Day</th>
                        <th>Time Start</th>
                        <th>Time End</th>
                        <th>Module Code</th>
                        <th>Module Name</th>
                        <th>Session Type</th>
                        <th>Venue</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($timetable)
                      @foreach ($timetable as $table)
                      <tr>
                        <td>{{$table->day_of_week}}</td>
                        <td>{{$table->start_time}}</td>
                        <td>{{$table->end_time}}</td>
                        <td>{{$table->module_id}}</td>
                        <td>{{$table->module_name}}</td>
                        <td>{{$table->session_type}}</td>
                        <td>{{$table->room_name}}</td>
                        <td>
                          <a href="{{route('edit-session',['class_id' => $table->class_id])}}">
                            <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                          </a>
                          <form method="POST" action="{{route('delete-session')}}"> 
                            @csrf
                            <button type="submit" class="btn btn-outline-success">Delete Details</button>
                            <input type="hidden" name="class_id" value="{{$table->class_id}}">
                          </form>   
                        </td>
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

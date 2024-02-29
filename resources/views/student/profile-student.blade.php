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
             {{--  <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
              <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button> --}}
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{session('name')}}<i class="bi bi-person-fill"></i></a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{route('profile-student')}}">{{session('regno')}}</a></li>
                <li>
                  <a class="dropdown-item" href="{{route('logout-student')}}">Logout</a>
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
              <a href="{{route('home-student')}}" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">Interface</div>
            </li>
            <li>
              <a href="{{route('week-classes')}}" class="nav-link px-3">
                <span class="me-2"> <i class="bi bi-book"></i></span>
                <span>Classes Timetable</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
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
            <h4>Profile</h4>
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
        <div class="row">
            <div class="col-xl-4">    
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">    
                  <img src="img/lable.jpg" alt="Profile" class="rounded-circle img-fluid w-50 w-50">
                  <h2 class="display-7 fw-bold text-primary">{{session('name')}}</h2>
                  <h3 class="text-muted">{{session('regno')}}</h3>
                  <div class="social-links mt-2">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8">
              <div class="card">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                    </li>
                  </ul>
                  <div class="tab-content pt-2">
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      <h5 class="card-title display-6 mb-4 text-primary">Profile Details</h5>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Full Name</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('name')}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">university</div>
                        <div class="col-lg-9 col-md-8 h6">Institute Of Finance Management</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Course</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('course')}}</div>
                      </div>    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Department</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('department')}}</div>
                      </div>   
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Faculty</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('faculty')}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Registration NUmber</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('regno')}}</div>
                      </div>   
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Email</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('email')}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Gender</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('gender')}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Study Year</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('year')}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label h6 text-muted">Study Group</div>
                        <div class="col-lg-9 col-md-8 h6">{{session('group')}}</div>
                      </div>
                        <br>
                    </div>      
                    <div class="tab-pane fade pt-3" id="profile-change-password">
                      <!-- Change Password Form -->
                      <form method="post" action="{{route('change-password')}}">
                        @csrf
                        <div class="row mb-3">
                          <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control">
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control">
                          </div>
                        </div>       
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary" name="changePassword">Change Password</button>
                        </div>
                      </form><!-- End Change Password Form -->
                    </div>   
                  </div><!-- End Bordered Tabs -->    
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

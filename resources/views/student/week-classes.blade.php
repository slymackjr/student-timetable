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
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Student TimeTable</a>
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
                <li><a class="dropdown-item" href="#">Student Username</a></li>
                <li><a class="dropdown-item" href="#">Course Name</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
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
            <li>
              <a href="{{route('exam-sessions')}}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-calendar-check"></i></span>
                <span>Exam Timetable</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Details
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
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
          <div class="col-md-4 mb-3">
            <div class="card bg-primary text-white h-100 d-flex align-items-center justify-content-center">
              <i class="bi bi-calendar text-white h1"></i>
              <div class="card-footer d-flex">
                <a href="{{route('week-classes')}}" class="nav-link">
                    <div class="text-white">Class Timetable</div>
                </a>
                <span class="ms-auto">
                  <i class="bi bi-chevron-right text-white"></i>
                </span>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-3">
            <div class="card bg-warning text-dark h-100 d-flex align-items-center justify-content-center">
              <i class="bi bi-calendar text-dark h1"></i> 
              <div class="card-footer d-flex">
                <a href="{{route('exam-sessions')}}" class="nav-link">
                    <div class="text-dark">Exam Timetable</div>
                </a> 
                <span class="ms-auto">
                  <i class="bi bi-chevron-right text-dark"></i>
                </span>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-3">
            <div class="card bg-success text-white h-100 d-flex align-items-center justify-content-center">
              <i class="bi bi-person text-white h1"></i> <div class="card-footer d-flex">
                <div class="text-white">Personal Details</div>
                <span class="ms-auto">
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
                <span><i class="bi bi-table me-2"></i></span> Classes  Weekly
              </div>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered text-center table-striped">
                      <thead>
                          <tr class="bg-light-gray">
                              <th class="text-uppercase">Time
                              </th>
                              <th class="text-uppercase">Monday</th>
                              <th class="text-uppercase">Tuesday</th>
                              <th class="text-uppercase">Wednesday</th>
                              <th class="text-uppercase">Thursday</th>
                              <th class="text-uppercase">Friday</th>
                              <th class="text-uppercase">Saturday</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="align-middle">07:00am</td>
                              <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-primary font-size16 xs-font-size13">Lecture CSU08104 TH_K</span>
                                  <div class="margin-10px-top font-size14">7:00-8:00</div>
                                  <div class="font-size13 text-light-gray">Wangilisasi</div>
                              </td>
                              <td>
                                  
                              </td>
    
                              <td>
                                  <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-primary font-size16  xs-font-size13">Lecture ITU/CSU08107 338</span>
                                  <div class="margin-10px-top font-size14">7:00-8:00</div>
                                  <div class="font-size13 text-light-gray">Mugyabuso,M. (Mr)</div>
                              </td>
                              <td>
                                  
                              </td>
                              <td>
                                  
                              </td>
                              <td>
                                  
                              </td>
                          </tr>
    
                          <tr>
                              <td class="align-middle">8:00am</td>
                              <td>
                                  
                              </td>
                              <td class="bg-light-gray">
    
                              </td>
                              <td>
                                 
                              </td>
                              <td>
                                  
                              </td>
                              <td>
                                 
                              </td>
                              <td class="bg-light-gray">
    
                              </td>
                          </tr>
    
                          <tr>
                              <td class="align-middle">9:00am</td>
                              <td>
                                 
                              </td>
                              <td>
                                  
                              </td>
                              <td>
                                 
                              </td>
                              <td>
                                 
                              </td>
                              <td>
                                 
                              </td>
                              <td>
                                 
                              </td>
                          </tr>
    
                          <tr>
                              <td class="align-middle">10:00pm</td>
                              <td class="bg-light-gray">
    
                              </td>
                              <td>
                                 
                              </td>
                              <td>
                                 
                              </td>
                              <td>
                                  
                              </td>
                              <td class="bg-light-gray">
    
                              </td>
                              <td>
                                
                              </td>
                          </tr>
    
                          <tr>
                              <td class="align-middle">11:00am</td>
                              <td>
                                 
                              </td>
                              <td>
                                  
                              </td>
                              <td class="bg-light-gray">
    
                              </td>
                              <td>
                                  
                              </td>
                              <td>
                                  
                              </td>
                              <td>
                                  
                              </td>
                          </tr>

                          <tr>
                            <td class="align-middle">12:00pm</td>
                            <td>
                                
                            </td>
                            <td>
                               
                            </td>
                            <td class="bg-light-gray">
  
                            </td>
                            <td>
                               
                            </td>
                            <td>
                               
                            </td>
                            <td>
                               
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">1:00pm</td>
                            <td>
                                <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-primary font-size16  xs-font-size13">Lecture CSU08105 120</span>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">Lupiana,D.(Dr)</div>
                            </td>
                            <td>
                               
                            </td>
                            <td class="bg-light-gray">
  
                            </td>
                            <td>
                                <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-primary font-size16  xs-font-size13">Lecture CSU08103 345</span>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">Lilian(Dr)</div>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                               
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">2:00pm</td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td class="bg-light-gray">
  
                            </td>
                            <td>
                               
                            </td>
                            <td>
                                <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-primary font-size16  xs-font-size13">Tutorial CSU08111 219</span>
                                <div class="margin-10px-top font-size14">2:00-3:00</div>
                                <div class="font-size13 text-light-gray">Manase,S(Mr)</div>
                            </td>
                            <td>
                              
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">3:00pm</td>
                            <td>
                               
                            </td>
                            <td>
                                
                            </td>
                            <td class="bg-light-gray">
  
                            </td>
                            <td>
                               
                            </td>
                            <td>
                               
                            </td>
                            <td>
                               
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">4:00pm</td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td class="bg-light-gray">
  
                            </td>
                            <td>
                              
                            </td>
                            <td>
                               
                            </td>
                            <td>
                               
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">5:00pm</td>
                            <td>
                                
                            </td>
                            <td>
                               
                            </td>
                            <td class="bg-light-gray">
  
                            </td>
                            <td>
                              
                            </td>
                            <td>
                               
                            </td>
                            <td>
                               
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">6:00pm</td>
                            <td>
                               
                            </td>
                            <td>
                               
                            </td>
                            <td class="bg-light-gray">
  
                            </td>
                            <td>
                              
                            </td>
                            <td>
                               
                            </td>
                            <td>
                               
                            </td>
                        </tr>

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

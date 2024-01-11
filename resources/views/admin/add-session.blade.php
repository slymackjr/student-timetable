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
                <li><a class="dropdown-item" href="#">Username</a></li>
                <li><a class="dropdown-item" href="#">Position</a></li>
                <li>
                  <a class="dropdown-item" href="#">Logout</a>
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
              <a href="{{route('home-staff')}}" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">Interface</div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"> <i class="bi bi-book"></i></span>
                <span>Classes Timetable</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"> <i class="bi bi-file-earmark-text"></i></span>
                <span>Exams Timetable</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-person-fill"></i></span>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
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
            <h4>Create New Class Session</h4>
          </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-10 m-auto">
              <div class="card">      
                  <div class="card-body">
                      <h5 class="card-title">Add Session</h5>
                      <a href="#">
                          <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-arrow-left"></i>Classes</button>
                      </a>
                      <!-- General Form Elements -->
                      <form method="post" action="">
                          <div class="row mb-3">
                              <label for="inputText" class="col-sm-2 col-form-label fw-bolder">Module name</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="module" required>
                              </div>
                          </div>
                         <div class="row mb-3">
                              <label for="inputEmail" class="col-sm-2 col-form-label fw-bolder">Module Code</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="code" required>
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="inputNumber" class="col-sm-2 col-form-label fw-bolder">Venue</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="venue" required>
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="inputNumber" class="col-sm-2 col-form-label fw-bolder">Faculty</label>
                              <div class="col-sm-5">
                                  <input type="number" class="form-control" name="Faculty" required>
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="inputNumber" class="col-sm-2 col-form-label fw-bolder">Course</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="course" required>
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="inputNumber" class="col-sm-2 col-form-label fw-bolder">Group</label>
                              <div class="col-sm-5">
                                  <input class="form-control" type="text" name="group" required>
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="inputNumber" class="col-sm-2 col-form-label fw-bolder">Study Year</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="year" required>
                              </div>
                          </div>
                          <div class="row mb-3">
                              <div class="col-sm-5 m-auto">
                                  <button type="button" class="btn btn-primary fw-bolder" name="submit">Add Session</button>
                                  <input type="hidden" name="module-id">
                              </div>
                          </div>
                      </form><!-- End General Form Elements -->
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

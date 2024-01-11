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
            <h4>Profile</h4>
          </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-10 m-auto">
              <div class="card">      
                  <div class="card-body">
                      <h5 class="card-title">Session Details</h5>
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
                                  <button type="button" class="btn btn-primary fw-bolder" name="submit">Edit Session</button>
                                  <input type="hidden" name="module-id">
                              </div>
                          </div>
                      </form><!-- End General Form Elements -->
                  </div>
              </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xl-4">    
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">    
                  <img src="img/lable.jpg" alt="Profile" class="rounded-circle img-fluid w-50 w-50">
                  <h2>Admin Staff</h2>
                  <h3>Administrator</h3>
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
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                    </li>
                  </ul>
                  <div class="tab-content pt-2">
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      <h5 class="card-title">About</h5>
                      <p class="small fst-italic">admin is the Administrator of this system who is granted optimum privileges with regard to users privacy.</p>
                      <h5 class="card-title">Profile Details</h5>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                        <div class="col-lg-9 col-md-8">admin</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">university</div>
                        <div class="col-lg-9 col-md-8">Institute Of Finance Management</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Job</div>
                        <div class="col-lg-9 col-md-8">Administrator</div>
                      </div>    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Country</div>
                        <div class="col-lg-9 col-md-8">Tanzania</div>
                      </div>   
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">kigamboni mbuni street</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Phone</div>
                        <div class="col-lg-9 col-md-8">0767413968</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">slymack999@gmail.com</div>
                      </div>
                        <br>
                    </div>   
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">   
                      <!-- Profile Edit Form -->
                      <form method="post">
                        <div class="row mb-3">
                          <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                          <div class="col-md-8 col-lg-9">
                            <img src="img/lable.jpg" alt="Profile" class="rounded-circle img-fluid w-50">
                            <div class="pt-2">
                              <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                              <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="name" type="text" class="form-control" id="fullName">
                          </div>
                        </div>    
                          <div class="row mb-3">
                              <label for="Username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                              <div class="col-md-8 col-lg-9">
                                  <input name="username" type="text" class="form-control" id="username">
                              </div>
                          </div>
                        <div class="row mb-3">
                          <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                          <div class="col-md-8 col-lg-9">
                            <textarea name="about" class="form-control" id="about" style="height: 100px" disabled>Admin is the Administrator of this system who is granted optimum privileges with regard to users privacy.</textarea>
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="university" class="col-md-4 col-lg-3 col-form-label">university</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="university" type="text" class="form-control" id="university" value="Institute Of Finance Management" disabled>
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="job" type="text" class="form-control" id="Job" value="Administrator" disabled>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="country" type="text" class="form-control" id="Country" value="Tanzania" disabled>
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="address" type="text" class="form-control" id="Address">
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="contactInfo" type="text" class="form-control" id="Phone">
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="Email">
                          </div>
                        </div>   
                          <div class="row mb-3">
                              <label for="register" class="col-md-4 col-lg-3 col-form-label">Registration Date</label>
                              <div class="col-md-8 col-lg-9">
                                  <input name="register" type="text" class="form-control" id="register">
                              </div>
                          </div>    
                        <div class="row mb-3">
                          <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                          </div>
                        </div>   
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                        </div>
                      </form><!-- End Profile Edit Form -->    
                    </div>    
                    <div class="tab-pane fade pt-3" id="profile-settings">   
                      <!-- Settings Form -->
                      <form>    
                        <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                          <div class="col-md-8 col-lg-9">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="changesMade" checked>
                              <label class="form-check-label" for="changesMade">
                                Changes made to your account
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="newProducts" checked>
                              <label class="form-check-label" for="newProducts">
                                Information on new products and services
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="proOffers">
                              <label class="form-check-label" for="proOffers">
                                Marketing and promo offers
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                              <label class="form-check-label" for="securityNotify">
                                Security alerts
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                      </form><!-- End settings Form -->
                    </div>
                    <div class="tab-pane fade pt-3" id="profile-change-password">
                      <!-- Change Password Form -->
                      <form method="post">
                        <div class="row mb-3">
                          <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="currentPassword">
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                          </div>
                        </div>    
                        <div class="row mb-3">
                          <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
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

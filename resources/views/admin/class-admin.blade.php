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
            <h4>Classes TimeTable</h4>
          </div>
        </div>
        <div class="row pb-5">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Classes TimeTable
              </div>
              <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">FCM</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">FIB</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FBE</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <ul class="nav nav-pills mb-3" id="custom-tabs" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="custom-home-tab" data-bs-toggle="pill" data-bs-target="#custom-home" type="button" role="tab" aria-controls="custom-home" aria-selected="true">BCS</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="custom-profile-tab" data-bs-toggle="pill" data-bs-target="#custom-profile" type="button" role="tab" aria-controls="custom-profile" aria-selected="false">BIT</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="custom-contact-tab" data-bs-toggle="pill" data-bs-target="#custom-contact" type="button" role="tab" aria-controls="custom-contact" aria-selected="false">BAS</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="custom-about-tab" data-bs-toggle="pill" data-bs-target="#custom-about" type="button" role="tab" aria-controls="custom-about" aria-selected="false">BAIT</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="custom-view-tab" data-bs-toggle="pill" data-bs-target="#custom-view" type="button" role="tab" aria-controls="custom-view" aria-selected="false">BDCS</button>
                      </li>
                    </ul>
                    
                    <div class="tab-content" id="custom-tabs-content">
                      <div class="tab-pane fade show active" id="custom-home" role="tabpanel" aria-labelledby="custom-home-tab">
                        <ul class="nav nav-pills mb-3" id="pills1-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills1-home-tab" data-bs-toggle="pill" data-bs-target="#pills1-home" type="button" role="tab" aria-controls="pills1-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills1-profile-tab" data-bs-toggle="pill" data-bs-target="#pills1-profile" type="button" role="tab" aria-controls="pills1-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills1-contact-tab" data-bs-toggle="pill" data-bs-target="#pills1-contact" type="button" role="tab" aria-controls="pills1-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills1-tabContent">
                          <div class="tab-pane fade show active" id="pills1-home" role="tabpanel" aria-labelledby="pills1-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills1-profile" role="tabpanel" aria-labelledby="pills1-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills1-contact" role="tabpanel" aria-labelledby="pills1-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="custom-profile" role="tabpanel" aria-labelledby="custom-profile-tab">
                        <ul class="nav nav-pills mb-3" id="pills2-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills2-home-tab" data-bs-toggle="pill" data-bs-target="#pills2-home" type="button" role="tab" aria-controls="pills2-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills2-profile-tab" data-bs-toggle="pill" data-bs-target="#pills2-profile" type="button" role="tab" aria-controls="pills2-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills2-contact-tab" data-bs-toggle="pill" data-bs-target="#pills2-contact" type="button" role="tab" aria-controls="pills2-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills2-tabContent">
                          <div class="tab-pane fade show active" id="pills2-home" role="tabpanel" aria-labelledby="pills2-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills2-profile" role="tabpanel" aria-labelledby="pills2-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills2-contact" role="tabpanel" aria-labelledby="pills2-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="custom-contact" role="tabpanel" aria-labelledby="custom-contact-tab">
                        <ul class="nav nav-pills mb-3" id="pills3-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills3-home-tab" data-bs-toggle="pill" data-bs-target="#pills3-home" type="button" role="tab" aria-controls="pills3-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills3-profile-tab" data-bs-toggle="pill" data-bs-target="#pills3-profile" type="button" role="tab" aria-controls="pills3-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills3-contact-tab" data-bs-toggle="pill" data-bs-target="#pills3-contact" type="button" role="tab" aria-controls="pills3-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills3-tabContent">
                          <div class="tab-pane fade show active" id="pills3-home" role="tabpanel" aria-labelledby="pills3-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills3-profile" role="tabpanel" aria-labelledby="pills3-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills3-contact" role="tabpanel" aria-labelledby="pills3-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="custom-about" role="tabpanel" aria-labelledby="custom-about-tab">
                        <ul class="nav nav-pills mb-3" id="pills4-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills4-home-tab" data-bs-toggle="pill" data-bs-target="#pills4-home" type="button" role="tab" aria-controls="pills4-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills4-profile-tab" data-bs-toggle="pill" data-bs-target="#pills4-profile" type="button" role="tab" aria-controls="pills4-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills4-contact-tab" data-bs-toggle="pill" data-bs-target="#pills4-contact" type="button" role="tab" aria-controls="pills4-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills4-tabContent">
                          <div class="tab-pane fade show active" id="pills4-home" role="tabpanel" aria-labelledby="pills4-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills4-profile" role="tabpanel" aria-labelledby="pills4-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills4-contact" role="tabpanel" aria-labelledby="pills4-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="custom-view" role="tabpanel" aria-labelledby="custom-view-tab">
                        <ul class="nav nav-pills mb-3" id="pills5-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills5-home-tab" data-bs-toggle="pill" data-bs-target="#pills5-home" type="button" role="tab" aria-controls="pills5-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills5-profile-tab" data-bs-toggle="pill" data-bs-target="#pills5-profile" type="button" role="tab" aria-controls="pills5-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills5-contact-tab" data-bs-toggle="pill" data-bs-target="#pills5-contact" type="button" role="tab" aria-controls="pills5-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills5-tabContent">
                          <div class="tab-pane fade show active" id="pills5-home" role="tabpanel" aria-labelledby="pills5-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills5-profile" role="tabpanel" aria-labelledby="pills5-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills5-contact" role="tabpanel" aria-labelledby="pills5-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
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
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="nav nav-pills mb-3" id="tabs-set2" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab2-home-tab" data-bs-toggle="pill" data-bs-target="#tab2-home" type="button" role="tab" aria-controls="tab2-home" aria-selected="true">BSP</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-profile-tab" data-bs-toggle="pill" data-bs-target="#tab2-profile" type="button" role="tab" aria-controls="tab2-profile" aria-selected="false">BBF</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-contact-tab" data-bs-toggle="pill" data-bs-target="#tab2-contact" type="button" role="tab" aria-controls="tab2-contact" aria-selected="false">BIRM</button>
                      </li>
                    </ul>
                    
                    <div class="tab-content" id="tabs-set2-content">
                      <div class="tab-pane fade show active" id="tab2-home" role="tabpanel" aria-labelledby="tab2-home-tab">
                        <ul class="nav nav-pills mb-3" id="pills6-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills6-home-tab" data-bs-toggle="pill" data-bs-target="#pills6-home" type="button" role="tab" aria-controls="pills6-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills6-profile-tab" data-bs-toggle="pill" data-bs-target="#pills6-profile" type="button" role="tab" aria-controls="pills6-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills6-contact-tab" data-bs-toggle="pill" data-bs-target="#pills6-contact" type="button" role="tab" aria-controls="pills6-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills6-tabContent">
                          <div class="tab-pane fade show active" id="pills6-home" role="tabpanel" aria-labelledby="pills6-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills6-profile" role="tabpanel" aria-labelledby="pills6-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills6-contact" role="tabpanel" aria-labelledby="pills6-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab2-profile" role="tabpanel" aria-labelledby="tab2-profile-tab">
                        <ul class="nav nav-pills mb-3" id="pills7-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills7-home-tab" data-bs-toggle="pill" data-bs-target="#pills7-home" type="button" role="tab" aria-controls="pills7-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills7-profile-tab" data-bs-toggle="pill" data-bs-target="#pills7-profile" type="button" role="tab" aria-controls="pills7-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills7-contact-tab" data-bs-toggle="pill" data-bs-target="#pills7-contact" type="button" role="tab" aria-controls="pills7-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills7-tabContent">
                          <div class="tab-pane fade show active" id="pills7-home" role="tabpanel" aria-labelledby="pills7-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills7-profile" role="tabpanel" aria-labelledby="pills7-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills7-contact" role="tabpanel" aria-labelledby="pills7-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab2-contact" role="tabpanel" aria-labelledby="tab2-contact-tab">
                        <ul class="nav nav-pills mb-3" id="pills8-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills8-home-tab" data-bs-toggle="pill" data-bs-target="#pills8-home" type="button" role="tab" aria-controls="pills8-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills8-profile-tab" data-bs-toggle="pill" data-bs-target="#pills8-profile" type="button" role="tab" aria-controls="pills8-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills8-contact-tab" data-bs-toggle="pill" data-bs-target="#pills8-contact" type="button" role="tab" aria-controls="pills8-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills8-home" role="tabpanel" aria-labelledby="pills8-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills8-profile" role="tabpanel" aria-labelledby="pills8-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills8-contact" role="tabpanel" aria-labelledby="pills8-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
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
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <ul class="nav nav-pills mb-3" id="tabs-set3" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab3-home-tab" data-bs-toggle="pill" data-bs-target="#tab3-home" type="button" role="tab" aria-controls="tab3-home" aria-selected="true">BEF</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab3-profile-tab" data-bs-toggle="pill" data-bs-target="#tab3-profile" type="button" role="tab" aria-controls="tab3-profile" aria-selected="false">BTX</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab3-contact-tab" data-bs-toggle="pill" data-bs-target="#tab3-contact" type="button" role="tab" aria-controls="tab3-contact" aria-selected="false">BAC</button>
                      </li>
                    </ul>
                    
                    <div class="tab-content" id="tabs-set3-content">
                      <div class="tab-pane fade show active" id="tab3-home" role="tabpanel" aria-labelledby="tab3-home-tab">
                        <ul class="nav nav-pills mb-3" id="pills9-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills9-home-tab" data-bs-toggle="pill" data-bs-target="#pills9-home" type="button" role="tab" aria-controls="pills9-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills9-profile-tab" data-bs-toggle="pill" data-bs-target="#pills9-profile" type="button" role="tab" aria-controls="pills9-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills9-contact-tab" data-bs-toggle="pill" data-bs-target="#pills9-contact" type="button" role="tab" aria-controls="pills9-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills9-tabContent">
                          <div class="tab-pane fade show active" id="pills9-home" role="tabpanel" aria-labelledby="pills9-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills9-profile" role="tabpanel" aria-labelledby="pills9-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills9-contact" role="tabpanel" aria-labelledby="pills9-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab3-profile" role="tabpanel" aria-labelledby="tab3-profile-tab">
                        <ul class="nav nav-pills mb-3" id="pills10-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills10-home-tab" data-bs-toggle="pill" data-bs-target="#pills10-home" type="button" role="tab" aria-controls="pills10-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills10-profile-tab" data-bs-toggle="pill" data-bs-target="#pills10-profile" type="button" role="tab" aria-controls="pills10-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills10-contact-tab" data-bs-toggle="pill" data-bs-target="#pills10-contact" type="button" role="tab" aria-controls="pills10-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills10-home" role="tabpanel" aria-labelledby="pills10-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills10-profile" role="tabpanel" aria-labelledby="pills10-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills10-contact" role="tabpanel" aria-labelledby="pills10-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab3-contact" role="tabpanel" aria-labelledby="tab3-contact-tab">
                        <ul class="nav nav-pills mb-3" id="pills11-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills11-home-tab" data-bs-toggle="pill" data-bs-target="#pills11-home" type="button" role="tab" aria-controls="pills11-home" aria-selected="true">YEAR 1</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills11-profile-tab" data-bs-toggle="pill" data-bs-target="#pills11-profile" type="button" role="tab" aria-controls="pills11-profile" aria-selected="false">YEAR 2</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills11-contact-tab" data-bs-toggle="pill" data-bs-target="#pills11-contact" type="button" role="tab" aria-controls="pills11-contact" aria-selected="false">YEAR 3</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills11-tabContent">
                          <div class="tab-pane fade show active" id="pills11-home" role="tabpanel" aria-labelledby="pills11-home-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills11-profile" role="tabpanel" aria-labelledby="pills11-profile-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pills11-contact" role="tabpanel" aria-labelledby="pills11-contact-tab">
                            <div class="table-responsive">
                              <div class="pb-3">
                                <a href="#">
                                  <button type="button" name="cid" class="btn btn-outline-success"><i class="bi bi-plus"></i>Add Period</button>
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
                                    <th>Venue</th>
                                    <th>University</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Monday</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>CSU07806</td>
                                    <td>MK5</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Tuesday</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>CSU07802</td>
                                    <td>MK6</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Friday</td>
                                    <td>4:00 PM</td>
                                    <td>6:00 PM</td>
                                    <td>CSU07804</td>
                                    <td>MK3</td>
                                    <td>IFM</td>
                                    <td>2</td>
                                    <td>
                                      <button type="button" name="user" class="btn btn-outline-secondary">View Details</button>
                                      <button type="button" name="user" class="btn btn-outline-success">Delete Product</button>
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

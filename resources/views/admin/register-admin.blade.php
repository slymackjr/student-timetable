<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <div id="intro-example" class="p-5 text-center bg-image align-items-center">
        <section>
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                          <p class="text-center h1 fw-bold mb-3 mt-1">Staff Register here</p>
                          @if(session('error'))
                          <p class="text-center text-danger mb-3 mt-3">{{ session('error') }}!</p>
                          @endif
                          <form class="mx-1 mx-md-4" method="POST" action="{{route('register-staff-method')}}">
                            @csrf
                            <div class="d-flex flex-row align-items-center mb-3">
                              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="text" id="form3Example1c" name="name" class="form-control" placeholder="Your Name"/>
                                @error('name')
                                <span class="text-center text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-3">
                              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="text" id="form3Example1c" name="staff_id" class="form-control" placeholder="Your Job's ID"/>
                                @error('staff_id')
                                <span class="text-center text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-3">
                              <i class="fas fa-house fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="text" id="form3Example1c" name="job_title" class="form-control" placeholder="Your Job Title"/>
                                @error('job_title')
                                <span class="text-center text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-3">
                              <i class="fas fa-house fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                  <select id="form3Example1c" name="staff_department" class="form-select">
                                      <option selected disabled>Select Your Department</option>
                                      <!-- Add options for each department -->
                                      <option value="Department of Mathematics">Department of Mathematics</option>
                                      <option value="Department of Computer Science">Department of Computer Science</option>
                                      <option value="Department of Information Technology">Department of Information Technology</option>
                                      <option value="Department of Insurance and Risk Management">Department of Insurance and Risk Management</option>
                                      <option value="Department of Social Protection">Department of Social Protection</option>
                                      <option value="Department of Actuarial Science">Department of Actuarial Science</option>
                                      <option value="department of Accounting and Finance">department of Accounting and Finance</option>
                                      <option value="department Banking and Financial Services">department Banking and Financial Services</option>
                                      <!-- Add more options as needed -->
                                  </select>
                                  @error('department')
                                      <span class="text-center text-danger">{{$message}}</span>
                                  @enderror
                              </div>
                          </div>
                          

                          <div class="d-flex flex-row align-items-center mb-3">
                            <i class="fas fa-house fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <select id="form3Example1c" name="staff_faculty" class="form-select">
                                    <option selected disabled>Select Your Faculty</option>
                                    <!-- Add options for each faculty -->
                                    <option value="Faculty of Computing and Mathematics (FCM)">Faculty of Computing and Mathematics (FCM)</option>
                                    <option value="Faculty of Insurance and Banking (FIB)">Faculty of Insurance and Banking (FIB)</option>
                                    <option value="Faculty of Business and Economics (FBE)">Faculty of Business and Economics (FBE)</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('faculty')
                                    <span class="text-center text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        

                            <div class="d-flex flex-row align-items-center mb-3">
                              <i class="fas fa-person fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <select name="gender" id="form3Example1c" name="gender" class="form-control">
                                  <option selected>Your Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-3">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" id="form3Example3c" name="email" class="form-control" placeholder="Your email"/>
                                @error('email')
                                <span class="text-center text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-3">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4c" name="password" class="form-control" placeholder="Password"/>
                                @error('password')
                                <span class="text-center text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-3">
                              <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4cd" name="password_confirmation" class="form-control" placeholder="Confirm Password"/>
                                @error('password_confirmation')
                                <span class="text-center text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
          
                            <div class="form-check d-flex justify-content-center mb-2">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                              <label class="form-check-label" for="form2Example3">
                                I agree all statements in <a class="no-link-line" href="#!">Terms of service</a>
                              </label>
                            </div>
          
                            <div class="d-flex justify-content-center mb-2 mb-lg-4">
                              <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>

                            <div class="d-flex justify-content-center mb-2 mb-lg-4">
                              <p class="small mb-0">Already have an account? <a class="no-link-line" class="no-link-line" href="{{route('login-staff')}}">login at your account</a></p>
                            </div>
          
                          </form>
          
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                          <a href="{{route('home')}}">
                            <img src="img/lable.jpg"
                            class="img-fluid rounded-4 w-50" alt="Sample image">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="custom/style.js"></script>    
    
  </body>
</html>



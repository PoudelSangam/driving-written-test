<?php
include_once"login_ajax.php";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>mcq</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {

        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white rounded shadow-5-strong p-5">
                <!-- Email input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="text" id="rollno" class="form-control" />
                  <label class="form-label" for="form1Example1">Roll Number</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="password" id="password" class="form-control" />
                  <label class="form-label" for="form1Example2">Password</label>
                </div>
                <div id="error"  style="color:red;"></div>
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" id="Login" class="btn btn-primary btn-block" data-mdb-ripple-init>Sign in</button>
                <div class="text-center text-muted mt-3">
                  <p>Not a member? <a href="student_register.php">Register</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->


    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</body>
</html>
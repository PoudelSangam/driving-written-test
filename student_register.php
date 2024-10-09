<?php
include_once"register_ajax.php";
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
    <link rel="stylesheet" href="css/index.css" />
</head>
<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
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
      .error-message {
        position: absolute;
        background-repeat: no-repeat;
        border: 1px solid;
        top: 20px;
        right: 20px;
        color: #D8000C;
        background-color: #FFBABA;
      
        z-index: 1000; /* Ensure it's on top of other content */
      }
      .success{

        position: absolute;
        background-repeat: no-repeat;
        border: 1px solid;
        top: 20px;
        right: 20px;
        color: green;
        background-color: #FFBABA;
      
        z-index: 1000; /* Ensure it's on top of other content */
      }
    </style>
        <div class="error-message" id="Error">
        </div>
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
        
 
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white rounded shadow-5-strong p-5">
                <!-- Email input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="text" id="name" class="form-control" />
                  <label class="form-label" for="form1Example1">Name</label>
                  
              </div>
                <div style="color: red; font-size: 15px;"  id="usernameErr"></div>

                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="text" id="rollno" class="form-control" />
                  <label class="form-label" for="form1Example1">Roll Number</label>
                
                </div>  <div style="color: red; font-size: 15px;"  id="rollnoErr"></div>

                <!-- Password input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="password" id="password" class="form-control" />
                  <label class="form-label" for="form1Example2">Password</label>
                  
                </div><div style="color: red; font-size: 15px;"  id="passwordErr"></div>
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                  </div>
                </div>
                <div id="Error"  style="color:red;"></div>

                <!-- Submit button -->
                <button type="submit" id="signup" class="btn btn-primary btn-block" data-mdb-ripple-init>Sign up</button>
                <div class="text-center text-muted mt-3">
                  <p>Already a member? <a href="index.php">Login</a></p>
              
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
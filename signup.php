<?php
include "connection.php";






?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        
    <center>
        <div style="width: 50%; height:fit-content;" class="mt-4">
            <h1>Sign-Up Form</h1>

        <form id="signupForm"  method="post">

                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Enter your name" />
                  <div id="nameError" class="error"></div>
                </div>

                <!-- Phone number input -->
                <div class="form-outline mb-4">
                  <input type="tel" id="num" name="phone" class="form-control form-control-lg" placeholder="Enter your phone number" />
                  <div id="numError" class="error"></div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                  <div id="emailError" class="error"></div>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter password" />
                  <div id="passwordError" class="error"></div>
                </div>

                <!-- Re-enter Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="reEnterPassword" class="form-control form-control-lg" placeholder="Re-enter password" />
                  <div id="reEnterPasswordError" class="error"></div>
                </div>

                <!-- Checkbox and Forgot password link -->
                <div class="d-flex justify-content-between align-items-center">
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">Remember me</label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>

                <!-- Submit button and Login link -->
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg login-btn" style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign up</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login-section.php" class="link-danger">Login</a></p>
                </div>

        </form>
        </div>
        </center>
    </body>
    </html>
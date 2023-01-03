<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
  crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <style>
    .row{
      /* background-color: white; */
      border-radius: 30px;
      /* box-shadow: 12px 12px 22px black; */
    }

    img{
      border-radius: 30px;
    }

    .btn1{
      border: none;
      outline: none;
      height: 50px;
      width: 100%;
      background-color: black;
      color: white;
      border-radius: 5px;
      font-weight: bold;
    }

    .btn1:hover{
      background-color: white;
      border: 1px solid;
      color: black;
    }
  </style>

</head>
<body>

  <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background:#345c72">
    <div class="container-xxl">
      <a href="index.html" class="navbar-brand">
        <img src="/assets/logo.png" width="210" height="50" alt="logo">
      </a>
      <!-- toggle buttom for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#main-nav" aria controls="main-nav" aria-expanded="false"
      aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-center fw-bold" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="index.html#aboutUs">About Us</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="index.html#courts">Courts</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="login.html">Log In</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link active" href="register.html">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="register" >
    <div class="container" class="Form my-4 mx-5">
      <div class="row gx-0">
        <div class="col-lg-6">
          <img src="/assets/courts2.jpg"  class="img-fluid shadow" alt="loginImg">
        </div>
        <div class="col-lg-6 px-5">
          <h1 class="font-weight-bold">Welcome!</h1>
          <h4>Create your new account</h4>
          <form>
            <div class="form-row">
              <div class="col-lg-7">
                <input placeholder="Name" class="form-control my-3 px-4">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <input type="email" placeholder="Email" class="form-control my-3 px-4">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" placeholder="8-digit password" class="form-control my-3 px-4">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" placeholder="confirm password" class="form-control my-3 px-4">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <select class="form-select my-3 px-4" name="idenity" id="identity" aria-label="Default select example">
                  <option selected>Select Identity</option>
                  <option value="1">Public</option>
                  <option value="2">USM Student</option>
                  <option value="3">USM Staff</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <button type="button" class="btn1 mb-3 shadow">Create Account</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
    
  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
  crossorigin="anonymous">
  </script>
</body>
</html>
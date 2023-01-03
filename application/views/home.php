<!DOCTYPE html>
<html lang="en">
<head>
  <meta>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Let's Court</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
  crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background:#345c72">
    <div class="container-xxl">
      <a href="#intro" class="navbar-brand">
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
            <a class="nav-link" href="index.html#intro">Homes</a>
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
            <a class="nav-link" href="register.html">Register</a>   
          </li>
        </ul>
      </div>
    </div> 
  </nav>

  <!-- main image & intro page -->
  <section  id="intro">
    <div class="container-lg">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-2 fw-bold">Let's Court</div>
            <div class="display-5 text-muted">Now Everyone Can Play</div>
          </h1>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eos optio culpa, error aperiam tempora excepturi nostrum reiciendis repudiandae cum?</p>
          <a href="login.html" class="btn btn-secondary btn-lg">Book Now</a>
        </div>
        <div class="col-md-5 text-center d-md-block">
          <img class="img-fluid" src="/assets/firstpg.png" alt="courts">
        </div>
      </div>
    </div>
  </section>

  <!-- courts -->
  <section id="courts" >
    <div class="container-lg  ">
      <div class="text-center">
        <h2>Our Courts</h2>
        <p class="lead ">This is all the courts that we offers</p>
      </div>

      <div class="row my-5 align-items-center justify-content-center g-3">
        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0 shadow">
            <img src="/assets/courts.jpg" class="card-img-top" alt="tennis">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Tennis</h4>
              <p class="lead card-subtitle">Outdoor only</p>
              <p class="display-5 my-4 text-primary fw-bold">RM 10.00</p>
              <p class="card-text mx-5 text-muted ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0 shadow">
            <div class="card-header text-center text-primary">Most Popular</div>
            <img src="/assets/badminton.jpg" class="card-img-top" alt="badminton">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Badminton</h4>
              <p class="lead card-subtitle">Indoor only</p>
              <p class="display-5 my-4 text-primary fw-bold">RM 10.00</p>
              <p class="card-text mx-5 text-muted ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">Book</a>
            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3 ">
          <div class="card border-0 shadow">
            <img src="/assets/volleyball.jpg" class="card-img-top" alt="volleyball">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Volleyball</h4>
              <p class="lead card-subtitle">Indoor only</p>
              <p class="display-5 my-4 text-primary fw-bold">RM 10.00</p>
              <p class="card-text mx-5 text-muted ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">Book</a>
            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0 shadow">
            <img src="/assets/futsal.jpg" class="card-img-top" alt="volleyball">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Futsal</h4>
              <p class="lead card-subtitle">Indoor only</p>
              <p class="display-5 my-4 text-primary fw-bold">RM 10.00</p>
              <p class="card-text mx-5 text-muted ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">Book</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="aboutUs">
    <div class="container-lg p-5">
      <div class="row my-5 align-items-center text-center">
        <div class="card text-center shadow col-lg-10 align-items-center justify-content-center">
          <h2>About Us</h2>
          <img src="/assets/azmanHashim.jpg" class="card-img-top" alt="volleyball">
          <p class="lead text-muted">Tan Sri Azman Hashim, the founder and chairman of Ambank Group, 
            donated RM10 million for the construction of the Azman Hashim Sports Arena which is located on the USM main campus here. 
            The multi-purpose complex known as Azman Hashim Sports Arena has an area of 5,098 square meters. 
            Various facilities in the arena will be built, namely 1 volleyball court, 2 futsal courts and 10 badminton courts. 
            This is the second indoor Sports Complex after USM had a Badminton Sports Complex built in the 80s.</p>
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








<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Let's Court</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html> -->
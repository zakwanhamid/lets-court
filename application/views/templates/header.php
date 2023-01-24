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

  <style>
    section{
      min-height: 100vh;
      padding: 80px 0;
    }

    #intro{
      background: #345c72;
    }

    #courts{
      background: #345c72;
      /* background-image: url(/assets/courts.jpg) */
    }

    #aboutUs{
      background: #345c72;
      /* background-image: url(/assets/azmanHashim.jpg) */
    }

    #login{
      background: #345c72;
    }

    #register{
      background: #345c72;
    }

    #feedback{
      background-image: url(assets/courts6.jpg);
    }

    .row{
      /* background-color: white; */
      border-radius: 30px;
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
  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background:#345c72">
    <div class="container-xxl" >
      <a href="<?php echo base_url(); ?>" class="navbar-brand">
        <img src="<?php echo base_url(); ?>/assets/logo-white.png" width="210" height="50" alt="logo">
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
            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="#aboutUs">About Us</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="#courts">Courts</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="<?php echo base_url();?>/Login/index">Log In</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="<?php echo base_url();?>/Register/index">Register</a>   
          </li>
        </ul>
      </div>
    </div> 
  </nav>
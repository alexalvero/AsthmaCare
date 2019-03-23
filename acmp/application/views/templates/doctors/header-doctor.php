<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title></title>
         <!-- Bootstrap core CSS -->
         <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url(); ?>assets\css\business-frontpage.css" rel="stylesheet">

    </head>
    <body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>doctors"><img src="<?php echo base_url(); ?>assets/img/logo.png" width="30" height="30"> Asthma Care</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>doctors">Home</a>
            </li>
          </li>
          <li class='nav-item dropdown'>
          <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>doctors/patient" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
          <a class="dropdown-item" href="<?php echo base_url(); ?>doctors/add">Add Patient</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>doctors/manage">Manage Patients</a>
        </div>
        </li>
        <li class='nav-item dropdown'>
          <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>doctors/AP" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action Plan </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
          <a class="dropdown-item" href="<?php echo base_url(); ?>doctors/createAP">Create Action Plan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>doctors/viewAP">View Action Plan</a>
        </div>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>doctors/schedule" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Schedule
        </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
          <a class="dropdown-item" href="<?php echo base_url(); ?>doctors/schedule">View Schedule</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>doctors/createSchedule">Create Schedule</a>
        </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='<?php echo base_url()?>pages/logout'>Logout</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title></title>
        <!-- Core CSS -->
        <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/business-frontpage.css" rel="stylesheet">
    </head>
    <body>
     <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>patients"><img src="<?php echo base_url(); ?>assets/img/logo.png" width="30" height="30">Asthma Care</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>patients">Home
              <span class="sr-only"></span>
            </a>
          </li>
          <li class='nav-item dropdown'>
          <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>patients/MySchedule" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Schedule</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
          <a class="dropdown-item" href="<?php echo base_url(); ?>patients/schedule">Manage Schedule</a>
          <!-- <a class="dropdown-item" href="<?php echo base_url(); ?>patients/viewschedule">View My Schedule</a> -->
        </div>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>patients/account">My Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>patients/feedback">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='<?php echo base_url()?>pages/logout'>Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 

    

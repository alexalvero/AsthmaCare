<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="form">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center"></br>
                   <img src="<?php echo base_url(); ?>assets/img/logo.png">
							<h1 class="tx-tfm">Welcome <br/>to <br/> Asthma Care</h1>
						 </div>
					</div>
                   <form action="<?php echo base_url();?>Pages/login_validation" method="post">
                           <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username"  class="form-control" id="username"  placeholder="Enter Username">
                              <span class="text-danger"><?php echo form_error('username');?></span>
                           </div>
                           <div class="form-group">
                              <label >Password</label>
                              <input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password">
                              <span class="text-danger"><?php echo form_error('password');?></span>
                           </div>
                           
                           <div class="col-md-12 text-center">
                           <a href="<?php echo base_url()."forgotpass"?>" class="text-warning">Forgot Password?</a>
                              <button type="submit" name='insert' value='login' class=" btn btn-block mybtn btn-warning tx-tfm text-light">Login</button>
                              <?php
                              echo $this->session->flashdata('error');
                              ?>
                           </div>
                           
                        </form>
                 
				</div>
         
</body>
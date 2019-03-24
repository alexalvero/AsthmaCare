<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="form">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center"></br>
                   
							<h1 class="tx-tfm">Forgot Password:</h1>
						 </div>
					</div>
                            <?php echo form_open("pages/sendpassword")?>
                           <div class="form-group">
                              <label>E-mail:</label>
                              <input type="text" name="email"  class="form-control"   placeholder="Enter E-mail" required>
                              </br>
                              <button class="btn btn-warning">Submit</button>
                           </div>
                          <?php echo form_close(); ?>
                           
                        
                 
				</div>
         
</body>
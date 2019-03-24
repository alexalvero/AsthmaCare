<div class="container">

    <h2 class="text-warning">
        My Account
    </h2>

</br></br></br>
<div class="row">
    <div class="col-md-4 mr-auto">
        <h5 class='text-warning'>Personal Informations:</h5>
        
        <?php foreach($info as $rows) : ?>
        </br> <div class="text-warning">Name: <?php echo $rows['firstname'] ?> <?php echo $rows['lastname']?></div></br>
            <div class="text-warning">Birthday: <?php echo $rows['birthday'] ?></div></br>
            <div class="text-warning">Address: <?php echo $rows['address'] ?></div></br>
            <div class="text-warning">Email: <?php echo $rows['email'] ?></div></br>
            <div class="text-warning">Phone Number: <?php echo $rows['phonenumber'] ?></div></br>

            </br></br></br>
        <?php endforeach ; ?>

        <div class="note">
            <h6 class="text-warning">NOTE: Only the doctor can edit your Personal Informations</h6>
        </div>
    </div>





    <div class="col-md-4 ml-auto">
        <h5 class="text-warning">Change Password:</h5>
        </br>
        <button class="btn btn-warning text-light" data-target="#modal1" data-toggle="modal">Update Password</button>

         <!-- Modal -->
         <?php echo form_open("patients/updatepassword") ?>
         <input type="hidden" name="username" value="<?= $username?>" >
<div class="modal fade" id='modal1' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase text-warning" id="exampleModalCenterTitle">Update Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-warning">
        <div class="form-content">
                      
                New Password: <input type="password" name="password" class="text-warning">  </br>
                Confirm Password: <input type="password" class="text-warning">  
                
                
                    
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning">Save Changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      <?php echo form_close() ;?>
    </div>
  </div>
</div>
    </div>
</div>

</div>
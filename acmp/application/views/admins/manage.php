
<div class="container">
<h6 class="text-warning">Manage Doctors</h6>
<table class="table">
  <thead class="bg-warning">
    <tr>
      <th scope="col" class='text-light'>ID</th>
      <th scope="col" class='text-light'>Username</th>
      <th scope="col" class='text-light'>Fullname</th>
      <th scope="col" class='text-light'>Date Created</th>
      <th scope="col" class='text-light'>Actions</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach ($doctors as $user) : ?>
        <tr class='text-warning'>
        <td><?php echo $user['id']?></td>
        <td><?php echo $user['username']?></td>
        <td class="uppercase"><?php echo $user['firstname']?> <?php echo $user['lastname']?></td>
        <td><?php echo $user['created_at']?></td>
        <td><button class="btn btn-warning" data-target="#<?php echo $user ['username']?>" data-toggle='modal'>Edit</button></td>
       
        
       

       
       
       
       



<!-- Modal -->
<?php echo form_open('admins/update');?>
<input type="hidden" name="id" value="<?php echo $user["id"]?>">
<div class="modal fade" id='<?php echo $user['username']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase text-warning" id="exampleModalCenterTitle">Edit Doctor: Dr. <?php echo $user['firstname']?> <?php echo $user['lastname']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-warning">
      <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="note">
                                <p>Personal Information:</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control uppercase" name='firstname' value="<?php echo $user['firstname']?>" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control uppercase" name='lastname' value="<?php echo $user['lastname']?>"/>
                            </div>
                            <div class="note">
                                <p>Birthday:</p>
                                <input type="date" class="form-control" name='birthday' value="<?php echo $user['birthday']?>"/>
                            </div>
                       
                            <div class="note">
                                <p>Address:</p>
                            </div>
                            <div class="form-group">
                                <input type="text are" class="form-control" name='address' value="<?php echo $user['address']?>"/>
                            </div>
                            <div class="note">
                                <p>Contact Informations:</p>
                                <p>Phone Number:</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name='phonenumber' value="<?php echo $user['phonenumber']?>"/>
                            </div>
                            <div class="note">
                                <p>Email Address:</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name='email' value="<?php echo $user['email']?>"/>
                            </div>
                            <div class="note">
                                <p>Account Informations:</p>
                                <p>Username:</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name='username' value="<?php echo $user['username']?>"/>
                            </div>
                            <div class="note">
                                <p>Password:</p>
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" name='password' value="<?php echo $user['password']?>"/>
                            </div>
                            <div class="form-group" style='block'>
                        <input type="text" style="display: none" name='roles' value='doctor'>
                            </div>
                            <div class="form-group" style='block'>
                        <input type="text" style="display: none" name='created_by' value='admin'>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class='btn btn-warning'>Save Changes</button>
       
      </div>
    </div>
  </div>
</div>
<?php echo form_close();?>
        <!-- End Modal -->






        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
          
        </tr>        
    <?php endforeach ?>
    
  </tbody>
</table>


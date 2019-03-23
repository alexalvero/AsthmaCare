<div class="container">

<h2 class='text-warning'>Add Doctor:</h2>
    <?php echo form_open('admins/add'); ?>
        
    <div class="col-md-6">
         <div class="form-group">
            <label >Personal Information:</label>
            <input type="text" class="form-control uppercase" name='firstname' placeholder="First Name *"  />
            <span class="text-danger"><?php echo form_error('firstname'); ?></span>
         </div>
         <div class="form-group">
                                <input type="text" class="form-control uppercase" name=' lastname' placeholder="Last Name *" />
                                <span class="text-danger"> <?php echo form_error('lastname'); ?> </span>
                            </div>
                            <div class="note">
                                <p>Birthday:</p>
                                <input type="date" class="form-control" name="birthday" placeholder="dd-mm-yyyy"/>
                                <span class="text-danger"><?php echo form_error('birthday'); ?></span> 
                            </div>
                       
                            <div class="note">
                                <p>Address:</p>
                            </div>
                            <div class="form-group">
                                <textarea name="address"  cols="70" rows="5" placeholder='Address *'></textarea>
                                <span class="text-danger"><?php echo form_error('address'); ?></span>
                            </div>
                            <div class="note">
                                <p>Contact Informations:</p>
                                <p>Phone Number:</p> 
                            </div>
                            <div class="form-group">
                            <input type="tel" class="form-control" name='phonenumber' placeholder="Phone Number *" maxlength='11'/>
                            <span class="text-danger"><?php echo form_error('phonenumber'); ?></span>
                            </div>
                            <div class="note">
                                <p>Email Address:</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name='email' placeholder="email@example.com *"/>
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                            <div class="form-group" style='block'>
                        <input type="text" style="display: none" name='roles' value='doctor'>
                            </div>
                            <div class="form-group" style='block'>
                        <input type="text" style="display: none" name='created_by' value='admin'>
                            </div>
        
                            
                            <div class="form-group">
                            <div class="note">
                                <p>Account Informations:</p>
                                <p>Username:</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name=' username' placeholder="Username *"/>
                                <span class="text-danger"><?php echo form_error('username'); ?></span>
                            </div>
                            <div class="note">
                                <p>Password:</p>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name='password' placeholder="Your Password *" value=""/>
                                <span class="text-danger"><?php echo form_error('password'); ?></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value=""/>
                            </div>
                            
         <button class="btn btn-warning">Submit</button>
         </div>
        </div>
        
</div>
<!-- div container -->
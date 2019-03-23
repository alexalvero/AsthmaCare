

<div class="container">
<h3 class="text-warning">Home</h3>
<div class="note">
  <p class="text-warning">List of Doctors:</p>
</div>
<table class="table">
  <thead class="bg-warning">
    <tr>
      <th scope="col" class='text-light'>ID</th>
      <th scope="col" class='text-light'>Username</th>
      <th scope="col" class='text-light'>Full Name</th>
      <th scope="col" class='text-light'></th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach ($doctors as $user) : ?>
        <tr class='text-warning'>
        <td><?php echo $user['id']?></td>
        <td><?php echo $user['username']?></td>
        <td class="uppercase"><?php echo $user['firstname']?> <?php echo $user['lastname']?></td>
        <td><button class="btn btn-Success" data-target="#<?php echo $user ['username']?>" data-toggle='modal'>View Doctor</button></td>


        <!-- Modal -->
<div class="modal fade" id='<?php echo $user['username']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase text-warning" id="exampleModalCenterTitle">Dr. <?php echo $user['firstname']?> <?php echo $user['lastname']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-warning">
      <div class="form-content">
                    
                        <div >
                           <h6 align='center'>ID: <?php echo $user['id']?> </h6> </br>
                           <h6 class='uppercase' align='center'>Firstname: <?php echo $user['firstname']?> </h6> </br>
                           <h6 class='uppercase' align='center'>Lastname: <?php echo $user['lastname']?> </h6> </br>
                           <h6 align='center'>Birthday: <?php echo $user['birthday']?> </h6> </br>
                           <h6 align='center'>Address: <?php echo $user['address']?></h6> </br>
                           <h6 align='center'>Phone Number: <?php echo $user['phonenumber']?> </h6> </br>
                           <h6 align='center'>Email Address: <?php echo $user['email']?> </h6> </br>

                        </div>
                        
                    
                    
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        </tr>        
    <?php endforeach ; ?>
  </tbody>
</table>


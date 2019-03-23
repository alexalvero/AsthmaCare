<div class="container">
    <h2 class='text-warning'>
    My Schedule
    </h2>

    <table class="table">

    <thead class="bg-warning">

            <tr>
            <th class="text-light">Timestamp</th>
            <th class="text-light">Scheduled Date</th>
            <th class="text-light">Status</th>
            <th class="text-light">Actions</th>
            <th class="text-light"></th>
            </tr>
    
    </thead>
    <!-- END THEAD -->


    <tbody>
        <?php foreach($schedule as $rows) :?>
        <tr>
        <input type="hidden" name="id" value="<?php echo $rows["id"]?>">
        <td><?php echo $rows['created_at']?></td>
        <td><?php echo $rows['date']?></td>
        <td class='uppercase'><?php echo $rows['status']?></td>
        <td><?php echo form_open('patients/accept_schedule')?>
          <input type="hidden" name='date' value="<?php echo $rows['date']?>">
          <input type="hidden" name='fname' value="<?php echo $rows['firstname']?>">
          <input type="hidden" name='lname' value="<?php echo $rows['lastname']?>">
           <?php foreach($info as $info1): ?>
            <input type="hidden" name='email' value="<?php echo $info1['email']?>">
            <input type="hidden" name='first' value="<?php echo $info1['firstname']?>">
            <input type="hidden" name='last' value="<?php echo $info1['lastname']?>">
           <?php endforeach ;?>
            <input type="hidden" name='id' value="<?php echo $rows['id']?>">
            <input type="hidden" name='status' value="<p class='text-success'>Confirmed</p>">
            <button class="btn btn-success">Confirm</button>
        <?php echo form_close(); ?>
        </td>
        <td><button class="btn btn-warning" data-target="#<?php echo $rows['created_for']?>" data-toggle='modal'>Reschedule</button></td>
        </tr>



        <!-- Rescehdule Modal -->
        <?php echo form_open('patients/update_schedule')?>
        <input type="hidden" name="id" value="<?php echo $rows["id"]?>">
                <div class="modal fade" id='<?php echo $rows['created_for']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title uppercase text-warning" id="exampleModalCenterTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-warning">
                      <div class="form-content">
                                    
                                        <div >
                                            <p class="text-warning">Reschdule Date:</p>
                                            
                                                <input type="date" class='form-control' name='date' value='<?php echo $rows['date']?>'>
                                        </div>
                                        
                                    
                                    
                                </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-warning">Save Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php echo form_close(); ?>
              <!-- END Modal -->



        
        <?php endforeach; ?>
    </tbody>
    </table>

</div>
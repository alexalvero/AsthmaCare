
<div class="container">
<h2 class="text-warning">Schedule</h2>
<table class="table">
  <thead class="bg-warning">
    <tr>
      <th scope="col" class='text-light'>Timestamp</th>
      <th scope="col" class='text-light'>Scheduled Date</th>
      <th scope="col" class='text-light'>Patient's Name</th>
      <th scope="col" class='text-light'>Status</th>
     
    </tr>
  </thead>
  <tbody>
    <?php foreach($sched as $rows) :?>
      <tr>
      <td><?php echo $rows['created_at']?></td>
      <td><?php echo $rows['date']?></td>
      <td><?php echo $rows['firstname']?> <?php echo $rows['lastname']?></td>
      <td class='uppercase'><?php echo $rows['status']?></td>
     
      

                    <!-- Modal -->
<!-- <div class="modal fade" id='<?php echo $rows ['created_for']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase text-warning" id="exampleModalCenterTitle">View Schedule:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-warning">
      <div class="form-content">
                    
                        <div>
                        <h6 align='center'>Scheduled Date: <?php echo $rows['date']?> </h6> </br>
                        <h6 align='center' class='uppercase'>Status: <?php echo $rows['status']?> </h6> </br>

                        </div>
                        
                    
                    
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
              <!-- END Modal -->
    </tr>
    <?php endforeach ; ?>
    
  </tbody>
</table>


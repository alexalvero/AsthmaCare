<div class="container">
    <h2 class="text-warning">Create Schedule</h2>
    <div class="note">
    <p class="text-warning">Create Schedule for Follow-up Checkup:</p>
    </div>

    <table class="table">
        <thead class="bg-warning">
            <tr>
                <th scope='col' class="text-light">Patient's Name</th>
                <th scope='col' class="text-light"></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($patients as $rows) :?>
                <tr>
                    <td class="uppercase"><?php echo $rows['firstname']?> <?php echo $rows['lastname']?></td>
                    <td><button class="btn btn-success" data-target="#<?php echo $rows['username']?>" data-toggle='modal'>Create Schedule</button></td>
                    </tr>
                    <!-- Modal -->
                    <?php echo form_open('doctors/addsched');?>
                    <input type='hidden' name='id' ;value='<?php echo $rows['id']?>'>
                        <div class="modal fade" id='<?php echo $rows['username']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title uppercase text-warning" id="exampleModalCenterTitle"><?php echo $rows['firstname']?> <?php echo $rows['lastname']?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-warning">
                            <div class="form-content">
                                            
                                        <div align='center'>Schedule Date:</div>       
                                        <div align='center'><input type="date" name='date' value='<?php echo date('Y-m-d'); ?>'></div> 
                                        
                                        <div align='center'>Remarks:</div>  
                                        <div align='center'><textarea name="remarks" id="" cols="50" rows="3"></textarea></div>  


                                        <input type="hidden" name="created_for" value="<?php echo $rows['username']?>">
                                        <input type="hidden" name="created_by" value="<?= $username?>">
                                        <input type="hidden" name="status" value="<p class='text-secondary'>Pending</p>">        
                                        <input type="hidden" name="email" value="<?php echo $rows['email']?>">   
                                        <input type="hidden" class="uppercase" name="firstname" value="<?php echo $rows['firstname']?>">   
                                        <input type="hidden" class="uppercase"name="lastname" value="<?php echo $rows['lastname']?>">    
                                            
                                    
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning">Create Schedule</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <?php echo form_close();?>
              <!-- END Modal -->
                
            <?php endforeach ;?>
        </tbody>
    
    
    
    </table>

</div>
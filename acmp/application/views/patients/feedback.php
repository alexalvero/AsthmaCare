<div class="container">
    <h3 class='text-warning'>Feedback</h3>

    
    <?php echo form_open('patients/addfeed') ?>
    <h5 class='text-warning'>Action Plan ID:</br> <input type="text" name="subject" class='text-warning' > </h5>
    <h6 class="text-warning">Remarks: </br><textarea name="body"  cols="70" rows="4" class='text-warning'></textarea></h6>

    <input type="hidden" name='created_by' value="<?= $username?>">
    <?php foreach($info as $row) :?>
    <input type="hidden" name="created_for" value="<?php echo $row['created_by']?>">
    <input type="hidden" name='firstname' value="<?php echo $row['firstname']?>">
    <input type="hidden" name='lastname' value="<?php echo $row['lastname']?>">
    <?php endforeach ;?>  
    <button class="btn btn-warning">Submit</button>
    <?php echo form_close();?>
    
</div>
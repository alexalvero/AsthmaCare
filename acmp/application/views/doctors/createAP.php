<div class="container">
    <h2 class="text-warning">Create Action Plan</h2>
    <div class="nite">
        <p class="text-warning">Create Action plan for Patient</p>
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
                    <td><button class="btn btn-success" data-target="#<?php echo $rows['username']?>" data-toggle='modal'>Create Action Plan</button></td>
                    </tr>

                    <!-- Modal -->
                    <?php echo form_open('doctors/addAP');?>
                    <input type='hidden' name='id' value='<?php echo $rows['id']?>'>
                        <div class="modal fade xl" id='<?php echo $rows['username']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title uppercase" id="exampleModalCenterTitle"><?php echo $rows['firstname']?> <?php echo $rows['lastname']?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                        <div class="col-md-4 mr-auto">
                                    Date:</br><input type="date" name="date" value='<?php echo date("Y-m-d")?>'> 
                                         </div>
                                         <div class="col-md-4 ml-auto">
                                    Personal Best Peak Flow:</br><input type="number" name='bestpeak' id='<?php echo $rows['id']?>'>         
                                        </div>
                                    </div>

</br></br>
                                        <div class="row">
                                            <h2 class='text-success'>Green Zone</h2>
                                        </div>
                                        <div class="row">
                                        <h6 class="text-success">Peak Flow: from <input type="text" size="4" name="highgreen" id="<?php echo $rows['id']?>highgreen"> to <input type="text" size="4" name="lowgreen" id="<?php echo $rows['id']?>lowgreen"></h6>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenmedicine' placeholder="Medicine">
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="number" class="form-control text-success" name='greenmuch' placeholder="How Much">
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenwhen' placeholder="How Often/When">
                                            </div>
                                        </div>
</br></br>

                                         <div class="row">
                                            <h2 class='text-warning'>Yellow Zone</h2>
                                        </div>
                                        <div class="row">
                                        <h6 class="text-warning">Peak Flow: from <input type="text" size="4" name="highyellow" id="<?php echo $rows['id']?>highyellow"> to <input type="text" size="4" name="lowyellow" id="<?php echo $rows['id']?>lowyellow"</h6>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowmedicine' placeholder="Medicine">
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="number" class="form-control text-warning" name='yellowmuch' placeholder="How Much">
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowwhen' placeholder=" How Often/When">
                                            </div>
                                        </div>
</br></br>

                                        <div class="row">
                                            <h2 class='text-danger'>Red Zone</h2>
                                        </div>
                                        <div class="row">
                                        <h6 class="text-danger">Peak Flow: from <input type="text" size="4" name="highred" id='<?php echo $rows['id']?>highred'> to <input type="text" size="4" name="lowred" id="<?php echo $rows['id']?>lowred"></h6>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redmedicine' placeholder="Medicine">
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="number" class="form-control text-danger" name='redmuch' placeholder="How Much">
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redwhen' placeholder=" How Often/When">
                                            </div>
                                        </div>
                                        
                                        </br></br>
                                        <input type="file" accepts=".png, .jpeg, .jpg" name="doctorsignature">
                                        <input type="hidden" name="version" value='latest'>
                                        <input type="hidden"  name="namepatient" value="<?php echo $rows['firstname']?> <?php echo $rows['lastname']?>" >
                                        <input type="hidden"  name="created_for" value="<?php echo $rows['username']?>">
                                        <input type="hidden"  name="created_by" value="<?= $username ?>">
                                        <input type="hidden"  name="email" value="<?php echo $rows["email"]?>">
                                        <input type="hidden" name="version" value='latest'>
                                        <?php foreach ($doctorinfo as $info) :?>
                                        <input type="hidden" name="namedoctor" value="<?php echo $info['firstname']?> <?php echo $info['lastname']?>">     
                                        <?php endforeach;?>
                                    </div>
</div>
                            <div class="modal-footer">
                                <button class="btn btn-warning">Create Action Plan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <?php echo form_close();?>
              <!-- END Modal -->
              <script>
    $('#<?php echo $rows['id']?>').keyup(function(){
      
      var bestpeak;

      bestpeak = $('#<?php echo $rows['id']?>').val();
      var highgreen = bestpeak * 0.99;
      var lowgreen = bestpeak * 0.80;
      var highyellow = bestpeak * 0.79;
      var lowyellow = bestpeak * 0.51;
      var highred = bestpeak * 0.50;
      var lowred = bestpeak * 0;
      $('#<?php echo $rows['id']?>highgreen').val(highgreen.toFixed(2));
      $('#<?php echo $rows['id']?>lowgreen').val(lowgreen.toFixed(2));
      $('#<?php echo $rows['id']?>highyellow').val(highyellow.toFixed(2));
      $('#<?php echo $rows['id']?>lowyellow').val(lowyellow.toFixed(2));
      $('#<?php echo $rows['id']?>highred').val(highred.toFixed(2));
      $('#<?php echo $rows['id']?>lowred').val(lowred.toFixed(2));
    });
</script>
            <?php endforeach ;?>
            </tbody>
        </table>

</div>

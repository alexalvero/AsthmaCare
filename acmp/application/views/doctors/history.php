<div class="container">

    <h2 class="text-warning">
        Action Plan History
    </h2>

    <table class="table">
    
    <thead class="bg-warning">
    
        <tr>
            <th scope="col" class="text-light">Date Created</th>
            <th scope="col" class="text-light">ID</th>
            <th scope="col" class="text-light">Patient's Name</th>
            <th scope="col" class="text-light">Status</th>
            <th scope="col" class="text-light"></th>
        </tr>

    </thead>


    <tbody>
        <?php foreach($action as $row) :?>
        <tr class='text-warning'>
            <td><?php echo $row['date_created']?></td>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['namepatient']?></td>
            <td class='uppercase'><?php echo $row['version']?></td>
            <td><button class="btn btn-Success" data-target="#modal<?php echo $row ['id']?>" data-toggle='modal'>View Action Plan</button></td>



             <!-- Modal -->
<div class="modal fade" id='modal<?php echo $row ['id']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase text-warning" id="exampleModalCenterTitle"><?php echo $row['namepatient']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-warning">
      <div class="form-content">
                    
      <div class="container-fluid">
                                        <div class="row">
                                        <div class="col-md-4 mr-auto">
                                    Date:</br><input type="date" name="date" value='<?php echo $row['date']?>' disabled> 
                                         </div>
                                         <div class="col-md-4 ml-auto">
                                    Personal Best Peak Flow:</br><input type="number" name='bestpeak' value = "<?php echo $row['bestpeak']?>" disabled>         
                                        </div>
                                    </div>

</br></br>
                                        <div class="row">
                                            <h2 class='text-success'>Green Zone</h2>
                                        </div>
                                        <div class="row">
                                        <h6 class="text-success">Peak Flow: from <input type="text" size="4" name="highgreen"  value = "<?php echo $row['highgreen']?>" disabled> to <input type="text" size="4" name="lowgreen" value = "<?php echo $row['lowgreen']?>" disabled></h6>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenmedicine1' placeholder="Medicine" value = "<?php echo $row['greenmedicine1']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="number" class="form-control text-success" name='greenmuch1' placeholder="How Much" value = "<?php echo $row['greenmuch1']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenwhen1' placeholder="How Often/When" value = "<?php echo $row['greenwhen1']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenmedicine2' placeholder="Medicine" value = "<?php echo $row['greenmedicine2']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="number" class="form-control text-success" name='greenmuch2' placeholder="How Much" value = "<?php echo $row['greenmuch2']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenwhen2' placeholder="How Often/When" value = "<?php echo $row['greenwhen2']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenmedicine3' placeholder="Medicine" value = "<?php echo $row['greenmedicine3']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="number" class="form-control text-success" name='greenmuch3' placeholder="How Much" value = "<?php echo $row['greenmuch3']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenwhen3' placeholder="How Often/When" value = "<?php echo $row['greenwhen3']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenmedicine4' placeholder="Medicine" value = "<?php echo $row['greenmedicine4']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="number" class="form-control text-success" name='greenmuch4' placeholder="How Much" value = "<?php echo $row['greenmuch4']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-success">
                                            
                                            <input type="text" class="form-control text-success" name='greenwhen4' placeholder="How Often/When" value = "<?php echo $row['greenwhen4']?>" disabled>
                                            </div>
                                        </div>
</br></br>

                                         <div class="row">
                                            <h2 class='text-warning'>Yellow Zone</h2>
                                        </div>
                                        <div class="row">
                                        <h6 class="text-warning">Peak Flow: from <input type="text" size="4" name="highyellow" value = "<?php echo $row['highyellow']?>" disabled> to <input type="text" size="4" name="lowyellow" value = "<?php echo $row['highyellow']?>" disabled ></h6>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowmedicine1' placeholder="Medicine" value = "<?php echo $row['yellowmedicine1']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="number" class="form-control text-warning" name='yellowmuch1' placeholder="How Much" value = "<?php echo $row['yellowmuch1']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowwhen1' placeholder=" How Often/When" value = "<?php echo $row['yellowwhen1']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowmedicine2' placeholder="Medicine" value = "<?php echo $row['yellowmedicine2']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="number" class="form-control text-warning" name='yellowmuch2' placeholder="How Much" value = "<?php echo $row['yellowmuch2']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowwhen2' placeholder=" How Often/When" value = "<?php echo $row['yellowwhen2']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowmedicine3' placeholder="Medicine" value = "<?php echo $row['yellowmedicine3']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="number" class="form-control text-warning" name='yellowmuch3' placeholder="How Much" value = "<?php echo $row['yellowmuch3']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowwhen3' placeholder=" How Often/When" value = "<?php echo $row['yellowwhen3']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowmedicine4' placeholder="Medicine" value = "<?php echo $row['yellowmedicine4']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="number" class="form-control text-warning" name='yellowmuch4' placeholder="How Much" value = "<?php echo $row['yellowmuch4']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-warning">
                                            
                                            <input type="text" class="form-control text-warning" name='yellowwhen4' placeholder=" How Often/When" value = "<?php echo $row['yellowwhen4']?>" disabled>
                                            </div>
                                        </div>
</br></br>

                                        <div class="row">
                                            <h2 class='text-danger'>Red Zone</h2>
                                        </div>
                                        <div class="row">
                                        <h6 class="text-danger">Peak Flow: from <input type="text" size="4" name="highred" value = "<?php echo $row['highred']?>" disabled> to <input type="text" size="4" name="lowred" value = "<?php echo $row['lowred']?>" disabled></h6>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redmedicine1' placeholder="Medicine" value = "<?php echo $row['redmedicine1']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="number" class="form-control text-danger" name='redmuch1' placeholder="How Much" value = "<?php echo $row['redmuch1']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redwhen1' placeholder=" How Often/When" value = "<?php echo $row['redwhen1']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redmedicine2' placeholder="Medicine" value = "<?php echo $row['redmedicine2']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="number" class="form-control text-danger" name='redmuch2' placeholder="How Much" value = "<?php echo $row['redmuch2']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redwhen2' placeholder=" How Often/When" value = "<?php echo $row['redwhen2']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redmedicine3' placeholder="Medicine" value = "<?php echo $row['redmedicine3']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="number" class="form-control text-danger" name='redmuch3' placeholder="How Much" value = "<?php echo $row['redmuch3']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redwhen3' placeholder=" How Often/When" value = "<?php echo $row['redwhen3']?>" disabled>
                                            </div>

                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redmedicine3' placeholder="Medicine" value = "<?php echo $row['redmedicine4']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="number" class="form-control text-danger" name='redmuch3' placeholder="How Much" value = "<?php echo $row['redmuch4']?>" disabled>
                                            </div>
                                            <div class="form-group col-md-4 text-danger">
                                            
                                            <input type="text" class="form-control text-danger" name='redwhen3' placeholder=" How Often/When" value = "<?php echo $row['redwhen4']?>" disabled>
                                            </div>
                                        </div>
                                        
                                        </br></br>
                    
                    
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
              <!-- END Modal -->
        </tr>
        <?php endforeach ;?>
    
    
    </tbody>
        
    </table>



</div>
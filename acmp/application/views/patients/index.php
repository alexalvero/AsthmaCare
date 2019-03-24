<div class="container">
    <h3 class="text-warning">
        Welcome to Asthma Care!
        </h3></br></br></br>
        <div class="row">
        <div class="col-md-4 mr-auto">
        <h5 class='text-warning'>Active Action Plan :</h5>
        <?php  foreach($action as $row) :?>
        <h6 class='text-warning'>Action Plan ID : <?php echo $row['id']?></h5>
        <?php endforeach ;?>
        </div>
        <div class="col-md-4 ml-auto">
        <h5 class="text-warning">Scheduled Follow-up Check-up:</h5>
        </div>
        </div>
        <div class="row">
            <div class="col-md-4 mr-auto">
                <table class="table">
                    <thead>
                        <h6 class="text-success">Green Zone</h6>
                        <tr class='text-success'>
                            <th>Medicine</th>
                            <th>How Much</th>
                            <th>How Often/When</th>
                        </tr>
                    </thead>
                    <tbody class='text-success'>
                    <?php  foreach($action as $row) :?>
                        <tr>
                            <td><?php echo $row['greenmedicine1']?></td>
                            <td><?php echo $row['greenmuch1']?></td>
                            <td><?php echo $row['greenwhen1']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['greenmedicine2']?></td>
                            <td><?php echo $row['greenmuch2']?></td>
                            <td><?php echo $row['greenwhen2']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['greenmedicine3']?></td>
                            <td><?php echo $row['greenmuch3']?></td>
                            <td><?php echo $row['greenwhen3']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['greenmedicine4']?></td>
                            <td><?php echo $row['greenmuch4']?></td>
                            <td><?php echo $row['greenwhen4']?></td>
                        </tr>
                    
                    </tbody>
                    <?php endforeach ;?>
                </table>
                
                <table class="table">
                    <thead>
                        <h6 class="text-warning">Yellow Zone</h6>
                        <tr class='text-warning'>
                            <th>Medicine</th>
                            <th>How Much</th>
                            <th>How Often/When</th>
                        </tr>
                    </thead>
                    <tbody class='text-warning'>
                    <?php  foreach($action as $row) :?>
                        <tr>
                            <td><?php echo $row['yellowmedicine1']?></td>
                            <td><?php echo $row['yellowmuch1']?></td>
                            <td><?php echo $row['yellowwhen1']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['yellowmedicine2']?></td>
                            <td><?php echo $row['yellowmuch2']?></td>
                            <td><?php echo $row['yellowwhen2']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['yellowmedicine3']?></td>
                            <td><?php echo $row['yellowmuch3']?></td>
                            <td><?php echo $row['yellowwhen3']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['yellowmedicine4']?></td>
                            <td><?php echo $row['yellowmuch4']?></td>
                            <td><?php echo $row['yellowwhen4']?></td>
                        </tr>
                    
                    </tbody>
                    <?php endforeach ;?>
                </table>

                <table class="table">
                    <thead>
                        <h6 class="text-danger">Red Zone</h6>
                        <tr class='text-danger'>
                            <th>Medicine</th>
                            <th>How Much</th>
                            <th>How Often/When</th>
                        </tr>
                    </thead>
                    <tbody class='text-danger'>
                    <?php  foreach($action as $row) :?>
                        <tr>
                            <td><?php echo $row['redmedicine1']?></td>
                            <td><?php echo $row['redmuch1']?></td>
                            <td><?php echo $row['redwhen1']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['redmedicine2']?></td>
                            <td><?php echo $row['redmuch2']?></td>
                            <td><?php echo $row['redwhen2']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['redmedicine3']?></td>
                            <td><?php echo $row['redmuch3']?></td>
                            <td><?php echo $row['redwhen3']?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['redmedicine4']?></td>
                            <td><?php echo $row['redmuch4']?></td>
                            <td><?php echo $row['redwhen4']?></td>
                        </tr>
                    
                    </tbody>
                    <?php endforeach ;?>
                </table>
            </div>

            <div class="col-md-4 ml-auto">
            <table class="table">   
                <thead> 
                 <tr>
                 <th>Date Created</th>
                 <th>Scheduled Date</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($schedule as $row) :?>
                    <tr>
                        <td><?php echo $row['created_at']?></td>
                        <td><?php echo $row['date']?></td>
                    </tr>
                   
                </tbody>
                <?php endforeach ; ?> 
            </table>
            
            </div>
        </div>
       
    
</div>
<div class="container">
    <h3 class='text-warning'>Feedback</h3>
    <table class="table">
    
        <thead class="bg-warning">
            <tr class='text-light'>
            <th scope="col">Timestamp</th>
            <th scope="col">ID</th>
            <th scope="col">Patient's Name</th>
            <th></th>
            </tr>
        </thead>


        <tbody>
        <?php foreach($feed as $row) :?>
            <tr class='text-warning'>
                <td><?php echo $row['created_at']?></td>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['firstname']?> <?php echo $row['lastname']?></td>
                <td><button class="btn btn-warning" data-target="#modal<?php echo $row['id']?>" data-toggle='modal'>View</button></td>



            <!-- Modal -->
                <div class="modal fade" id="modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning" id="exampleModalLabel">FeedBack</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="text-warning">Action Plan ID: <?php echo $row['subject']?></h6>
                        <h6 class="text-warning">Remarks:</h6>
                            <p class="text-warning" align='center'><?php echo $row['body']?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                    </div>
                    </div>
                </div>
                </div>

                <!-- END Modal -->
            </tr>
        </tbody>
<?php endforeach; ?>
    </table>
</div>
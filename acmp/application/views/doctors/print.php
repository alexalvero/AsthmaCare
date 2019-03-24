<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title></title>
         <!-- Bootstrap core CSS -->
         <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url(); ?>assets\css\business-frontpage.css" rel="stylesheet">
    
</head>
<body>
<div class="container">
    <h3 class="text-warning" align="center">Asthma Care Action Plan</h3>

    </br>
    <?php foreach($action as $row) :?>
    <div class="row">
        <div class="col-sm mr-auto">
        <h6 class='text-warning'>Patient Name: <?php echo $row['namepatient']?></h6>
        <h6 class='text-warning'>Doctor Name: Dr. <?php echo $row['namedoctor']?></h6></br>
        
        <h4 class='text-warning'>Personal Best Peak Flow: <?php echo $row['bestpeak']?></h4>

        </br></br>        
        </div>
        <div class="col-md-4 mr-auto">
        <h6 class='text-warning'>Date: <?php echo $row['date']?></h6>
        <h6 class='text-warning'>Doctors Signature:_________________________</h6>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 mr-auto">   
        <h2 class='text-success'>Green Zone</h2>
        </div>

        <div class="col-md-4 ml-auto">
            <p class="text-success">You Have all of these:
            </br> Breathing is good</br>
            No cough or wheeze</br>
            Sleep through the night</p>
            </br>  
            
        </div>  
        </div>
    <h6 class="text-success">Peak flow from: <?php echo $row['highgreen'] ?> to: <?php echo $row['lowgreen'] ?></h6>
        <table class="table">
            <thead class='text-light bg-success'>
                <tr>
                <th >Medicine</th>
                <th >How Much</th>
                <th >How Often/When</th>
                </tr>
            </thead>
            <tbody class='text-success'>
                <tr>
                <td><h6><?php echo $row['greenmedicine1']?></h6></td>
                <td><h6><?php echo $row['greenmuch1']?></h6></td>
                <td><h6><?php echo $row['greenwhen1']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['greenmedicine2']?></h6></td>
                <td><h6><?php echo $row['greenmuch2']?></h6></td>
                <td><h6><?php echo $row['greenwhen2']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['greenmedicine3']?></h6></td>
                <td><h6><?php echo $row['greenmuch3']?></h6></td>
                <td><h6><?php echo $row['greenwhen3']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['greenmedicine4']?></h6></td>
                <td><h6><?php echo $row['greenmuch4']?></h6></td>
                <td><h6><?php echo $row['greenwhen4']?></h6></td>
                </tr>
            
                <h6 class="text-success">Note: Use these daily controller medicines:</h6>
            </tbody>
        </table>
        
        <div class="row">
        <div class="col-md-4 mr-auto">   
        <h2 class='text-warning'>Yellow Zone</h2>
        </div>

        <div class="col-md-4 ml-auto">
            <p class="text-warning">You have any of these:</br>
                First signs of a cold</br>
                Exposure to known trigger</br>
                Cough</br>
                Mild Wheeze</br>
            </p>
        </div>  
        </div>
        <h6 class="text-warning">Peak flow from: <?php echo $row['highyellow'] ?> to: <?php echo $row['lowyellow'] ?></h6>
        <table class="table">
            <thead class='text-light bg-warning'>
                <tr>
                <th >Medicine</th>
                <th >How Much</th>
                <th >How Often/When</th>
                </tr>
            </thead>
            <tbody class='text-warning'>
                <tr>
                <td><h6><?php echo $row['yellowmedicine1']?></h6></td>
                <td><h6><?php echo $row['yellowmuch1']?></h6></td>
                <td><h6><?php echo $row['yellowwhen1']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['yellowmedicine2']?></h6></td>
                <td><h6><?php echo $row['yellowmuch2']?></h6></td>
                <td><h6><?php echo $row['yellowwhen2']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['yellowmedicine3']?></h6></td>
                <td><h6><?php echo $row['yellowmuch3']?></h6></td>
                <td><h6><?php echo $row['yellowwhen3']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['yellowmedicine4']?></h6></td>
                <td><h6><?php echo $row['yellowmuch4']?></h6></td>
                <td><h6><?php echo $row['yellowwhen4']?></h6></td>
                </tr>
            
                <h6 class="text-warning">Note: Continue with Green Zone medicine and add:</h6>
            </tbody>
        </table>
        
        <div class="row">
        <div class="col-md-4 mr-auto">   
        <h2 class='text-danger'>Red Zone</h2>
        </div>

        <div class="col-md-4 ml-auto">
            <h6 class='text-danger'>Your asthma is getting worse fast:</h6>
            <p class="text-danger">
            Medicine is not helping</br>
            Breathing is hard & fast</br>
            Nose opens wide</br>
            Trouble Speaking</br>
            </p>
        </div>  
        </div>
        <h6 class="text-danger">Peak flow from: <?php echo $row['highred'] ?> to: <?php echo $row['lowred'] ?></h6>
        <table class="table">
            <thead class='text-light bg-danger'>
                <tr>
                <th >Medicine</th>
                <th >How Much</th>
                <th >How Often/When</th>
                </tr>
            </thead>
            <tbody class='text-danger'>
                <tr>
                <td><h6><?php echo $row['redmedicine1']?></h6></td>
                <td><h6><?php echo $row['redmuch1']?></h6></td>
                <td><h6><?php echo $row['redwhen1']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['redmedicine2']?></h6></td>
                <td><h6><?php echo $row['redmuch2']?></h6></td>
                <td><h6><?php echo $row['redwhen2']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['redmedicine3']?></h6></td>
                <td><h6><?php echo $row['redmuch3']?></h6></td>
                <td><h6><?php echo $row['redwhen3']?></h6></td>
                </tr>
                <tr>
                <td><h6><?php echo $row['redmedicine4']?></h6></td>
                <td><h6><?php echo $row['redmuch4']?></h6></td>
                <td><h6><?php echo $row['redwhen4']?></h6></td>
                </tr>
            
                <h6 class="text-danger">Note: Take these Medicines and Call your Doctor Now!</h6>
            </tbody>
        </table>


   
            
       
              <?php endforeach ;?>

</div>    
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
<?php 


/*require_once('config/db.php');

require_once 'config/functions.php';
$result = dispaly_data();
*/

require_once ('db.php');
$query = "select * from sponsor";
$result = mysqli_query($con,$query);




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/3style.css">
  <title>Fatech Data From Database in Php</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Sponsor Details</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td > User ID </td>
                  <td> First Name </td>
                  <td> Email </td>
                  <td> Tele-No</td>
                  <td> Package</td>
                  <td> Name on Card</td>
                  <td> Credit Number</td>
                  <td> Exp Month </td>
                  <td> Exp Year</td>
                  <td>CVV</td>
                  <td> Edit</td>
                  <td>Delete</td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['sID']; ?></td>
                  <td><?php echo $row['fName']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['telNo']; ?></td>
                  <td><?php echo $row['package']; ?></td>
                  <td><?php echo $row['nameC']; ?></td>
                  <td><?php echo $row['creditN']; ?></td>
                  <td><?php echo $row['eM']; ?></td>
                  <td><?php echo $row['eY']; ?></td>
                  <td><?php echo $row['cvV']; ?></td>
                  
                  
                  <td><a href="#" class="btn btn-primary">Edit</a></td>  
                  <td><a href="#" class="btn btn-danger">Delete</a></td>  
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
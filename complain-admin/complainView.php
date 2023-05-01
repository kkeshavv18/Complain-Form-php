<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail of Complain</title>
    <link rel="stylesheet" href="css/complainView.css" />
  </head>
  <body id="body">
    <div class="container-wrapper">

      <div class="header-container">
        <div class="top-header">
          <h1>Ratuwamai Municipality</h1>
          <p>Province-1, Morang</p>
        </div>
      </div>


      <div class="data-container">
        <?php
        include "config.php";
        $complainId = $_GET['complainId'];

        // Here use the sql query according to the database schema you used and fetch all the data
         //of particular complain using the complain id we are getting from the URL
        $sql = "SELECT * FROM complain WHERE complain_id = $complainId";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        if(mysqli_num_rows($result)>0) { while($row =
        mysqli_fetch_assoc($result)) {?>
        
        <h2 style="text-align:center;margin-bottom:15px"><?php echo $row['subject_of_complain'];?></h2>

        <div class="row">
         
          <div class="row-data-wrapper">
            <h3 class="label">Name of Complainer:</h3>
            <h3 class="data"><?php echo $row['name_of_complainer'];?></h3>
          </div>

          <div class="row-data-wrapper">
            <h3 class="label">Address of Complainer:</h3>
            <h3 class="data"><?php echo $row['address_of_complainer'];?></h3>
          </div>

          <div class="row-data-wrapper">
            <h3 class="label">Contact Number:</h3>
            <h3 class="data"><?php echo $row['contact_of_complainer'];?></h3>
          </div>

        </div>

       
            <hr>
            <h3 style="text-align:center; padding:10px" class="data"><?php echo $row['complain_details'];?></h3>
   
     <hr>
     <?php 
           } }?>
      </div>
          </div>
    
  </body>
</html>

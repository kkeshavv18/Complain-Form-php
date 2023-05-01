<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/complain-admin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>List of Complaints</title>
  </head>
  <body>
    <div class="container-wrapper">
      <div class="header">
        <h1>List of Complaints</h1>
      </div>
      <div class="search-bar-wrapper">
        <input
          type="number"
          class="search-bar"
          id="searchId"
          placeholder="Search By Complain ID"
          onkeyup="searchById()"
        />

        <input
          type="text"
          class="search-bar"
          id="searchName"
          placeholder="Search By Name"
          value=""
          onkeyup="searchByName()"
        />
        <input
          class="search-bar"
          id="view-data"
          type="button"
          Value="View all Data"
          value=""
          onClick="viewAllData()"
        />
      </div>

      <div class="table-container">

        <?php
                  include "config.php"; // database configuration
                
                 
                  /* select query of complain table */
                  $sql = "SELECT * FROM complain";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) >
        0) {?>
        <table id="myTable">
          <thead>
            <th>Complain ID</th>
            <th>Name of Complainer</th>
            <th>Address of Complainer</th>
            <th>Contact number</th>
            <th>Subject of Complain</th>
           
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <tbody>
            <?php 
         
          while($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $row['complain_id']; ?></td>
              <td><?php echo $row['name_of_complainer'];?></td>
              <td><?php echo $row['address_of_complainer'];?></td>
              <td><?php echo $row['contact_of_complainer']; ?></td>
              <td><?php echo $row['subject_of_complain']; ?></td>
              <td class="view"><a href="complainView.php?complainId=<?php echo $row['complain_id']; ?>"><i class="fa-regular fa-eye"></i></a></td>
              <td class="edit"><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
              <td class="delete"><a href="#"><i class="fa-solid fa-trash"></i></a></td>

              <?php
         }  }?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script type="text/javascript" src="js/linearSearch.js"></script>
  </body>
</html>

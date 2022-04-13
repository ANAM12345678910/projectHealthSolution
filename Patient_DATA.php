<!DOCTYPE html>
<?php include "func.php";?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Patient_DATA</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div id="header">
    <div id="logosection">
      <div>
        <img src="img/logoi.png" alt="">
        <p>Multispeciality Hospital</p><br>
      </div>
      <div id="submenu">
        <p><a href="index">HOME</a></p>
      </div>
    </div>
    <p id="labelPD">Patient_DATA</p>
  </div>

  <div id="table_container">
    <div id="table_card">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Visited</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father Name</th>
            <th>Email id</th>
            <th>phonenumber</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Appointment For</th>
          </tr>
        </thead>
        <tbody>
          <?php get_patient_details();?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="footer">
    <p class="footer-data">© 2019-20 XYZ Health Solutions. | All Rights Reserved.</p>
  </div>
</body>

</html>
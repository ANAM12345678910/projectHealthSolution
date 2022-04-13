<?php
$con = mysqli_connect("localhost", "root", "", "health_solution");
if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from adminlogin where username='$username' and password='$password'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        header("Location:Patient_DATA");
    } else {
        echo "<script>alert('error login')</script>";
    }
}

if (isset($_POST['booking_data'])) {
    $visited = $_POST['firsttimevisit'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $fathername = $_POST['fathername'];
    $emailid = $_POST['email'];
    $phonenumber = $_POST['phno'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $docid = $_POST['docid'];
    $query = "insert into patient values('$visited', '$firstname', '$lastname', '$fathername', '$emailid', '$phonenumber', '$month', '$day', '$year', '$gender','$docid')";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>alert('Booking Successful!.')</script>";
        echo "<script>window.open('index','_self')</script>";
    } else {
        echo "<script>alert('error')</script>";
    }
}

function get_patient_details()
{
    global $con;
    $query = "select * from patient";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $visited = $row['visited'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $fathername = $row['fathername'];
        $emailid = $row['emailid'];
        $phonenumber = $row['phonenumber'];
        $month = $row['month'];
        $day = $row['day'];
        $year = $row['year'];
        $gender = $row['gender'];
        $docid = $row['docid'];
        echo "<tr>
      <td>$visited</td>
      <td>$firstname</td>
      <td>$lastname</td>
      <td>$fathername</td>
      <td>$emailid</td>
      <td>$phonenumber</td>
      <td>$day/$month/$year</td>
      <td>$gender</td>
      <td>$docid</td>
    </tr>";
    }
}
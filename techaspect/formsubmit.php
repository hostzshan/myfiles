<?php
extract($_POST);
// echo $name;
// echo $age;
// echo $address;
// echo $email;
// echo $mobile;
// echo $bloodGrp;
// echo $gender;

$db = mysqli_connect("localhost","root","","bbank");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $resultsum=mysqli_query($db,"SELECT * FROM applicant");
  $FILLregist="INSERT INTO applicant (name,age,address,email,mobile,bloodGrp,gender) values ('$name','$age','$address','$email','$mobile','$bloodGrp','$gender')";
  $db->query($FILLregist);
  echo "DATA SUCCESSFULY UPLOADED"
  // if ($row = mysql_fetch_assoc($result)) {
    // echo $row["name"];
    // echo $row["age"];
    // echo $row["address"];
// }
?>
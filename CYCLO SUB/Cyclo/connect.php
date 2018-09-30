<?php
$ridefrm = filter_input(INPUT_POST, 'stn_frm');
$rideto = filter_input(INPUT_POST, 'stn_to');
$start = filter_input(INPUT_POST, 'time1');
$end = filter_input(INPUT_POST, 'time2');
$date = filter_input(INPUT_POST, 'date');

  $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');


 $enrlno = filter_input(INPUT_POST, 'enrollno');
 $bhawan = filter_input(INPUT_POST, 'bhawan');

 if (!empty($firstname)){
if (!empty($lastname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Cyclo";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO booking (Ridefrom, Rideto, Start, Ending, Date, Firstname, Lastname, EnrollNum, Bhawan)
  values ( '$ridefrm','$rideto','$start','$end','$date','$firstname','$lastname','$enrlno','$bhawan')";
  if ($conn->query($sql)){
    header('Location: Suc.html');
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Field should not be empty";
  die();
}
 }
 else{
  echo "Field should not be empty";
  die();
 }
 ?>

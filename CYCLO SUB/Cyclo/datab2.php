<!DOCTYPE html>
<html>
<head>
 <title>Table with Reciept</title>
 <style>
 body{
background-image: url(image/W1.jpeg);
 }
 p{
   color: white;
   font-size: 32px;
 }
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     }
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
    <p>CURRENT FARE IS 8 RS./HOUR THIS IS SUBJECT TO AVAIBILITY OF CYCLES</p>
 <tr>
  <th>RideFrom</th>
  <th>RideTo</th>
  <th>Start</th>
  <th>Ending</th>
  <th>Date</th>
  <th>FirstName</th>
  <th>LastName</th>
  <th>EnrollNum</th>
  <th>Bhawan</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "Cyclo");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM booking ORDER BY ID DESC LIMIT 1" ;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Ridefrom"]. "</td><td>" . $row["Rideto"] . "</td><td>"
. $row["Start"]. "</td><td>" . $row["Ending"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Firstname"] . "</td><td>" . $row["Lastname"] . "</td><td>" . $row["EnrollNum"] . "</td>
<td>" . $row["Bhawan"]. "</td> </tr>";
}

echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>

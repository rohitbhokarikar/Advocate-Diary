<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>



</head>
<body>

    

 <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Advocate Diary</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="addclient.php">Add Client</a></li>
      <li><a href="viewrecords.php">View Reccords</a></li>
      <li><a href="profile.html">My Profile</a></li>
      <li><a href="dispose.php">Dispose Cases</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    </div>
  </nav>

  <div class="container">
  


<table id="customers">
<tr>
  <th>ID</th>
<th>PartyName</th>
<th>OPP.Party Name</th>
<th>Case Number </th>
<th>Next Date</th>
<th>Stage</th>
<th>Court Name</th>
<th>Phone Number</th>



















<?php
  $name = $_POST['cname'];
  
  $conn = mysqli_connect("localhost", "root", "", "useradv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID,name,opname,casenumber,nextdate,stage,courtname,phnumber FROM addclien where casenumber='$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["name"]. "</td><td>" . $row["opname"] . "</td><td>"
. $row["casenumber"]. "</td><td>" . $row["nextdate"] . "</td><td>" . $row["stage"]. "</td><td>" . $row["courtname"]. "</td><td>" . $row["phnumber"];
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    






<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<style type="text/css">

body
{
	background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img1.jpg);
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: white;
	font-size: 120%;
}
	
	#bill {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}

#bill td, #bill th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#bill tr:{background-color: transparent;}

#bill tr:hover {background-color: #ddd;}

#bill th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


</style>

<br><br>
<h2 align="center"  > Search Results</h2>

<br><br>

<table id = "bill">

<?php

include "servernext.php";

$getBill = $_GET["bill"];




$sql = "SELECT * FROM bill where `Customer Number` like '$getBill' or `Bill Number` like '$getBill'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<tr><th>Bill number</th><th>Customer Number</th><th>Variety</th><th>Amount</th><th>Date</th><th>Price</th></tr>";
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
     		<td>" . $row["Bill Number"]."</td>
			<td>" . $row["Customer Number"]."</td>
			<td>" . $row["Variety"]."</td>
			<td>" . $row["Amount"]."</td>
		    <td>" . $row["Date"]."</td>
			<td>" . $row["Price"]."</td></tr>";
		
    }
	echo "</table>";
	
} else {
   
}
   echo "<br>";
?>



</body>
</html>
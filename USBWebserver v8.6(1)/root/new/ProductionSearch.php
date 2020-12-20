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
	
	#product {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}

#product td, #product th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#product tr:{background-color: transparent;}

#product tr:hover {background-color: #ddd;}

#product th {
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

<table id = "product">

<?php

include "servernext.php";

$getProduct = $_GET["product"];



$sql = "SELECT * FROM production where `Product Number` like '$getProduct' or `Product Name` like '%".$getProduct."%' or DOM like '$getProduct'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<tr><th>Product Number</th><th>Product name</th><th>Batch No</th><th>Price per 1kg</th><th>Date of Manufacture
	     </th></tr>";
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
     		<td>" . $row["Product Number"]."</td>
			<td>" . $row["Product Name"]."</td>
			<td>" . $row["Batch No"]."</td>
			<td>" . $row["Price per 1kg"]."</td>
		    <td>" . $row["DOM"]."</td></tr>";
		
    }
	echo "</table>";
	
} else {
   
}
   echo "<br>";
?>



</body>
</html>
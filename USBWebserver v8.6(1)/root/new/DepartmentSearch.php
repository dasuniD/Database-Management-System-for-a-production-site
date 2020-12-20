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
  font-size: 120%;
  color: white;
}
	
	#dept {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}

#dept td, #dept th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#dept tr:{background-color: transparent;}

#dept tr:hover {background-color: #ddd;}

#dept th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  text-align: center;
}


</style>

<br><br>
<h2 align="center"  > Search Results</h2>

<br><br>


<table id = "dept">

<?php

include "servernext.php";

$getDept = $_GET["dept"];



$sql = "SELECT * FROM department where `Dep Number` like '$getDept' or `Dep Name` like '%".$getDept."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<tr><th>Dept number</th><th>Dept name</th><th>No of Workers</th>
	     </th></tr>";
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
     		<td>" . $row["Dep Number"]."</td>
			<td>" . $row["Dep Name"]."</td>
			<td>" . $row["No of Employees"]."</td></tr>";
		
    }
	echo "</table>";
	
} else {
   
}
   echo "<br>";
?>



</body>
</html>
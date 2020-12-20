<?php
   
include "servernext.php";

$num = $_GET["new_num"];
$enum = $_GET["new_enum"];
$salary = $_GET["new_salary"];
$epf = $_GET["new_epf"];
$etf = $_GET["new_etf"];
$salarypaid = $_GET["new_salarypaid"];
$epfpaid = $_GET["new_epfpaid"];
$etfpaid = $_GET["new_etfpaid"];
$newmonth = $_GET["new_month"];
 
//echo "<h2>Update Bill  $new_Date  $new_Varieties  $new_Values  $new_Total  </h2>";  

   $sql = "UPDATE payment SET  Employee Number ='$enum', Salary='$salary', EPF value ='$epf', ETF value= '$etf' , Salary paid ='$salarypaid' , EPF paid ='$epfpaid' , ETF paid ='$etfpaid' , Month ='$newmonth' WHERE Payment Number ='$num' ";


   $result = $conn->query($sql); //or die("An error has occured");
   echo $result;

   
include "displayPayment.php";


?>

<a href="index.php">Return to main page</a>


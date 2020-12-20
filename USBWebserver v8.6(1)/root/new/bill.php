<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#View
{
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img1.jpg);
}

#Insert 
{
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img10.jpg);
}

#Update 
{
  background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(img13.jpg);
}

#Delete 
{
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img14.jpg);
}

.btn {
  border-radius: 4px;
  background-color: transparent;
  border: groove;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border-color: white;
}

.btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn:hover span {
  padding-right: 25px;
}

.btn:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
</head>
<body>

<button class="tablink" onclick="openPage('View', this, 'grey')" id="defaultOpen" >View Data</button>
<button class="tablink" onclick="openPage('Insert', this, 'grey')" >Insert Data</button>
<button class="tablink" onclick="openPage('Update', this, 'grey')">Update Data</button>
<button class="tablink" onclick="openPage('Delete', this, 'grey')">Delete Data</button>

<div id="View" class="tabcontent">

  <br><br><br>

  


  <form method="get" action="BillSearch.php">
         <table align="center" style='font-family: Arial, Helvetica, sans-serif; font-size:150%'>
         
       <tr><td height="100">Search by Bill Number:</td><td><input type="text" name="bill" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td></tr>
       <tr><td height="100"><button  type="submit"  class="btn" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'><span>Search</span></td></tr>
         </table><br>
   
  </form>

  <form method="get" action="BillSearch.php">
         <table align="center" style='font-family: Arial, Helvetica, sans-serif; font-size:150%'>
         
       <tr><td height="100">Search by Customer Number:</td><td><input type="text" name="bill" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td></tr>
       <tr><td height="100"><button  type="submit"  class="btn" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'><span>Search</span></td></tr>
         </table><br>
   
  </form>
 
</div>


 




<div id="Insert" class="tabcontent">


  <form action="addforBill.php">
      <table align="center" style='font-family: Arial, Helvetica, sans-serif; font-size:150%'>
             <tr><td height="100">Bill Number:</td> <td><input type="text" name="new_name" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr> 
             <tr><td height="100">Customer Number:</td> <td><input type="text" name="new_contactno" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr> 
           <tr><td height="100">Variety:</td> <td><input type="text" name="new_address" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>   
           <tr><td height="100">Amount (kg):</td> <td><input type="text" name="new_salary" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>        
           <tr><td height="100">Date:</td> <td><input type="text" name="new_salary1" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>

           <tr><td height="100">Price (Rs):</td> <td><input type="text" name="new_salary2" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>
           <tr><td height="100"><button type="submit" class="btn"><span>Submit</span>
       </table>
     
  </form>


</div>



<div id="Update" class="tabcontent">

 <form action="updateBill.php">
      <table align="center" style='font-family: Arial, Helvetica, sans-serif; font-size:150%'>
             <tr><td height="100">Bill Number:</td> <td><input type="text" name="newBill" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr> 
             <tr><td height="100">Customer Number:</td> <td><input type="text" name="newDate" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr> 
           <tr><td height="100">Variety:</td> <td><input type="text" name="newVarieties" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>   
           <tr><td height="100">Amount (kg):</td> <td><input type="text" name="newValues" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>        
           <tr><td height="100">Date:</td> <td><input type="text" name="newTotal" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>

           <tr><td height="100">Price (Rs):</td> <td><input type="text" name="newTotal2" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>
           <tr><td height="100"><button type="submit" class="btn"><span>Submit</span>
       </table>
     
  </form>

  

</div>

<div id="Delete" class="tabcontent">

<form action="deleteBill.php">
      <table align="center" style='font-family: Arial, Helvetica, sans-serif; font-size:150%'>
             <tr><td height="100">Bill Number:</td> <td><input type="text" name="bill" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>         
           <tr><td height="100">Date:</td> <td><input type="text" name="bill" style='font-family: Arial, Helvetica, sans-serif; font-size:100%'></td> </tr>
           <tr><td height="100"><button type="submit" class="btn"><span>Submit</span>
       </table>
     
  </form>
  

</div>


<script>


function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 

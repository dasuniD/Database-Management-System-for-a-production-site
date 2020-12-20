<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>


<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img1.jpg);
}



.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  background-image: url("headerBack.jfif");
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  }

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>



<style>
.button {
  border-radius: 4px;
  background-color: transparent;
  border: groove;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 100px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

form
{
  display: inline-block;
  
}

</style>
</head>

<div class = "chooseButtons">

  <form method="get" action="employee.php">
    <button class="button"><span>Employee Details</span></button> 

  </form>


  <form method="get" action="department.php">
    <button class="button"><span>Department Details</span></button>

  </form>

  <form method="get" action="production.php">
    <button class="button"><span>Production Details</span></button>
  </form> 

  <form method="get" action="customer.php">
    <button class="button"><span>Customer Details</span></button>
  </form>


  <form  method="get" action="payment.php">
    <button class="button" ><span>Payment Details</span></button>

  </form>


  <form method="get" action="bill.php" >
    <button class="button"><span>Bill Details</span></button>

  </form>

</div>



</body>
</html>



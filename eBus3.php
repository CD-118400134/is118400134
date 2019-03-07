<!DOCTYPE html>
<html>
     <ul>
  <li><a href="ConsultingServices.html">Home</a></li>
  <li><a href="consultancy.html">About Consulting</a></li>
  <li><a href="eBus1.php">Services</a></li>
</ul> 
    <head>
        <title>eBusiness 3</title>
        <style>
             ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
            body{
                Background-color: powderblue;
                Background: Linear-gradient(to bottom left,grey,white)fixed; 
                font-size: larger;
                text-align: center;
                font-style: bold;
            }
        </style>
        
    <h1><b><u>Purchase Receipt</u></b></h1>
    <br>
    <br>
    <br>
    </head>
    <body>
        <!-- //Starting the session to get the session variable from the last page-->
    <?php
    
   
    session_start();
    $totalValue2 = $_POST['txtTotal'];
    $fullNameValue = $_POST['txtName'];
    $mobileNumber = $_POST['txtNum'];
    echo "<B>"."The name is : "."</B>".$fullNameValue.".";
    echo "<br></br>";
    echo "<br></br>";
    echo "<B>"."The mobile number is : "."</B>".$mobileNumber.".";
    echo "<br></br>";
    echo "<br></br>";
    echo "<B>"."The total value is : "."</B>".$totalValue2.".";
    ?>
        
    </body>
</html>

<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$mobileNumber = "";

/* 
 * Create a session variable for the mobile number
 */
$totalValue2 = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtNum'] = $mobileNumber;
$_SESSION['txtTotal'] = $totalValue2;


        
?>

<!DOCTYPE html>
<html>
     <ul>
  <li><a href="ConsultingServices.html">Home</a></li>
  <li><a href="consultancy.html">About Consulting</a></li>
  <li><a href="eBus1.php">Services</a></li>
</ul> 
    <style>
        .button4 {
            color: white;
            background-color: green;
            border-radius: 8px;
            
        }
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
            }
            td {
                font-size: larger;
            }
            input {
                font-size: large;
            }
    
    </style>
    <head>
        <title>eBusiness 2</title>       
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                  <center>
                      <h1><b><u>Payment</u></b></h1>
                      <br>
                      <br>
                      <br>
                      <h2><b>Please enter your Payment Details</b></h2>
                      <table cellspacing="10">
                         
                          <tr>
                              <td>Name</td>
                          </tr>
                          <tr>
                              <td><input style=width:130% type="text" id="txtName" class="input1" name="txtName" value="" required/></td>                              
                          </tr>
                          <tr>
                              <td>Mobile Number</td>
                          </tr>
                          <tr>
                              <td><input style=width:130% type="text" id="txtNum" name="txtNum" class="input2" value="" pattern="[0-9][0-9][0-9][-][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required/></td>                             
                          </tr>
                          <tr>
                              <td>PIN</td>
                          </tr>
                          <tr>
                              <td><input style=width:130% type="password" id="txtPIN" name="txtPIN" class="input3" value="" pattern="[0-9][0-9][0-9][0-9]"  required /></td>
                          </tr>
                          <tr>
                          <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue2;?>"/></td>
                          </tr>
                      </table>
                </center>
                  <center>
                      <p><input type="submit" name="btnProceed" class="button4" id="btnProceed" onclick="" value="Proceed with purchase"/></p>
                      
                      
                  </center>
            </form>
        </div>
    </body>
</html>


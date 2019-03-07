<!-- Creating a session variable and assigning it to txtTotal-->
<?php
session_start();
$totalValue2 = "";
$_SESSION['txtTotal'] = $totalValue2;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
   
    <head>
         <ul>
  <li><a href="ConsultingServices.html">Home</a></li>
  <li><a href="consultancy.html">About Consulting</a></li>
  <li><a href="eBus1.php">Services</a></li>
</ul> 
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            .button1 {
                background-color: green;
                color:white;
                width: 18%;
                border-radius: 8px;
                }
                
                .button2 {
                    background-color: #e0a800;
                    color: white;
                    border-radius: 8px;
                }
                .button3 {
                    color: red;
                    border-color: red;
                    border-radius: 8px
                    
                }
               
            
            body{
                Background-color: powderblue;
                Background: Linear-gradient(to bottom left,grey,white)fixed; 
                font-size: larger;
            }
            input {
               font-size:large;            
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
        </style>
    </head>
        <body>
        <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
           
                <br>
               
                
        
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b><h1><u>Select a Consulting Service</u></h1></b></td>
                
                </tr>
                <tr>
                
                    <td>Blockchain</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" required /></td>
                </tr>
                <tr>
                    <td>Autonomous Things (Robots)</td>
                    <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" required /></td>
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" required /></td>
                </tr>
            </table>
        </center>
        <br/>
        <br>
        <br>
      
            <center>               
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
        
        <br />
            <center>
               
            <input type="submit" name="btnProceed" class="button1" id="btnProceed" onclick="" value="Add to Shopping Cart" />     
            <br>
            <input type="button" name="btnCalc" class="button2" id="btnCalc" onclick="calcSub()" value="Calculate Cost" required/>        
            <input style=font type="button" name="btnClear" class="button3" id="btnClear" onclick="AmountClear()" value="Clear Choice"/>
        </center>
            </form>
        </div>
          
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var Autonomous = parseFloat(document.getElementById('Autonomous').value);
                    var Immersive = parseFloat(document.getElementById('Immersive').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calcDisVatTotal(subAmount);
                        
                    }
                   else if (document.getElementById('Autonomous').checked) {
                        document.intCalc.txtSubTot.value = Autonomous;
                        subAmount = Autonomous;
                        calcDisVatTotal(subAmount);
                        
                    }
                    else if (document.getElementById('Immersive').checked) {
                        document.intCalc.txtSubTot.value = Immersive;
                        subAmount = Immersive;
                        calcDisVatTotal(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calcDisVatTotal(parmSubTotal) {
                    var subTotal = parseFloat(parmSubTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting them into the correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
    </html> 



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .error  { color:red;}
  </style>
  
  
<script>
function validateForm() {
  var x = document.forms["myForm"]["t1"].value;
  alert(x);
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>

</head>
<style>
.col-md-6{
	padding:10px;

}
.ajay{
	color:blue;
	background-color:orange;
	
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 5px;
  cursor: pointer;
  padding-right:90px;
}
@media(max-600px</style>
<body>



 <?php
 $flag=1;
 $roll=$t2=$t5=$t6=$t7=$t8=$t9=$t10=$t11=$t12=$t13=$t14=$t15=$t16=$t17=$t18=$t19=$t20=$t21=$t22=$t23=$t24=$t26=$t27=$t28=$t29=$t33="";
include("connection.php");

error_reporting(0);

if(isset($_POST['BTN1'])){ // Fetching variables of the form which travels in URL
 $roll=$t2="";
$Q = $_POST['t1'];
$Q1 = $_POST['t2'];
$Q2 = $_POST['t3'];
$Q3 = $_POST['t4'];
$Q4 = $_POST['t5'];
$Q5 = $_POST['t6'];
$Q6 = $_POST['t7'];
$Q7 = $_POST['t8'];
$Q8 = $_POST['t9'];
$Q9 = $_POST['t10'];
$Q31 = $_POST['t31'];
$Q10 = $_POST['t11'];
$Q11 = $_POST['t12'];
$Q12 = $_POST['t13'];
$Q13 = $_POST['t14'];
$Q14 = $_POST['t15'];
$Q15 = $_POST['t16'];
$Q16 = $_POST['t17'];
$Q17 = $_POST['t18'];
$Q18 = $_POST['t19'];
$Q19 = $_POST['t20'];
$Q20 = $_POST['t21'];
$Q21 = $_POST['t22'];
$Q22 = $_POST['t23'];
$Q23 = $_POST['t24'];
$Q24 = $_POST['t25'];
$Q25 = $_POST['t26'];
$Q26 = $_POST['t27'];
$Q27 = $_POST['t28'];
$Q28 = $_POST['t29'];
$Q29 = $_POST['t30'];
$Q30 = $_POST['t32'];
$Q32 = $_POST['t33'];

//variables for error display

if(empty($Q))
{
	$roll="Enter Your Roll No";
	$flag=0;
	
}
if(empty($Q1))
{
	$t2="Enter Your COURSES";
	$flag=0;
	
}
if(empty($Q4))
{
	$t5="Enter Your SUBJECT";
	$flag=0;
	
}
if(empty($Q5))
{
	$t6="Enter Your NAME";
	$flag=0;
	
}
if(empty($Q6))
{
	$t7="Enter Your FATHERS NAME";
	$flag=0;
	
}
if(empty($Q7))
{
	$t8="Enter Your MOTHERS NAME";
	$flag=0;
	
}
if(empty($Q8))
{
	$t9="Enter Your EMAIL ID";
	$flag=0;
	
}
if(empty($Q9))
{
	$t10="Enter Your MOBILE";
	$flag=0;
	
}
if(empty($Q10))
{
	$t11="Enter Your PERMANENT ADDRESS";
	$flag=0;
	
}
if(empty($Q11))
{
	$t12="Enter Your PERSENT ADDRESS";
	$flag=0;
	
}
if(empty($Q12))
{
	$t13="Enter Your D.O.B";
	$flag=0;
	
}
if(empty($Q13))
{
	$t14="Enter Your GENDER";
	$flag=0;
	
}
if(empty($Q14))
{
	$t15="Enter Your 10TH BOARD";
	$flag=0;
	
}
if(empty($Q15))
{
	$t16="Enter Your 10TH YEAR PASSING";
	$flag=0;
	
}
if(empty($Q16))
{
	$t17="Enter Your 10TH PERCENTAGE";
	$flag=0;
	
}
if(empty($Q17))
{
	$t18="Enter Your +2 BOARD";
	$flag=0;
	
}
if(empty($Q18))
{
	$t19="Enter Your +2 SUBJECT";
	$flag=0;
	
}
if(empty($Q19))
{
	$t20="Enter Your +2 YEAR OF PASSING ";
	$flag=0;
	
}
if(empty($Q20))
{
	$t21="Enter Your +2 PERCENTAGE ";
	$flag=0;
	
}
if(empty($Q21))
{
	$t22="Enter Your +3 BOARD";
	$flag=0;
	
}
if(empty($Q22))
{
	$t23="Enter Your +3 SUBJECT";
	$flag=0;
	
}
if(empty($Q23))
{
	$t24="Enter Your +3  PASSING";
	$flag=0;
	
}
if(empty($Q24))
{
	$t25="Enter Your +3 PERCENTAGE";
	$flag=0;
	
}
if(empty($Q25))
{
	$t26="Enter Your P.G BOARD";
	$flag=0;
	
}
if(empty($Q26))
{
	$t27="Enter Your P.G SUBJECT";
	$flag=0;
	
}
if(empty($Q27))
{
	$t28="Enter Your P.G YEAR OF PASSING";
	$flag=0;
	
}
if(empty($Q28))
{
	$t29="Enter Your P.G PERCENTAGE";
	$flag=0;
	
}


if(empty($Q32))
{
	$t33="Enter Your  RE ENTERPASSWORD";
	$flag=0;
	
}

if($flag==1){
$query="INSERT INTO register(ROLL,COURSES,ADDM,STREAM,SUBJECT,SNAME,FNAME,MNAME,EMAIL,MOB,MOBIL,PADDRE,PERADDRE,DOB,GENDER,TENBOARD,10THPASS,TENPERCENTAGE,12THBOARD,12THPASS,12THSUB,12PERCENT,13THBOARD,13THPASS,13THSUBJECT,13THPERCENT,PGBOARD,PGSUB,PGPASS,PGPERCENT,OTHER,PASSWORD,REPASSWORD)values('$Q','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q31','$Q10','$Q11','$Q12','$Q13','$Q14','$Q15','$Q16','$Q17','$Q18','$Q19','$Q20','$Q21','$Q22','$Q23','$Q24','$Q25','$Q26','$Q27','$Q28','$Q29','$Q30','$Q32')";
$data=mysqli_query($conn,$query);


if($data)
{
ECHO "INSERTED";
}
ELSE
{
	ECHO "ERROR";
}
}
}
?>


<div class="container-fluid">


 <center> <h1>REGISTRATION FORM</h1> </center>
  <div class="">
    <div class="" style="background-color:;">
	<form name="myform" method="POST" action="#" onsubmit="return validateForm()">
	
	<table>
	<tr><th>ROLLNO<span class="error">* <?php echo $roll; ?></span></th><td><input type="text" name="t1" ></td></tr>
   
	<tr><th>COURSES<span class="error">* <?php echo $t2; ?></span></th><td><select id="message" name="t2"><option>U.G</option>
	<option>P.G</option></td></tr>
	
	</select>
	
	
  
	<tr><th>ADMISSION YEAR</th><td><select id="text" name="t3"><option>2004</option></h1>
	<option>2005</option>
	<option>2006</option>
	<option>2007</option>
	<option>2008</option>
	<option>2009</option>
	<option>2010</option>
	<option>2011</option>
	<option>2012</option>
	<option>2013</option>
	<option>2014</option>
	<option>2015</option>
	<option>2016</option>
	<option>2017</option>
	<option>2018</option>
	<option>2019</option></td></tr>
	</select>
	 
	 <tr><th>STREAM</th><td><select name="t4"><option>ARTS</option></h2>
	<option>SCIENCE</option>
	<option>COMMERCE</option>
	</select>
	<tr><th> SUBJECT<span class="error">* <?php echo $t5; ?></th><td><input type="text" name="t5"></h3></td></tr>
	
	</table>
	
	 
	
      </div>
  </div>
  
</div>
<center><h1>PERSONAL INFORMATION</h1></center>
<hr>
<div class="">



<table>

<tr><th>NAME<span class="error">* <?php echo $t6; ?></th><td><input type="text" name="t6"></h6></td></tr>
<tr><th>FATHERS NAME<span class="error">* <?php echo $t7; ?></th><td><input type="text" name="t7"></h6></td></tr>
<tr><th>MOTHERS NAME<span class="error">* <?php echo $t8; ?></th><td><input type="text" name="t8"></h6></td></tr>
<tr><th>EMAIL ID<span class="error">* <?php echo $t9; ?></th><td><input type="text" name="t9" placeholder="email"></h6></td></tr>
<tr><th>MOBILE<span class="error">* <?php echo $t10; ?></th><td><input type="text" name="t10" placeholder="mobile"> <input type="text" name="t31" placeholder="mobile"></h6></td></tr>
<tr><th>PERMANT ADDRESS<span class="error">* <?php echo $t11; ?></th><td><input type="textarea" name="t11"></h6></td></tr>

<tr><th>PERSENT ADDRESS<span class="error">* <?php echo $t12; ?></th><td><input type="textarea" name="t12"></h6></td></tr>

<tr><th>D.O.B<span class="error">* <?php echo $t13; ?></th><td><input type="date" name="t13"> </td></tr>
<tr><th>GENDER<span class="error">* <?php echo $t14; ?></th><td><input type="radio" name="t14" value="male"> Male <input type="radio" name="t14" value="female"> FeMale<br></h6></td></tr>
</table>



</div>

<table class="table table-hover">
  
    <tr>
      <th><h3>class</h3></th>
     
    </tr>
 
  
   
	<tr>
      <th >10thboard<span class="error">* <?php echo $t15; ?></th>
      <td><input type="text" name="t15"></td>
     
   
	
	
	
	<tr>
      <th>10th year of passing<span class="error">* <?php echo $t16; ?></th>
      <td><input type="text" name="t16" ></td>
      
     
    </tr>
	<tr>
      <th>10thpecentage<span class="error">* <?php echo $t17; ?></th>
      <td><input type="text" name="t17"></td>
     
    </tr>
	<tr>
      <th>+2board<span class="error">* <?php echo $t18; ?></th>
      <td><input type="text" name="t18"></td>
     
    </tr>
	<tr>
      <th> +2 subject<span class="error">* <?php echo $t19; ?></th>
      <td><input type="text" name="t19"></td>
      
    </tr>
	<tr>
      <th>+2 year of passing<span class="error">* <?php echo $t20; ?></th>
      <td><input type="text" name="t20"></td>
      
     
    </tr>
	<tr>
      <th>+2 pecentage<span class="error">* <?php echo $t21; ?></th>
      <td><input type="text" name="t21"></td>
     
    </tr>
	<tr>
      <th>+3 board<span class="error">* <?php echo $t22; ?></th>
      <td><input type="text" name="t22"></td>
     
    </tr>
	<tr>
      <th> +3 subject<span class="error">* <?php echo $t23; ?></th>
      <td><input type="text" name="t23"></td>
      
    </tr>
	<tr>
      <th>+3 year of passing<span class="error">* <?php echo $t24; ?></th>
      <td><input type="text" name="t24"></td>
      
     
    </tr>
	
	<tr>
      <th>+3 pecentage<span class="error">* <?php echo $t25; ?></th>
      <td><input type="text" name="t25"></td>
     
    </tr>
	<tr>
      <th>P.G board<span class="error">* <?php echo $t26; ?></th>
      <td><input type="text" name="t26"></td>
     
   
	
	<tr>
      <th> P.G subject<span class="error">* <?php echo $t27; ?></th>
      <td><input type="text" name="t27"></td>
      
    </tr>
	<tr>
      <th>P.G year of passing<span class="error">* <?php echo $t28; ?></th>
      <td><input type="text" name="t28"></td>
      
     
    </tr>
	
	
	<tr>
      <th>P.G pecentage<span class="error">* <?php echo $t29; ?></th>
      <td><input type="text" name="t29"></td>
     
    </tr>
</table>



<h4>ANY OTHER<input type="text"></h4>

<hr> 

<h5>PASSWORD<input type="text" name="t32">REENTER PASSWORD<span class="error">* <?php echo $t33; ?><input type="text" name="t33"></h5>
<br>
     <input type="submit" NAME="BTN1" class="button" value="submit">
	  <a href="#" class="button">RESET</a>
<button class="button">SUBMIT</button>
<input type="button" class="button" value="CANCEL">
<hr>
	  

</form>
 
 




</body>



</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  
  <style>
  
  
  body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 20%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 90%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	.ram{
		padding:10px;
	}
	.box{
	
  width: 200px;
  padding: 10px;
  height:300px;
  border: 5px solid gray;
  margin: 0;
}
.babu{
	
  width: 200px;
  padding:10px;
  height:300px;
  border: 5px solid gray;
  margin: ;
}


.boxes{
	
  width: 170px;
  padding: 10px;
  height:70px;
  border: 5px solid gray;
  margin-right:10px;
}
.boxess{
	
  width: 165px;
  padding: 8px;
  height:67px;
  border: 5px solid gray;
  margin-right:9px;;
}
.boxesss{
	
  width:160px;
  padding: 7px;
  height:65px;
  border: 5px solid gray;
  margin-right:8px;
}
.email{
	width:40%;
}
.emai{
	width:40%;
}
.lol{
	padding:5px;
	margin:10px;
	color:green;
}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	 
	  <div class="ram">
      <img src="./img/lo.jpg"  >
    </div>
	</div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <BR>
        <center><font  size="60" color="red"><h1><b>RAVENSHAW UNIVERSITY</b></h1></font></center>
		
       <center><font face="verdana" size="60" color="red"><h1><B>PLACEMENT AUTOMATION</B></h1></font></center>
      
	  
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
  
    <div class="col-sm-2 sidenav">
	<center><h4><b>PLACEMENT DETAILS</b></h4></center>
	 <div class="box">  
   <div class="boxes">  <p><a href="#">Link</a></p></div><br>
    <div class="boxess">  <p><a href="#">Link</a></p></div><br>
      <div class="boxesss"><p><a href="#">Link</a></p></div><br>
    </div>
	</div>
    <div class="col-sm-8 text-left"> 
	
	<center><h5>LOGIN FORM</h5>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div class="lol">
 <a href=welcome.php><input type='button' value='NEW USER'></a>
	  </div>
	  

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./img/lo.jpg"  alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      
	  
	  <button type="submit" name="t3">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="forget.php">password?</a></span>
	  <br>
	  <span class="psw">NEW  <a href="#">user</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

   

	
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-2 sidenav">
	<center><h4><b>IMPORTANT NOTICE</b></h4></center>
      <div class="babu">
      
<marquee direction="up" height="70%">
<h4><span style="color:blue">* ACADEMY WAS CLOSE DUE TO strike</span></h4>
<br>
<h4><span style="color:blue">* EXAM WAS START FROM---</span></h4><br>
<h4><span style="color:blue"><b>* ACADEMY OPEN DATE------</span></b></h4>
	   </marquee>
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
<div class="eamil">
<table id="customers">

  </table>
  </div>
 <h4><span style="color:red">All @COPY RIGHTS RESRVED BY RAVENSHAW UNIVERSITY</span></h4>
</footer>

  
</div>
</body>

</html>

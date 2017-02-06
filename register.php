<?php
session_start();
$conn = NEW MySQLi ("localhost","root","","tech_mahindra");
 
   if (!empty($_SESSION['email'])) {
   	    header("location:home.php"); 
       }

  if (isset($_POST['Register'])) {
       $fname = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $password_encrypt = md5($password);
       $mobile = $_POST['mobile'];

       $check_email = "SELECT email FROM tech_table WHERE email = '$email'";
       $email_checked = $conn->query($check_email);
     if ($email_checked->num_rows>0) {
         echo "<script>alert('User Already Exists');</script>";
    }else{
    
            $insert_value = "INSERT INTO tech_table (id,fullname,email,password,mobile) VALUES('id','$fname','$email','$password_encrypt','$mobile')";
             $conn_to_insert = $conn->query($insert_value);
           if ($conn_to_insert) {
              $_SESSION['email'] = $email;
    	          header("location:login.php");
   	        }else{
                echo "<script>alert('Registeration Failed Please Try Again');</script>";
   	             }
         }
   } 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register || upX</title>
    <link rel="shortcut icon" href="image/upxlogo.png" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<script type="text/javascript" src ="file/cycle/jquerycycle.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style type="text/css">
    #top_bar{z-index:100;position:fixed;top:0px;left:0px;width:1348px;height:70px;background-color:white;
           
            display: block;   background: linear-gradient( rgba(0,0,0,0.50), rgba(0,0,0,0.50));
    box-shadow: 0px 2px 2px 0px #000;
    background: -webkit-linear-gradient(to left, rgba(0,0,0,0.41), rgba(0,0,0,0.41));
    background: -o-linear-gradient(to left, rgba(0,0,0,0.41), rgba(0,0,0,0.41));
    background: -moz-linear-gradient(to left, rgba(0,0,0,0.41), rgba(0,0,0,0.41)); 
color: rgba(0, 159, 0, 0.3);} 


         }
 #logo_icon_container{position:absolute;left:30px;width:100px;height:70px;top:0px;     }
 #mid_bar{position:absolute;width:1348px;height:650px;top:0px;left:0px;background-color:#d0d0d0;      }	
 #agenda{position:absolute;left:140px;width:100px;height:70px;top:0px;background-color:#f0f0f0 ;font-family:"monotype";font-size: 20px;color:white; border-radius:2px 2px 2px 2px;  
     display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;
   }

  #agenda:hover{color:#0099ff; height:75px;width:105px;font-family:"arial narrow";}  
 
 .p_tag_id{ display: block;margin-top:2em;margin-bottom:3em;margin-left:0; margin-right: 0;}
 #Speakers{position:absolute;left:250px;width:100px;height:70px;top:0px;background-color:#f0f0f0;font-family:"monotype";font-size: 20px;color:white; border-radius:2px 2px 2px 2px ;
         display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;}
    #Speakers:hover{color:#0099ff; height:75px;width:105px;font-family:"arial narrow";}
 #Sessions{position:absolute;left:360px;width:100px;height:70px;top:0px;background-color:#f0f0f0;font-family:"monotype";font-size: 20px;color:white;border-radius:2px 2px 2px 2px ;display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;}
   #Sessions:hover{color:#0099ff; height:75px;width:105px;font-family:"arial narrow";} 
 #About_us{position:absolute;left:470px;width:100px;height:70px;top:0px;background-color:#f0f0f0;font-family:"monotype";font-size: 20px;color:white;border-radius:2px 2px 2px 2px ;display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;}
   #About_us:hover{color:#0099ff; height:75px;width:105px;font-family:"arial narrow";} 
 #our_courses{position:absolute;left:580px;width:120px;height:70px;top:0px;background-color:#f0f0f0;font-family:"monotype";font-size: 20px;color:white;border-radius:2px 2px 2px 2px ;display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;}
    #our_courses:hover{color:#0099ff; height:75px;width:105px;font-family:"arial narrow";}

  #login_box{position:absolute;right:80px;width:120px;height:70px;top:0px;background-color:#f0f0f0;font-family:"monotype";font-size: 20px;color:white;border-radius:2px 2px 2px 2px ;display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;}  
    #login_box:hover{color:#0099ff; height:75px;width:105px;font-family:"arial narrow";}


	#mid-container{position: absolute;width:1348px;height:600px;left:0px;top:70px;background-color:#f0f0f0; }
	#logo-container{position:absolute;width:600px;height:300px;left:100px;top:60px;background-color:;}
    
    #hp-logo{position:absolute;left:50px;width:100px;height:100px;top:50px;}
    #salesforce-logo{position:absolute;left:190px;width:150px;height:100px;top:50px;}
    #hortonworks-logo{position:absolute;left:370px;width:100px;height:100px;top:50px;}
    #ebay-logo{position:absolute;left:80px;width:100px;height:100px;top:180px;}
    #amadeus-logo{position:absolute;left:220px;width:100px;height:100px;top:180px;}
    #amazon-logo{position:absolute;left:350px;width:100px;height:100px;top:180px;}
    .legend{font-family:"rebel" ;font-size:25px;color:#0099ff  }

    #Register-container{position:absolute;right:100px;width:500px;height:400px;top:60px;background-color:;}
    #name{position:absolute;left:100px;top:50px;width:300px;height:40px;background-color:white;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;font-size:18px;font-family:"monotype";border-radius:5px 5px 5px 5px; }
      
    #email{position:absolute;left:100px;top:100px;width:300px;height:40px;background-color:white;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;font-size:18px;font-family:"monotype";outline:none;border-radius:5px 5px 5px 5px;}
    #password{position:absolute;left:100px;top:150px;width:300px;height:40px;background-color:white;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;font-size:18px;font-family:"monotype";outline:none;border-radius:5px 5px 5px 5px;}
    #mobile{position:absolute;left:100px;top:200px;width:300px;height:40px;background-color:white;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;font-size:18px;font-family:"monotype";outline:none;border-radius:5px 5px 5px 5px;}
    #register-btn{position:absolute;left:100px;top:265px;width:300px;height:40px;background-color:#0099ff;;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;outline:none;border-radius:3px 3px 3px 3px;font-family:"monotype";font-size:20px;font-weight: bold; color:#f0f0f0}
</style>
</head>
<body>
  

 <div id="top_bar">
  <div id="logo_icon_container">
    <img src="image/upxlogo.png" width="100px" height="70px">
     <a href="agenda.php"><div id="agenda"><center><p class="p_tag_id">Agenda</p></center></div></a>
      <a href="speaker.php"><div id="Speakers"><center><p class="p_tag_id">Speakers</p></center></div></a>
      <a href="session.php"><div id="Sessions"><center><p class="p_tag_id">Sessions</p></center></div></a>
      <a href="aboutus.php"><div id="About_us"><center><p class="p_tag_id">About Us</p></center></div></a>
      <a href="course.php"><div id="our_courses"><center><p class="p_tag_id">Our Courses</p></center></div></a>
     
  </div>
</div>

<div id="mid-container">
     <div id="Register-container">
     	<legend class="legend"><center>Be A Part Of Our Academy</center></legend>
     	<form action="register.php" method="POST">
     	    <input id="name" type="text" name="name" placeholder=" FullName" required><br><br>
     	    <input id="email" type="text" name="email" placeholder=" Email" required><br><br>
     	    <input id="password" type="password" name="password" placeholder=" Password" required><br><br>
     	    <input id="mobile" type="text" name="mobile" placeholder=" Mobile No" required><br><br>

     		<button id="register-btn" name="Register">Register</button>
     	</form>
     </div>
	<div id="logo-container">
	  <legend class="legend"><center>LEARN FROM BEST PRACTITIONER'S</center></legend>
	   <div id="hp-logo"><img src="image/hp_logo.jpg" width="100px" height="100px"></div>
	   <div id="salesforce-logo"><img src="image/salesforce_logo.png" width="150px" height="100px"></div>
	   <div id="hortonworks-logo"><img src="image/hortonworks.png" width="100px" height="100px"></div>
	   <div id="ebay-logo"><img src="image/ebay.png" width="100px" height="100px" ></div>
	   <div id="amadeus-logo"><img src="image/Amadeus.png"  width="100px" height="100px"></div>
	   <div id="amazon-logo"><img src="image/amazon.png" width="100px" height="100px"></div>
		
	</div>

</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
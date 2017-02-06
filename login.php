<?php
session_start();

if(!empty($_SESSION['email'])){
  header("location:home.php");
}


$conn = new MySQLi("localhost","root","","tech_mahindra");

  if (isset($_POST['submit'])) {
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $password_encrypt = md5($password);
    
    $check_email = "SELECT * FROM tech_table WHERE email='$email' && password ='$password_encrypt'";
    $check_email_exist = $conn->query($check_email);

    if ($check_email_exist->num_rows > 0){
      $_SESSION['email'] = $email;
      header("Location:home.php");
    }else{
      echo "<script>alert('Wrong Email and Password Combination')</script>";
    }

  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In || upX</title>
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
 #agenda{position:absolute;left:140px;width:100px;height:70px;top:0px;background-color:#f0f0f0 ;font-family:"monotype";font-size: 20px;font-weight:bold;color:white; border-radius:2px 2px 2px 2px;  
     display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;
   }

  #agenda:hover{color:#0099ff; height:75px;width:105px;font-family:"arial narrow";    }  
 
 .p_tag_id{ display: block;margin-top:2em;margin-bottom:3em;margin-left:0; margin-right: 0;}
 #Speakers{position:absolute;left:250px;width:100px;height:70px;top:0px;background-color:#f0f0f0;font-family:serif;font-size: 20px;font-weight:;color:white; border-radius:2px 2px 2px 2px ;
         display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;
         }
 #Sessions{position:absolute;left:360px;width:100px;height:70px;top:0px;background-color:#f0f0f0;font-family:cursive;font-size: 20px;font-weight: bold;color:white;border-radius:2px 2px 2px 2px ;display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;}
 #About_us{position:absolute;left:470px;width:100px;height:70px;top:0px;background-color:#f0f0f0;font-family:cursive;font-size: 20px;font-weight: bold;color:white;border-radius:2px 2px 2px 2px ;display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;}
 #our_courses{position:absolute;left:580px;width:120px;height:70px;top:0px;background-color:#f0f0f0;font-family:cursive;font-size: 20px;font-weight: bold;color:white;border-radius:2px 2px 2px 2px ;display: block;   background: linear-gradient( rgba(0,0,0,0.10), rgba(0,0,0,0.10));
    box-shadow: 0px 3px 3px 0px #000;}


	#login_form_container{position: absolute;width:1348px;height:650px;left:0px;top:0px;}
	#form_container{position:absolute;width:600px;height:280px;top:200px;right:100px;background-color: lightgreen;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;font-size:18px;font-family:calibri;outline:none;border-radius:5px 5px 5px 5px;
      background: linear-gradient( rgba(0,0,0,0.30), rgba(0,0,0,0.30));
    box-shadow: 0px 2px 2px 0px #000;
    background: -webkit-linear-gradient(to left, rgba(0,0,0,0.41), rgba(0,0,0,0.41));
    background: -o-linear-gradient(to left, rgba(0,0,0,0.41), rgba(0,0,0,0.41));
    background: -moz-linear-gradient(to left, rgba(0,0,0,0.41), rgba(0,0,0,0.41)); 
    color: rgba(0, 159, 0, 0.3);
    }
	#left_para{position:absolute;left:80px;width:550px;height:300px;top:170px;background-color:}
    h7{font-family:"courier new"; font-size:45px;color:skyblue;margin-left:30px;     }
    h8{font-family:"myFirstFont"; font-size:33px;font-weight:bold;color:orange;font-style:oblique;box-shadow:0px 1px 0px 1px orange ;outline: none;}
    h9{font-size:15px;font-weight: bold;color:#f0f0f0  }

    #email{position:absolute;left:150px;top:60px;width:300px;height:40px;background-color:white;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;font-size:18px;font-family:calibri;outline:none;border-radius:5px 5px 5px 5px;color:#a0a0a0; }
    #email_span{font-family:"arial narrow";font-size:20px;font-weight:bold;margin-left:30px; color:white;margin-top:60px; }
    #password{position:absolute;left:150px;top:110px;width:300px;height:40px;background-color:white;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;font-size:18px;font-family:calibri;outline:none;border-radius:5px 5px 5px 5px;color:#a0a0a0 }
    #password_span{font-family:"arial narrow";font-size:20px;font-weight:bold; margin-left:30px;color:white;  }
    #button_submit{position:absolute;left:150px;top:170px;width:300px;height:40px;background-color:#0099ff;;border:none;box-shadow:0px 0px 1px 1px #a0a0a0;outline:none;border-radius:3px 3px 3px 3px;font-family:"monotype";font-size:20px;font-weight: bold; color:#f0f0f0 }
    #register_para{position:absolute;width:350px;height:50px;left:130px;top:220px;font-family:"monotype";font-size:20px;
                  color:#f7fbfc;font-weight:bold; }
     a{color:#83db95;}
     a:hover{color:#d0d0d0; } 
     .legend{font-family:"rebel" ;font-size:25px;color:#0099ff  }

</style>
</head>
<body>

 <div id="top_bar">
  <div id="logo_icon_container">
    <a href="index.php"><img src="image/upxlogo.png" width="100px" height="70px"></a>
     <a href="agenda.php"><div id="agenda"><center><p class="p_tag_id">Agenda</p></center></div></a>
      <a href="speaker.php"><div id="Speakers"><center><p class="p_tag_id">Speakers</p></center></div></a>
      <a href="session.php"><div id="Sessions"><center><p class="p_tag_id">Sessions</p></center></div></a>
      <a href="aboutus.php"><div id="About_us"><center><p class="p_tag_id">About Us</p></center></div></a>
      <a href="course.php"><div id="our_courses"><center><p class="p_tag_id">Our Courses</p></center></div></a>
     
  </div>
</div>

<div id="login_form_container">
	 <img src="image/wall.jpg" width="1348px" height="650px">
	   <div id="form_container">
	       <form action="" method="POST">
	       	 <fieldset>
	       	  <legend class="legend"><center>Log In With Us</center></legend>
	       	 	<span id="email_span"> Email:</span><input id="email" type="text" name="email" placeholder=" Email" required><br><br>
	       	 	<span id="password_span"> Password:</span><input id="password" type="Password" name="password" placeholder=" Password" required><br><br>
	       	 	<button id="button_submit" name="submit">LOG IN</button>
	       	 </fieldset>
	       </form>
	 	    <div id="register_para">New To Our Academy <a href="register.php">Register for free</a></div>
	    </div>
	 <div id="left_para">
	   <center><p>
	          <h7>PRESENTING<br>INDIA'S LARGEST</h7><br><h8>BIG DATA ANALYTICS CAREER SERIES</h8><br><h9>                  19th feb ownards</h9>
	    </p></center>
	 </div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
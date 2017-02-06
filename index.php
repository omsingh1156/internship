<?php
session_start();

if(!empty($_SESSION['email'])){
  header("location:home.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>upX</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
 
 #slideshow{position:relative;box-shadow:0px 0px 0px 0px #000;}
.slide1{position:absolute;display:none;}
 .slide2{position:absolute;display:none;}
.slide3{position:absolute;display:none;}

#bottom_bar{position:absolute;top:650px;height:200px;width:1348px;left:0px;background-color:#f0f0f0;font-size:20px;font-family: cursive; font-weight:bold;}
 #techm-image{position:absolute;right:50px;top:25px;}
 #go_to_upx{position:absolute;bottom:30px;width:200px;height:30px;left: 30px;background-color:none;font-family:calibri;font-size:10px;font-weight: bold;color:#000;}

a:link, a:visited {
    background-color:none;
    color:#a0a0a0;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    margin-left:20px; 
}

a:hover, a:active {
    color:#0099ff;
}

#copyright_para{position: absolute;right:20px;top:150px;font-family:calibri;   }

#live_and_interactive{position:absolute; }
.span{margin-left:20px  }
 .legend{margin-left:20px; }

 </style>
<script type="text/javascript">
	
	$(document).ready(function(){

      setInterval(function(){
    
    $(".slide1 ").fadeToggle(5000);
    $(".slide2 ").fadeToggle(6000);
    $(".slide3 ").fadeToggle(7000);
   
     
  },"fast");

});
  
</script>

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
     <a href="login.php"><div id="login_box"><center><p class="p_tag_id">Log In</p></center></div></a>
  </div>
</div>
<div id="mid_bar">
  <div id="slideshow">
   <img class="slide1" src="image/b1.jpeg" width="1348px" height="650px">
   <img class="slide2" src="image/b2.jpg" width="1348px" height="650px">
   <img class="slide3" src="image/2.png"  width="1348px" height="650px">
  </div>
  </div>
<div id="bottom_bar"><legend class="legend">  Powered By</legend>
     <span class="span">Go Live:</span> <a href="https://www.youtube.com/channel/UClV2F9nSDxUwwkzM4qOwIvg">Live & Interactive</a><br>
     <img id="techm-image" src="image/techm.png" width="200px" height="50px">
     <span class="span">Visit:</span><a href="https://upxacademy.com/">www.upxacademy.com</a><br>
     <span class="span">Email:</span><a href="https://info@upxacademy.com">info@upxacademy.com</a>
     <p id="copyright_para">&copy; 2016 upX.All Rights Reserved<p>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html> 
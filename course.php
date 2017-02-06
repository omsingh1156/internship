<!DOCTYPE html>
<html>
<head>
	<title>course || upx</title>
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
    #our_courses:hover{color:#0099ff; height:75px;width:150px;font-family:"arial narrow";}
  
  #middle-box{position:absolute;width:1348px;height:550px;top:80px;left:0px;background-color:#f0f0f0; }
  #course{position:absolute;width:930px;height:400px;top:70px;left:200px;background-color:#d0d0d0;box-shadow:0px 2px 2px 2px #a0a0a0;}
  .legend{font-family:"monotype";font-size:40px;}
  #big-data{position:absolute;width:400px;height:300px;left:50px;top:80px;background-color:#0099ff;border-radius:5px 5px 5px 5px;}
  #data-science{position:absolute;width:400px;height:300px;right:50px;top:80px;background-color:#0099ff;border-radius:5px 5px 5px 5px;}
  #hadoop{position:absolute;left:0px;top:58px;background-color:;width:400px;height:60px;border-radius:5px 5px 5px 5px;font-family:"monotype";font-size:40px;color:white}
  #hadoop:hover{color:#a0a0a0;font-weight:bold  }
  #apache{position:absolute;left:0px;top:125px;width:400px;height:60px;border-radius:5px 5px 5px 5px;font-family:"monotype";font-size:40px;color:white;}
  #apache:hover{color:#a0a0a0;font-weight:bold  }
  #mongo{position:absolute;left:0px;top:193px;width:400px;height:60px;border-radius:5px 5px 5px 5px;font-family:"monotype";font-size:40px;color:white;}
  #mongo:hover{color:#a0a0a0;font-weight:bold  }
  #know-more{position:absolute;bottom:2px;font-family:"couriernew" ;font-size:20px;width:200px;height:30px;color:white;left:90px; }
  #know-more:hover{color:#a0a0a0;font-weight:bold  }

   #data-analytic{position:absolute;left:0px;top:58px;background-color:;width:400px;height:60px;border-radius:5px 5px 5px 5px;font-family:"monotype";font-size:40px;color:white;}
   #data-analytic:hover{color:#a0a0a0;font-weight:bold  }
   #machine{position:absolute;left:0px;top:125px;width:400px;height:70px;border-radius:5px 5px 5px 5px;font-family:"monotype";font-size:35px;color:white;}
    #machine:hover{color:#a0a0a0;font-weight:bold  }
   #TABLEAU{position:absolute;left:0px;top:193px;width:400px;height:60px;border-radius:5px 5px 5px 5px;font-family:"monotype";font-size:40px;color:white;}
   #TABLEAU:hover{color:#a0a0a0;font-weight:bold  }
   #know-more-data{position:absolute;bottom:2px;font-family:"couriernew" ;font-size:20px;width:200px;height:30px;color:white;left:90px; }
   #know-more-data:hover{color:#a0a0a0;font-weight:bold  }
   #ml{position:absolute;right:80px;width:100px; height:300px ;top:70px;  }
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
<div id="middle-box">
      <div id="hadooplogo">
           <img src="image/hadooplogo.png" width="200px" height="350px">
	   </div>
	     <div id="ml">
	     	<img src="image/ml.png" width="150px" height="300px" >
	    </div>
	   <div id="course">
	     <legend class="legend"> <center>Our Courses</center></legend>
	         <div id="big-data">
	     	     <legend class="legend"><center>Big Data</center></legend>
	     	      <a href="http://upxacademy.com/courses/"><div id="hadoop"><center> HADOOP</center></div></a>
	     	       <a href="http://upxacademy.com/courses/"><div id="apache"><center>APACHE SPARK</center></div></a>
	     	       <a href="http://upxacademy.com/courses/"><div id="mongo"><center>MONGO DB</center></div></a>
	     	        <a href="http://upxacademy.com/courses/"><div id="know-more"><center>Know More</center></div></a>
	         </div>
	         <div id="data-science">
	         	  <legend class="legend"><center>Data Science</center></legend>
	         	   <a href="http://upxacademy.com/courses/"><div id="data-analytic"><center>DATA ANALYTICS</center></div></a>
	         	   <a href="http://upxacademy.com/courses/"><div id="machine"><center>MACHINE LEARNING</center></div></a>
	         	   <a href="http://upxacademy.com/courses/"><div id="TABLEAU"><center>TABLEAU</center></div></a>
	         	   <a href="http://upxacademy.com/courses/"><div id="know-more-data"><center>Know More</center></div></a>
	         </div>
	  	
	  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
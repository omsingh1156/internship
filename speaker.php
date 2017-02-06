<!DOCTYPE html>
<html>
<head>
	<title></title>

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

        #speaker-container{position:absolute;width:1348px;height:650px;top:0px;left:0px;background-color:#b0b0b0;}
        #speakers-legend{position:absolute;top:150px;text-align:center;font-family:"monotype";font-size:30px;color:#5d6675}
        #image-container{position:absolute;width:1100px;height:400px;top:190px;left:100px;background-color:#e0e0e0 ;}
	    #manvender{position:absolute;width:260px;height:260px;top:60px;left:10px;border-radius:90px;background-color:#a0a0a0;}
	    #sandeep{position:absolute;width:260px;height:260px;top:60px;left:290px;border-radius:90px;background-color:#a0a0a0;}
	 #next-image{position:absolute;width:260px;height:260px;top:60px;left:560px;border-radius:90px;background-color:#a0a0a0;}
	 #balnk-image{position:absolute;width:260px;height:260px;top:60px;right:10px;border-radius:90px;background-color:#a0a0a0;}
		img{border-radius:90px;margin-left:5px;margin-top:5px;}
	#legend-div{position:absolute;bottom:5px;width:220px;height:70px;font-size:20px;left:40px;color:#5d6675;font-family: "monotype"; }
	#para-div{position:absolute;bottom:5px;width:220px;height:70px;font-size:20px;left:300px;color:#5d6675;font-family: "monotype";}
	#para-next-div{position:absolute;bottom:5px;width:280px;height:70px;font-size:20px;left:535px;color:#5d6675;font-family: "monotype";}
	#para-blank-div{position:absolute;bottom:5px;width:250px;height:70px;font-size:20px;right:10px;color:#5d6675;font-family: "monotype";}
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


<div id="speaker-container">
   <legend id="speakers-legend">SPEAKERS</legend>
  <div id="image-container">

	    <a href="https://www.linkedin.com/in/manvenders/"><div id="manvender">
	           <img  src="image/manvindersingh.jpg" width="250px" height="250px">
	        </div>
	        </a>
	        <div id="legend-div">
               <p> <center>Manvendar Singh <br>Founder Upx Academy</center></p>
           </div>
         
         <a href="https://www.linkedin.com/in/sandeep-tompala-795b4b13/">
             <div id="sandeep">
	           <img src="image/sandeep.jpg" width="250px" height="250px">
	         </div>
	         </a>
	        <div id="para-div">
              <p> <center>Sandeep Tompala<br>Data Scientist Twitter</center></p>
             </div>
         
         <a href="https://www.linkedin.com/in/manvenders/">
	        <div id="next-image">
	           <img src="image/blankface.jpg" width="250px" height="250px">
	        </div>
	        </a>
	        <div id="para-next-div">
              <p> <center>Manvendar Singh <br>Founder Upx Academy</center></p>
            </div>
         
          <a href="https://www.linkedin.com/in/sandeep-tompala-795b4b13/">
	        <div id="balnk-image">
	          <img src="image/blankface.jpg" width="250px" height="250px">
	        </div>
	        </a>
	        <div id="para-blank-div">
              <p> <center>Sandeep Tompala<br>Data Scientist Twitter</center></p>
           </div>
         
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
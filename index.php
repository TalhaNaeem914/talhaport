<?php
include "db.php";
if (isset($_POST["submit"])) {

  


  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $subject = $_POST["Subject"];
  $message = $_POST["Message"];



  $query = "insert into contact(Name,Email,Subject,Message) values('$name','$email','$subject','$message')";


  $res = mysqli_query($conn,$query);


  if ($res) {
  
     # code...
   } else{
    
   }
}


?>












<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>		

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="lightbox.min.css">
<script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>





</head>
<body>

	<header>
		
		<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" style="margin-top: 10px; color: white;">TALHA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: grey;">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="margin-left: 40%; margin-top: 20px;">
      <li class="nav-item ">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#About">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ser">Services</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#Portfolio">Skills</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#work">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#conttr">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      	
      
    </ul>
    
  </div>
</nav>
<div class="contt">
    <div class="container" style="border-left: 5px solid #ffff;">
    	
    	<div class="content">
    		<h5>Hello My Name Is</h5>
    		<h1>TALHA NAEEM</h1>
    		<h2>Web Designer</h3>
    		<a href="" class="btn  rt">Download CV</a>
    	</div>
    </div>
    </div>

	</header>



	<!-- End header -->

	<div class="main">
		<div class="container" id="About">
			<h2 ><span style="border-bottom: 3px solid orange; ">ABOUT </span>ME </h2>
			<h5>INFORMATION ABOUT ME</h5>
			<div class="row">
				<div class="col-md-3">
					<img src="about-me.jpeg" class="img-fluid">
				</div>
				<div class="col-md-8">
					<h3>I'AM TALHA NAEEM</h3>
					<p>A Lead UX &UI Designer Based in Karachi</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

					<div class="row">
						<div class="col-md-4 col-4">
							<p style="border-bottom: 1px solid #dee2e6;">Birthday: <span>4th Sep 2000  </span></p>
							<p style="border-bottom: 1px solid #dee2e6;">Age: <span>19  </span></p>
							<p style="border-bottom: 1px solid #dee2e6;">Residence: <span>Karachi  </span></p>
							<p style="border-bottom: 1px solid #dee2e6;">Address: <span>A-304 Munir Bridge  </span></p>
						</div>
						<div class="col-md-4 col-4">
							<p style="border-bottom: 1px solid #dee2e6;">Email: <span>talhan052@gmail.com </span></p>
							<p style="border-bottom: 1px solid #dee2e6;">Phone No: <span>0332-3430618  </span></p>
							<p style="border-bottom: 1px solid #dee2e6;">Facebook: <span>Talha Naeem </span></p>
							<p style="border-bottom: 1px solid #dee2e6;">Freelance: <span>Talha123&free  </span></p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
    

    <!-- End About -->


    <div class="services" id="ser">
    	<h3>Our Services</h3>
    	<div style="border-bottom: 3px solid orange;width: 70px; margin-left: 47%;" ></div>
    	<div class="container" style="margin-top: 60px;">
    		<div class="row">
    			<div class=" col-md-4 col-12">
    				<div class="box2 co">
    					<div id="cir">
    						<i class="fa fa-laptop" style="color: white; font-size: 30px; margin-top: 10px;"></i>
    					</div>
    					<h6>Unique Design</h6>
    					<p style="color: grey; font-size: 14px;">Lorem Ipsum is simply dummy <br> text of the printing and typesetting<br> industry. Lorem Ipsum has been the industry's	<br> standard dummy text ever since the 1500s, <br>text of the printing and typesetting</p>
    					
    				</div>


    			</div>
    			<div class=" col-md-4 col-12" >
    				<div class="box2 co">
    					<div id="cir">
    						<i class="fa fa-search" style="color: white; font-size: 30px; margin-top: 8px;"></i>
    					</div>
    					<h6>Different Layout</h6>
    					<p style="color: grey; font-size: 14px;">Lorem Ipsum is simply dummy <br> text of the printing and typesetting<br> industry. Lorem Ipsum has been the industry's	<br> standard dummy text ever since the 1500s, <br>text of the printing and typesetting</p>
    					
    				</div>

    			</div>
    			<div class=" col-md-4 col-12">
    				<div class="box2 co">
    					<div id="cir">
    						<i class="fa fa-cog" style="color: white; font-size: 30px; margin-top: 8px;"></i>
    					</div>
    					<h6>Make It Simple</h6>
    					<p style="color: grey; font-size: 14px;">Lorem Ipsum is simply dummy <br> text of the printing and typesetting<br> industry. Lorem Ipsum has been the industry's	<br> standard dummy text ever since the 1500s, <br>text of the printing and typesetting</p>
    					
    				</div>

    			</div>

    		</div>
    		
    	</div>



    	<div class="container" style="margin-top: 20px;">
    		<div class="row">
    			<div class=" col-md-4 col-12">
    				<div class="box2 co">
    					<div id="cir">
    						<i class="fa fa-angle-double-left" style="color: white; font-size: 30px; margin-top: 10px;"></i>
    					</div>
    					<h6>Testing For Profection</h6>
    					<p style="color: grey; font-size: 14px;">Lorem Ipsum is simply dummy <br> text of the printing and typesetting<br> industry. Lorem Ipsum has been the industry's	<br> standard dummy text ever since the 1500s, <br>text of the printing and typesetting</p>
    					
    				</div>


    			</div>
    			<div class=" col-md-4 col-12" >
    				<div class="box2 co">
    					<div id="cir">
    						<i class="fa fa-envelope" style="color: white; font-size: 30px; margin-top: 8px;"></i>
    					</div>
    					<h6>Responsivness</h6>
    					<p style="color: grey; font-size: 14px;">Lorem Ipsum is simply dummy <br> text of the printing and typesetting<br> industry. Lorem Ipsum has been the industry's	<br> standard dummy text ever since the 1500s, <br>text of the printing and typesetting</p>
    					
    				</div>

    			</div>
    			<div class=" col-md-4 col-12">
    				<div class="box2 co">
    					<div id="cir">
    						<i class="fa fa-address-book" style="color: white; font-size: 30px; margin-top: 10px;"></i>
    					</div>
    					<h6>Advanced Option</h6>
    					<p style="color: grey; font-size: 14px;">Lorem Ipsum is simply dummy <br> text of the printing and typesetting<br> industry. Lorem Ipsum has been the industry's	<br> standard dummy text ever since the 1500s, <br>text of the printing and typesetting</p>
    					
    				</div>

    			</div>
    			
    		</div>
    		
    	</div>
    </div>



    <div class="pro">
    	<div class="container" id="Portfolio">
    		<div class="row">
    			<div class="col-md-6">
    				<h3>PROFESSIONAL SKILLS</h3>
    				<div style="border-bottom: 3px solid orange;width: 200px;" ></div>
    				<p>I design and develop services for customers of all sizes, spilization in
    				creating stylish wesites</p>
    				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%;margin-top: 30px;">HTML</div>
    				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%; margin-top: 20px;background-color: orange">CSS</div>
    				<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:89%;margin-top: 30px;">JAVASCRIPT</div>
    				<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:100%;margin-top: 30px;" >JQUERY</div>
    				<div class="progress-bar bg-info progress-bar-striped progress-bar-animated bg-success" style="width:100%;margin-top: 30px;" >BOOTSTRAP</div>
    				


    			</div>
    			<div class="col-md-6">
    				<div class="im">
    				<img src="lindsay-henwood-47743-e1514926556603.jpg" class="img-fluid">
    			</div>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- Done -->


    <div class="works" id="work">
    	<h3 class="text-center" style="padding-bottom: 70px;"><span style="border-bottom: 3px solid orange; "> LATEST</span> WORKS</h3>

    	<div class="container" style="background-color: #f5f8fd;">
    		<div class="row">
    			<div class="col-md-4 col-12">
    				 <div class="gallery">
    			<a href="1.jpg" data-lightbox="mygallery"><img src="1.jpg" class="img-fluid" id="we"></a>	
    			</div>
    		</div>
    			<div class="col-md-4 col-12" >
    				 <div class="gallery">
    				<a href="2.jpg" data-lightbox="mygallery"><img src="2.jpg" class="img-fluid"></a>
    			</div>
    			</div>
    			<div class="col-md-4 col-12">
    				 <div class="gallery">
    				<a href="3.jpg" data-lightbox="mygallery"><img src="3.jpg" class="img-fluid"></a>
    			</div>
    			</div>

    			<div class="col-md-4 col-12">
    				 <div class="gallery">
    				<a href="4.jpg" data-lightbox="mygallery"><img src="4.jpg" class="img-fluid" style="margin-top: 15px;"></a>
    			</div>
    			</div>

    			<div class="col-md-4 col-12">
    				 <div class="gallery">
    			<a href="5.jpg" data-lightbox="mygallery"><img src="5.jpg" class="img-fluid" style="margin-top: 15px;"></a>	
    			</div>
    			</div>

    			<div class="col-md-4 col-12">
    				 <div class="gallery">
    			<a href="6.jpg" data-lightbox="mygallery"><img src="6.jpg" class="img-fluid" style="margin-top: 15px;"></a>	
    			</div>
    			</div>
    		</div>
    	</div>
    </div>
    <br><br>
    

    <!-- End protfolio -->


    <div class="get">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8">
    			<h3 style="color: white; margin-top: 100px;">I'm Extermaly passionte About web development and design in all its forms.</h3>	
    			</div>
    			<div class="col-md-4">
    		   <a href="" class="btn  btn-primary" id="to" style="font-size: 25px;">Get In Touch</a>		
    			</div>
    		</div>
    		
    		
    	</div>
    </div>

<!-- End -->

<div class="clints" style="background-color: #f5f8fd; padding-top: 100px;">
	

 <h1 class="text-center" ><span style="color: #3DCFD3;" id="test"> Our </span>Client</h1>
   <p class="text-center">We Provide High Standard Clean Website For Your Buiness Solutions</p>
<br><br>
<!--    <img src="images/20729214_1721092838194046_7311494900490866793_n.jpg" class="rounded-circle" style="width: 100px; margin-left:47%;">
   		<p  style="width: 500px; margin-left: 33%; margin-top: 50px;">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type "</p>

   		<p class="text-center">-Huzaifa Naeem, Company ABC "</p>
 -->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="test">
  <ol class="carousel-indicators">
    <li data-target="#carouselExapleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" id="tte">
      <img class="rounded-circle" src="20729214_1721092838194046_7311494900490866793_n.jpg" alt="First slide" style="width: 100px; margin-left: 47%;" id="im">
        <p  style=" text-align: center; margin-top: 50px;">"Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry. Lorem Ipsum has been the industry's standard dummy text <br> ever since the 1500s, when an unknown printer took a galley of type "</p>

   		<p class="text-center">-Huzaifa Naeem, Company ABC "</p>
   		<br><br><br><br>
      
    </div>
    <div class="carousel-item">
     <img class="rounded-circle" src="20729214_1721092838194046_7311494900490866793_n.jpg" alt="First slide" style="width: 100px;margin-left: 47%;">
     <p  style="text-align: center;  margin-top: 50px;">"Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry. Lorem Ipsum has been the industry's standard dummy text <br> ever since the 1500s, when an unknown printer took a galley of type "</p>

   		<p class="text-center">-Huzaifa Naeem, Company ABC "</p>
   		<br><br><br><br>

    </div>
    <div class="carousel-item">
      <img class="rounded-circle" src="20729214_1721092838194046_7311494900490866793_n.jpg" alt="First slide" style="width: 100px;margin-left: 47%;">
      <p  style="text-align: center;  margin-top: 50px;">"Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry. Lorem Ipsum has been the industry's standard dummy text <br> ever since the 1500s, when an unknown printer took a galley of type "</p>

   		<p class="text-center">-Huzaifa Naeem, Company ABC "</p>
<br><br><br><br>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<!-- end test -->

   <div class="blog" id="conttr">
   	<h3 class="text-center">LATEST BLOGS</h3>
   	<div style="border-bottom: 3px solid orange;width: 50px;margin-left: 47%;" ></div>
   	<div class="container" style="margin-top: 60px;">
   		<div class="row">
   			<div class="col-md-4 col-12">
   				<img src="bl1.jpg" class="img-fluid">
   				<p>02 Mar 2020  Design</p>
   				<h5>Make Your Marketing Website</h5>
   				<p>Lorem Ipsum is simply dummy text <br> of the printing and</p>
   				<p style="color: yellow"><b>Read More</b></p>
   			</div>
   			<div class="col-md-4 col-12">
   				<img src="bl2.jpg" class="img-fluid">
   				<p>02 Mar 2020  Design</p>
   				<h5>Make Your Marketing Website</h5>
   				<p>Lorem Ipsum is simply dummy text <br> of the printing and</p>
   				<p style="color: yellow"><b>Read More</b></p>
   			</div>
   			<div class="col-md-4 col-12">
   				<img src="bl4.jpg" class="img-fluid">
   				<p>02 Mar 2020  Design</p>
   				<h5>Make Your Marketing Website</h5>
   				<p>Lorem Ipsum is simply dummy text <br> of the printing and</p>
   				<p style="color: yellow"><b>Read More</b></p>
   			</div>
   		</div>
   	</div>
   </div>


   <!-- End -->

   <div class="gets" id="contact">
   	<h4 class="text-center">GET IN TOUCH</h4>
   	<div style="border-bottom: 3px solid orange;width: 50px; margin-left: 47%;" ></div>
   	<div class="container">
   		<div class="row">
   			<div  id="wh">
   				<h5 style="margin-left: 60px;">Drop us a Line</h5>
   				<p style="margin-left: 60px;">We are here to ans any question you may have</p>

                  <div class="container">
	<div class="row">
    
		<div class="col-md-5" id="formm">
      <form method="post" action="">
			<input type="text" name="Name"  placeholder="Your Name" class="form-control" style="margin-left: 50px;height: 60px;">
			
		
		</div>
		<div class="col-md-5" id="formms">
			<input type="Email" name="Email" placeholder="Your Email" class="form-control" style="margin-left: -25px;height: 60px;">
			
		
		</div>
		<div class="col-md-10" id="formm"><br>
			<input type="text" name="Subject" placeholder="Your Subject" class="form-control" style="margin-left: 50px; height: 60px;">
		</div>

		<div class="col-md-10" id="formm"><br>
			<input type="text" name="Message" placeholder="Your Message" class="form-control" style="margin-left: 50px;height: 150px;">

			<div style="margin-top: 30px;margin-left: 50%;">
	 <input type="submit" name="submit" value="SUBMIT" class="btn btn-warning" id="bbb">
</div>
</form>
		</div>

		
</div>
	</div>
</div>



   				
   			</div>
   		</div>
   	</div>
   </div>


   <!-- End con -->

   <footer>
   	<div class="container" style="padding-top: 40px; color: white;">
   		<h1 class="text-center">TALHA NAEEM</h1>
   		<i class="fa fa-facebook circle" style="color: white; margin-left: 45%;"></i>
   		  <i class="fa fa-instagram" style="color: white; margin-left: 20px;"></i>
   		   <i class="fa fa-youtube" style="color: white; margin-left: 20px; "></i>
   		     <i class="fa fa-twitter" style="color: white; margin-left: 20px;"></i>
   		<br><br>
   		<hr>
   		<p class="text-center" style="color: grey;">Copyright © 2020, TechZone.pk, All Rights Reserved.</p>
   	</div>
   </footer>




</body>
</html>
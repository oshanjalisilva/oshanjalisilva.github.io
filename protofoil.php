<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){
  
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $message = mysqli_real_escape_string($conn, $_POST['message']);
   
   $select_message = mysqli_query($conn, "SELECT * FROM 'contact_form' WHERE username = '$username' AND email = '$email' AND phone = '$phone' AND message = '$message'") or die('query failed');
   
  if(mysqli_num_rows($select_message) > 0){ 
    $message[] = 'message sent already!';
	}
   else{
    mysqli_query($conn,"INSERT INTO 'contact_form'(username, email, phone, message) VALUES ('$username','$email','$phone','$message')") or die('query failed');
	$message[] = 'message sent successfully!';
	}
}
?>	
   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
  <title> My Portfolio </title>
</head>
<body>

<?php

if(isset($$Message)){
  foreach($$message as $$message){
    echo ' <div class="mmessage">
	           <span></span>
	           <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
			   </div>';
	}
}	
  

  <header>
    <a href="a" class="logo">Flo<span>wer</span>s..</a>
	<ul class="navlist">
	   <li><a href="#home" class="active">Home</a></li>
	   <li><a href="#about">About Me</a></li>
	   <li><a href="#services">Services</a></li>
	   <li><a href="#portfolio">Portfolio</a></li>
	   <li><a href="#contact">Contact</a></li>
	</ul>
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>

   <section class="home" id="home">
      <div class="home-text">
        <div class="slide">
		<br>
        <span class="one">Hello!</span> <br>
		</div> 
		 <img class="picture" src="images/OIP.jpg">
		<span class="two"> I'm </span>
        <h1>Oshanjali</h1>
        <h3>Floral <span> Designer.. </span> </h3>
	  	
	<p>This is my official website to show all details and work experience of flower designer </p>
	    <div class="button">
		    <a href="a" class="btn">About Me</a>
		 </div>
	  </div>
    
	
    </section>
	
	<section class = "about" id = "about">
    <div class="about-text">
       <h2> About <span> Me </span> </h2>
	   <h4> Floral Designer! </h4>
	  
	    <img src="images/R (1).jpg" class="pic"/>
		     
	   <p> A floral designer and florist, I arrange and style flowers and plants for beautiful displays and special occasions.I cut and arrange live, dried and artificial flowers and greenery and add accessories such as ribbons, containers and otheritems to the designs. Follows your specifications and requests and suggests the appropriate color, size and type of flowers according to your budget, timeline and theme. </p>
	   <p>I have a high school diploma and 4 years of experience. I am familiar with the various concepts, practices and procedures of floral design and you can rely on my creativity, organizational skills and judgment to plan and achieve objectives.</p>
	   <a href="#" class="btn">More About</a>
	    
	</div>
</section>
<section class="image" id ="image">

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
    </section>
	
	<section class="services" id="services"> 
	<div class="main-text">
	   <h2><span>My</span>Services</h2>
	</div>
    <div class="services-content">
      <div class="box">
         <div class="s-icons">
           <i class='bx bx-mobile-alt'></i>
         </div>
         <h3>Flower Design </h3>
		 <img src="images/R (2).jpg" class="pic1"/>
         <p>Flower Boquets, flower arrengement, many things...</p>
         <a href="#" class="btn">Read More</a>
      </div>
      <div class="box">
         <div class="s-icons">
           <i class='bx bx-code-alt'></i>
         </div>
         <h3>Creative Design</h3>
		 <img src="images/OIP (1).jpg" class="pic2"/>
         <p>Fresh and Artifical Flowers</p>
		 <a href="#" class="btn"> Read More</a>
       </div>
	   <div class="box">
         <div class="s-icons">
           <i class='bx bx-edit-alt'></i>
         </div>
         <h3>Creative Design</h3>
          <img src="images/0a7da7c44f9bd7afd4483d739066ba44-2018-08-15.jpg" class="pic3"/>
		 <a href="#" class="btn"> Read More</a>
       </div>
    </div>	   
	
</section>
	
<section class="protfolio" id="portfolio">
   <div class="main-text">
      <h2><span>Ltest</span>Project</h2>
   </div>
   <div class="portfolio-content">
      <div class="row">
        <img src="images/02-creative-flower-decoration-ideas-homebnc.jpg">
        <div class="layer">
          <h5>Visual Design</h5>
          <p>More than creative flower deco</p>
          <a href="#"> <i class='bx bx-link-external'></i></a>
        </div>
      </div>
	  
	  <div class="row">
        <img src="images/OIP (2).jpg">
        <div class="layer">
          <h5>Visual Design</h5>
          <p>Flower Vase Design</p>
          <a href="#"> <i class='bx bx-link-external'></i></a>
        </div>
      </div>
	  
	  <div class="row">
        <img src="images/OIP (3).jpg">
        <div class="layer">
          <h5>Visual Design</h5>
          <p>Out Door flower arrengment</p>
          <a href="#"> <i class='bx bx-link-external'></i></a>
        </div>
      </div>
	  
	  <div class="row">
        <img src="images/OIP (4).jpg">
        <div class="layer">
          <h5>Visual Design</h5>
          <p>Unique flower deco</p>
          <a href="#"> <i class='bx bx-link-external'></i></a>
        </div>
      </div>
	  
	  <div class="row">
        <img src="images/R.jpg">
        <div class="layer">
          <h5>Visual Design</h5>
          <p>Arrengment </p>
          <a href="#"> <i class='bx bx-link-external'></i></a>
        </div>
      </div>
	  
	  <div class="row">
        <img src="images/OIP (6).jpg">
        <div class="layer">
          <h5>Visual Design</h5>
          <p>Flower boquets design<p>
          <a href="#"> <i class='bx bx-link-external'></i></a>
        </div>
      </div>
    </div>
</section>	
<section class="contact" id="contact">
	 <div class="container">
      <form id="form" class="form">
        <h5>Contact With Us</h5>
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Enter username" />
          <small>Error Message</small>
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter email" />
          <small>Error Message</small>
        </div>
        <div class="form-control">
          <label for="number">Mobile Number</label>
          <input type="number" id="number" placeholder="Enter your mobile number" />
          <small>Error Message</small>
        </div>
        <div class="form-control">
          <label for="message">Your Message</label>
          <input type="text" id="message" placeholder="How can I hire you" />
          <small>Error Message</small>
        </div>
        <button>Submit</button>
      </form>
    </div>
    <script src="script.js"></script>
  

    
</section>

<section class="end">
   <div class="last-text">
      <p>Design by any arrengment </p>
	</div>
	<div class="top">
	  <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
	</div>
</section>

		

		   

</body>

</html>  
  
<script src="slideShow.js"></script>
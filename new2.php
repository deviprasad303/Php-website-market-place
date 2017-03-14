<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}

.navbar{
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}



.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}
.footer{
  overflow: hidden;
  background-color: #333;
  position: bottom;
  top: 0;
  width: 100%;
}
.footer a {

  color: #f2f2f2;

  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}


/* Change the color of links on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.navbar a.active {
    background-color: #4CAF50;
    color: white;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
.mySlides {display:none}
.slideshow-container {
  max-width: 2000px;
  position: bottom
}
.contain {
  width: 100%;
}
.contain a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 40px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover,.navbar:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: white;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 28px;
  width: 100%;
  text-align: center;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
* {
    box-sizing: border-box;
}

.column {
    float: left;
    padding: 15px;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.menu {
    width: 50%;
}
.content {
    width: 50%;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 8px;
    background-color: #33b5e5;
    color: #ffffff;
}
.menu li:hover {
    background-color: #0099cc;
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58c574e61c7524001271b9d6&product=sticky-share-buttons"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58c574e61c7524001271b9d6&product=sticky-share-buttons"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="navbar">
  <a href="new2.php">Home</a>
  <a href="new123.php">News</a>
  <a href="new234.php">About</a>
  <a href="demo1234.php">Products/Services</a>
  <a href="contact.php">Contact</a>
  
</div>
<div class="imageside1" >
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/008.PNG" style="width:100%">
  <div class="text">We help you design your celebration</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/009.PNG" style="width:100%">
  <div class="text">Our wide range of outdoor collection</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/009.PNG" style="width:100%">
  <div class="text">Our wide range of outdoor collection</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<div class="clearfix">
  <div class="column menu">
    <ul>
      
      <li><img id="thisImg"  src="images/IMP.PNG" alt="Company logo"  /></li>
<li><img id="thisImg"  src="images/library.PNG" alt="Company logo"  /></li>
    </ul>
  </div>

  <div class="column content">
    <h1>We renovate and innovate</h1>
    <p>We provide custom decor solutions to all knds of homes with better space utilization.</p>
    <p>Small racks of library.</p>
 <br><br />
<br><br />
<br><br />
<br><br />
<br><br />
<br><br />
    <h1>We rebuild the built</h1>
<p>This is not only about books , this is about keepings books safe.</p>
    <p>Small corner turned into a beautiful kitchen.</p>
  </div>
</div>

<div class="footer">
        <footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Dev Interiors </h3>
                    <ul>
                        <li> <a href="new2.php"> Home </a> </li>
                        <li><a href="new234.php"> About </a> </li>
                        <li> <a href="demo1234.php"> Services </a> </li>
                         <li><a href="contact.php">Contact </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Contact email </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Submit <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li>  
<a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:deviprasad303@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>	            </li>           
         </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <!--/.footer-bottom--> 
</footer>

</div>

</body>
</html>

<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.

?>
<html>
<head>
<title>letsshop</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
    function TimerSwitch(pic) {
        TimerRunning=true;
        var timer = setTimeout(function() { SwitchPic(pic) }, 300);
      }
      function SwitchPic(pic) {
        pic.src = "images/image03.PNG";
      }
</script>

</head>

<body>
<div class="container">
	<?php
          include("header.php");
?>

    <div class="maincontent">
 <!-- main content goes here-->
      <p>Enjoy shopping here</p>
  </div>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">&raquo;</a>
</div>
<div class="clearfix">
<div class="imageside1" >
 
<img id="thisImg"  src="images/image01.PNG" alt="Company logo"  />

               </div>

<div class="imageside2" >
 
<img id="thisImg"  src="images/next.PNG" alt="Company logo" onclick="TimerSwitch(this)" />


               </div>
</div>

   
	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>

<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.

?>
<html>
<head>
<title>letsshop</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">

	<?php
          include("header.php");
?>

</div>

    <div class="maincontent">
 <!-- main content goes here-->
      <p>Enjoy shopping here</p>
  </div>
<?php
include("seccontent.php");
?>
   
	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>

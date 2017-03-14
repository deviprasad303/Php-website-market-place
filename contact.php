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

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58c574e61c7524001271b9d6&product=sticky-share-buttons"></script>
</head>
<body>






<div class="navbar">
  <a href="new2.php">Home</a>
  <a href="new123.php">News</a>
  <a href="new234.php">About</a>
  <a href="demo1234.php">Products/Services</a>
  <a href="contact.php">Contact</a>
  
</div>


<div class="container">
  <h2>Developer Contact</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>My details</th>
      </tr>
    </thead>
    <tbody>
      
      <tr class="danger">
        <td>Name: Venkata Deviprasad Sura
<br></br>
SID : 011494444</td>
      </tr>
      <tr class="info">
<br></br>
        <td>Phone: 669-274-6630
<br></br>
Email: venkatadeviprasad.sura@sjsu.edu</td>
     
      </tr>
      <tr class="warning">
<br></br>
        <td>Class: CMPE 272
<br></br>
LAB Name: Create your first Web Application
LAB Num: #3</td>

</tbody>
  </table>
</div>


<div class="footer">
<?php
          include("footer.php");
?>
</div>
</body>
</html>









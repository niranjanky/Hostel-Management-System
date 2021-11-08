<?php
include('header.php');
?>
<div class="header" align="center">
	<h3>
		<img src="image/clogo.jpg" style="float: left;margin-left: 30px;">
		<a href="admin/login.php" style="float:right; margin-right: 30px; font-size: 25px; color: red;">Admin Login</a>
	</h3>
<h1>WELCOME TO ACSCE HOSTEL</h1>
</div>
<table class="table" style="margin-top: 10px;width: 93%; margin-left: 48px;">
<thead>
	<tr>
	<th><a style="text-decoration: none;" rel="HOME" href="index.php">HOME</a></th>
	<th><a style="text-decoration: none;" rel="FACILTIES" href="facilties.php">FACILTIES</a></th>
	<th><a style="text-decoration: none;" href="login.php">JOIN</a></th>
	<th><a style="text-decoration: none;" rel="PAYMENT" href="fees.php">PAYMENT</a></th>
	<th><a style="text-decoration: none;" rel="RULE" href="rule.php">RULE</a></th>
</tr>
</thead>
</table>
<div align="center" style="margin-right:550px;">
              <!-- Slideshow container -->
<div align="center" class="slideshow-container">


  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="margin-left: 450px;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
</div>


<div align="center" style="max-width:500px;">
  <img class="mySlides" src="image/img1.jpg" style="width:200%;height:90%">
  <img class="mySlides" src="image/boy1.jpg" style="width:200%;height:90%">
  <img class="mySlides" src="image/img3.jpg" style="width:200%;height:90%">
  <img class="mySlides" src="image/img4.jpg" style="width:200%;height:90%">
  <img class="mySlides" src="image/img5.jpg" style="width:200%;height:90%">
  <img class="mySlides" src="image/girl.jpg" style="width:200%;height:90%">
  <img class="mySlides" src="image/img2.jpg" style="width:200%;height:90%">
</div>
   
   <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<div class="footer">
  <h3>All Right Reserve ACSCE &reg</h3>
</div>



</body>
</html>
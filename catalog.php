<!DOCTYPE html>

<html>
<head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: MediumSeaGreen;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>
<body>

<div class="flex-container">
<header>
 
<img src="assets/HomePageIcon.png" align="left";">
  <img src="assets/HomePageIcon.png" align="right";">
 <h1>Library</h1>

</header>

<nav class="nav">

<?php
	// Connect to DB
	$db = mysqli_connect("localhost","root","","zechlibrary");
?>
</nav>

<article class="article">
  <h1>Catalog</h1>
  <p>Enjoy the books</p>
  <p><strong>Don't forget to return your books!</strong></p>
 
 <h2>Popular Titles</h2>
 <a href="bookID1.php"> <img src="BookCovers/cats.jpg" alt="HTML5 Icon" style="width:128px;height:150px;"></a>
 <a href="bookID2.php"> <img src="BookCovers/fire trucks.jpg" alt="HTML5 Icon" style="width:128px;height:150px;"></a>
 <a href="bookID3.php"> <img src="BookCovers/The great alone.jpg" alt="HTML5 Icon" style="width:128px;height:150px;"></a>
 <a href="bookID4.php">  <img src="BookCovers/Still me.jpg" alt="HTML5 Icon" style="width:128px;height:150px;"></a>
 <a href="bookID5.php"><img src="BookCovers/fire trucks(1).jpg" alt="HTML5 Icon" style="width:128px;height:150px;"></a>
 <a href="bookID6.php"> <img src="BookCovers/look for me.jpg" alt="HTML5 Icon" style="width:128px;height:150px;"></a>
 <a href="bookID7.php"><img src="BookCovers/Pachinko.jpg" alt="HTML5 Icon" style="width:128px;height:150px;"></a>
 <a href="bookID8.php"> <img src="BookCovers/Seaside romance.jpg" alt="HTML5 Icon" style="width:128px;height:150px;"></a>
   
   <H3> Complete Catalog </h3>
 
</article>


<!-- TABLE STYLE -->
 <html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>contact.php</title>
 <style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
 </head>

</html>


<footer>Sp2020 ISC311 - Aaron Zech<br> Hours <br> Monday: 8-5 Tuesday: 8-5 Wednesday: 8-5 Thursday: 8-9 Friday: Closed Saturday-Sunday: 11-4</footer>
</div>

</body>
<!-- Load the sidebar -->


</html>



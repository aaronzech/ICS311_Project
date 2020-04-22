
<section class="main-container">
<html>
<head>
<!-- Local Style -->
<style> 

.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
	padding-left: 9em;
	
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
	padding-left: 4em;

}

.article {
    text-align: middle;
	padding-left: 4em;
}

header {background: MediumSeaGreen;color:white;}
footer {background: #aaa;color:white;}

h1 { font-size: 4em }
h3 { font-size: 2em }
@media all and (min-width: 768px) {
   
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}


.sidenav {
  width: 130px;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 10px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}
.sidenav H4 {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  margin-left: 140px; /* Same width as the sidebar + left position in px */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="flex-container">

 <!-- Top Banner -->
<header>
 
  <img src="assets/HomePageIcon.png" align="left";">
  <img src="assets/HomePageIcon.png" align="right";">
   <h1>Library</h1>
  
</header>

 <!-- Main Conent of the webpage -->
<article class="article">
 
<H2>Welcome</H2>
  <p>This is the library database. View books, pay fines, and more!!!!!</p><br>
<H3> Popular Titles </H3>
  <br><img src="BookCovers/fire trucks.jpg" alt="" style="width:128px;height:150px;">
  <img src="BookCovers/Pachinko.jpg" alt="" style="width:128px;height:150px;">
  <img src="BookCovers/The great alone.jpg" alt="the great alone" style="width:128px;height:150px;">
  <img src="BookCovers/Still me.jpg" alt="still me" style="width:128px;height:150px;">
  <br>
  <H3> News </H3>
  <P> Author James Petterson will be visiting the library for a book reading / signing on April 30th 2020 at 9am. </p>
  <br>
<a class="weatherwidget-io" href="https://forecast7.com/en/45d09n93d01/55110/?unit=us" data-label_1="SAINT PAUL" data-label_2="WEATHER" data-icons="Climacons Animated" data-theme="original" data-basecolor="#1e7b46" >SAINT PAUL WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</article>

<form action="search.php" method ="post">

	 <label for="cars"></label>
	<select id="cars" name="searchType">
    <option value="ISBN">ISBN</option>
    <option value="Title">Title</option>
    <option value="AuthorLastName">Author Last Name</option>
    <option value="AuthorFirstName">Author First Name</option>
  </select>



  <input type="text" placeholder="What are you looking for?" name="search">
  <input type="submit" value="Search" </input>
</form>







<!-- Bottom of the webpage -->
<footer>Sp2020 ISC311 - Aaron Zech<br> Hours <br> Monday: 8-5 Tuesday: 8-5 Wednesday: 8-5 Thursday: 8-9 Friday: Closed Saturday-Sunday: 11-4</footer>
</div>

</body>
</html>


<!-- Side Menu Bar Content -->
<div class="sidenav">
<H4> Menu </H4>
<a href="register.php">Register</a><br>
<a href="login.php"> Login </a><br>
<a href="logout.php"> Logout </a><br>
<a href="addBook.php"> Add Books </a><br>
<a href="editBook.php">Delete Books </a><br>
<a href="EditBookDetails.php"> Edit Books </a><br>
<a href="addPatron.php"> Add Patron </a>
</div>

	
</section>

<?php
	include_once 'footer.php';
?>
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
	padding-left: 150px;
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

<!-- Side Menu Bar Content -->
<div class="sidenav">
<H4> Menu </H4>
<a href="index.php">Home</a><br>
<a href="register.php">Register</a><br>
<a href="login.php"> Login </a><br>
<a href="logout.php"> Logout </a><br>
<a href="addBook.php"> Add Books </a><br>
<a href="editBook.php">Delete Books </a><br>
<a href="EditBookDetails.php"> Edit Books </a><br>

</div>

<article class="article">
<h1>Add Patron</h1>
<form action = "addPatron.php" method = "post">
First Name: <input type = "text" name = "pFname"><br />
Last Name: <input type = "text" name = "pLname"><br />
Phone Number: <input type = "integer" name = "phone"><br />
State:<select id="state" name = "state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select><br>
city:<input type = "text" name = "city"><br />
zip: <input type = "integer" name = "zip"><br />
Veteran Status: <input type = "radio" id="yes" name="status" value ="Yes">
				<label for="status">Yes</label> 
				<input type="radio" id="no" name ="status" value="No">
				<label for="no">No</label><br>
<input type = "submit" name = "submit">
<input type = "submit" name = "goBack" value = "Return to Main Menu">
</form>

<?php
if(isset($_POST['submit']))
{
	$con = mysqli_connect('localhost', 'root', '', 'zechlibrary');
	if(!$con)
	{	
		die("Cannot connect to the database");
	}

	$sql = "INSERT INTO patron(First_Name,Last_Name,Phone_Number,State,City,Zip_Code,Veteran_Status) 
		VALUES 
		('$_POST[pFname]', '$_POST[pLname]','$_POST[phone]'
		,'$_POST[state]'
		,'$_POST[city]','$_POST[zip]',
		 '$_POST[status]')";

	echo $sql;
	mysqli_query($con, $sql);
	
	
	if(mysqli_query) echo "Successfully added '$_POST[pFname]'!"; 
}

	

?>

</article>





<footer>Sp2020 ICS-311 - Aaron</footer>
</div>
</body>
</html>



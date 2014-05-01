<?php
 session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Survey</title>
<link href="gcss.css" rel="stylesheet" type="text/css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="">
<header>
  <div> <a href="index.php"> <img src="images/banner.png" alt="Welcome to Public Health Surveilance"></a> </div>
</header>

<nav> <a href="login.php">login</a> | <a href="survey.php">Survey</a> | <a href="analitics.php">Analytics</a> | <a href="links.php">other</a> </nav>
<section>
<h1>Welcome</h1>
  <p>Public Health Surveilace is a place where we can store, retrieve and analyze citizens data.</p>
</section>
<article>
<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $genderErr= $addressErr=$cityErr=$zipcodeErr=$stateErr=$phoneErr = "";
$fname = $lname = $gender = $phone = $city=$state=$zipcode=$address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["fname"])) {
     $fnameErr = "Name is required";
   } else {
     $fname = test_input($_POST["fname"]);
   }
   if (empty($_POST["lname"])) {
     $lnameErr = "Name is required";
   } else {
     $lname = test_input($_POST["lname"]);
   }
   if (empty($_POST["address"])) {
     $addressErr = "Name is required";
   } else {
     $address = test_input($_POST["address"]);
   }
   if (empty($_POST["city"])) {
     $cityErr = "Email is required";
   } else {
     $city = test_input($_POST["city"]);
   } 
   if (empty($_POST["state"])) {
     $stateErr = "State is required";
   } else {
     $state = test_input($_POST["state"]);
   }
   if (empty($_POST["zipcode"])) {
     $zipcodeErr = "zipcode is required";
   } else {
     $zipcode = test_input($_POST["zipcode"]);
   }
   if (empty($_POST["phone"])) {
     $phoneErr = "phone number is required";
   } else {
     $phone = test_input($_POST["phone"]);
   }
   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
    
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Personal Information</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   First Name: <input type="text" name="fname">
   <span class="error">* <?php echo $fnameErr;?></span>
   <br><br>
   Last Name: <input type="text" name="lname">
   <span class="error">* <?php echo $lnameErr;?></span>
   <br><br>
   Address: <input type="text" name="address">
   <span class="error">* <?php echo $addressErr;?></span>
   <br><br>
   City: <input type="text" name="city">
   <span class="error">* <?php echo $cityErr;?></span>
   <br><br>
   State: <input type="text" name="state">
   <span class="error">* <?php echo $stateErr;?></span>
   <br><br>
   Zipcode: <input type="text" name="zipcode"  maxlength="5">
   <span class="error">* <?php echo $zipcodeErr;?></span>
   <br><br>
   Phone #: <input type="text" name="phone"  maxlength="9">
   <span class="error">* <?php echo $phoneErr;?></span>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $address;
echo "<br>";
echo $city;
echo "<br>";
echo $state;
echo "<br>";
echo $zipcode;
echo "<br>";
echo $phone;
echo "<br>";
echo $gender;
?>

</article>
 
</body>
<footer>
  <address>
  123 UTA blvd, Arlington Texas. 76019
  </address>
</footer>
</html>
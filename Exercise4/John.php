<html>
<head>
<title>John Bautista APC</title>
</head>
<body>
<body style="background-color:black;">
<h1 style ="color:white;text-align:center;font-size:400%;font-family:adam;">__________________</h1>
<h2 style ="color:white;text-align:center; font-size:700%;font-family:adam;">J O H N</h2>
<h3 style ="color:white;text-align:center; font-size:500%;font-family:adam;">B A U T I S T A</h3>
<h4 style ="color:white;text-align:center;font-size:400%;font-family:adam;">__________________</h4>
<h5 style ="color:white;text-align:center; font-size:200%;font-family:adam;">Hobbies: Making music.</h5>
<h6 style ="color:white;text-align:center; font-size:200%;font-family:adam;">Interests: Music and more music.</h6>
<center><h7 style ="color:white;font-size:500%;font-family:adam;">__________________</h7></center>
<center><h8 style ="color:white;font-size:400%;font-family:adam;">   </h8></center>

<center><p1 style ="color:white;font-size:200%;font-family:adam;"> Glitch 2016 </p1></center>
<center><img src="glitch.jpg" alt="Glitch 2016" style="width:640px;height:640px;" align="middle"></center>
<center><h7 style ="color:white;font-size:500%;font-family:adam;">__________________</h7></center>

<center><h8 style ="color:white;text-align:center;font-size:400%;font-family:adam;">5 facts about myself</h8>

<p style ="color:white;text-align:center;font-size:400%;font-family:adam;" id="1">Fact #1</p>
<button type="button" onclick="document.getElementById('1').innerHTML = 'I play bass, drums, guitar and more musical instruments.'">Reveal!</button>

<p style ="color:white;text-align:center;font-size:400%;font-family:adam;" id="2">#2</p>
<button type="button" onclick="document.getElementById('2').innerHTML = 'I spend most of my money on food.'">Unveil!</button>

<p style ="color:white;text-align:center;font-size:400%;font-family:adam;" id="3">#3</p>
<button type="button" onclick="document.getElementById('3').innerHTML = 'I am from th province of Nueva Ecija.">Show!</button>

<p style ="color:white;text-align:center;font-size:400%;font-family:adam;" id="4">#4</p>
<button type="button" onclick="document.getElementById('4').innerHTML = 'I love dogs.'">Alakazam!</button>

<p style ="color:white;text-align:center;font-size:400%;font-family:adam;" id="5">#5</p>
<button type="button" onclick="document.getElementById('5').innerHTML = 'Spaghetti and hotdogs are my favorite foods.'">Click Me!</button></center>

<center><h9 style ="color:white;font-size:500%;font-family:adam;">__________________</h9></center>



<center><h10 style ="color:white;font-size:400%;font-family:adam;">__________________</h10></center>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = $nicknameErr = $addressErr = $cellphoneErr = "";
$name = $email = $gender = $comment = $website = $nickname = $address = $cellphone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["Home Address"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
 
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
   
   if (empty($_POST["cellphone number"])) {
    $cellphoneErr = "cellphone number  is required";
  } else {
    $cellphone = test_input($_POST["cellphone"]);
   
    if (!preg_match("/^[a-zA-Z ]*$/",$cellphone)) {
      $cellphoneErr = "Only numbers are allowed"; 
    }
  }
  
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Leave your comment</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
   Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 Home Address: <textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Cellphone Number: <input type="cellphone number" name="cellphone number" value="<?php echo $cellphone;?>">
  <span class="error">* <?php echo $cellphoneErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $website;
echo "<br>";
echo $cellphone;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>
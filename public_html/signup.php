

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset= "utf-8" >
  

  <link rel="stylesheet" type="text/css" href="css/css_stylesheet.css">
    <style>
    .user_input {
      text-align: center;
    }
    </style>

  <title>Sign up</title>
</head>

<body>

<?php include '../resources/navigation.php'; ?>

<h1>Sign up!</h1>
<div><img src="img/graphic.png" alt="graphic"/></div>

<form>
  <p class= "user_input">First name:</p>
  <input type="text" name="firstname" value=""><br><br>
  
  <p class= "user_input">Last name:</p>
  <input type="text" name="lastname" value=""><br><br>
  
  <p class= "user_input">E-Mail:</p>
  <input type="text" name="e-mail" value=""><br><br>
  
  <p class= "user_input">Password*:</p>
  <input type="password" name="password" value=""><br><br>
  
 <button class="button" type ="submit" onclick="alert('Registration successful! Thank you for joining us!')" style="vertical-align:middle"><span>Submit</span></button>
 <br>
 <br>
<p style= "font-style: italic;"> *Password must include at least one capital letter. </p>
</form>



<?php include '../resources/footer.php'; ?>

</body>

</html>
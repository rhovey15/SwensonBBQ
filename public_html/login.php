<!-- Trey Moddelmog -->

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset= "utf-8" >
  <link rel="stylesheet" type="text/css" href="css/css_stylesheet.css">
  <title>Login</title>
</head>

<body>

<?php include '../resources/navigation.php'; ?>

<h1> Login!</h1>
<div><img src="img/graphic.png" alt="graphic" /></div>

<form>
    <p style= "text-align: center;" >Email:</p>
    <input type="text" name="email"><br>
    <br>
    
    <p style= "text-align: center;" >Password:</p>    
    <input type="password" name="password"><br>
    <br>
    
    <button class="button" type ="submit"  onclick="alert('Log on successful. Welcome back!')" style="vertical-align:middle"><span>Log in</span></button>
</form>

<?php include '../resources/footer.php'; ?>

</body>

</html>
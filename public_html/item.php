<!-- Trey Moddelmog -->

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset= "utf-8" >
  <link rel="stylesheet" type="text/css" href="css/css_stylesheet.css">
  <title>Items for Sale</title>
</head>

<body>

<?php include '../resources/navigation.php'; ?>

<h1>Items for Sale </h1><br><br>

<table>
  
  <thead>
    <tr>
      <th>Sweet</th>
      <th>Mild</th>
      <th>Hot</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      
      <td>
      <img src="img/sweetbbq.png" alt="Sweet BBQ" class= "bottle"/>
      </td>
      
      <td>  
      <img src="img/mildbbq.png" alt="Mild BBQ" class= "bottle"/>
      </td>
      
      <td>
      <img src="img/hotbbq.png" alt="Hot BBQ" class= "bottle"/>
      </td>
    
    </tr>
  </tbody>
  
  
  <tfoot>
    <tr>
      <td>A combination of barbecue &amp; honey for bee's kiss flavor.</td>
      <td>A combination of barbecue &amp; ketchup for a full flavor.</td>
      <td>A combination of barbecue sauce &amp; ghost peppers for a chance to meet the grim reaper.</td>
    </tr>
  </tfoot>

</table>

<?php include '../resources/footer.php'; ?>

</body>

</html>
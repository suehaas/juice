<?php
 $db = mysqli_connect('localhost','root','22t!nk3r2','juice')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

 <?php
 $query = "SELECT * FROM juice";
 mysqli_query($db, $query) or die('Error querying database.');

 $result = mysqli_query($db, $query);

 while ($row = mysqli_fetch_array($result)) {
  echo $row['juicename'] . ' ' . $row['juicedescription'] . '<br />';
 }

 mysqli_close($db);
 ?>

</body>
</html>

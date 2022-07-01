<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>Delo s PB</h1>
<p>Pa še nekaj</p>
<?php
  
    include "prijava_na_PB.php";
   
    $email = $_POST["email"];
    $ime = $_POST["ime"];
    $priimek = $_POST["priimek"];

   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   
    $sql = "INSERT INTO student (email, ime, priimek) VALUES ('$email', '$ime', '$priimek');";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    echo "<a href='izpis.php'>Izpis študentov</a>";
   ?>
<!--    
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   
   $sql = "INSERT INTO tocka (a, b)
   VALUES (1,2)";
   
   if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
   } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   
   mysqli_close($conn);

?> -->
</body>
</html>

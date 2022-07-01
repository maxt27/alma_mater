<?php
    $servername = "localhost";
    $username = "maxim";
    $password = "123456";
    $dbname = "alma_mater_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT ime, priimek FROM student";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ime: " . $row["ime"]. " - priimek: " . $row["priimek"]. "<br>";
    }
    } else {
    echo "0 results";
    }
?>
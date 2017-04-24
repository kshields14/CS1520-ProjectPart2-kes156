<?php

  function OpenCon()
  {
    $myhost = "localhost";
    $myuser = "root";
    $mypassword = "*Cecilia14";
    $mydb = "pgh_food_db";

    $conn = new mysqli($myhost, $myuser, $mypassword, $mydb) or die("Connect Failed: %s\n" . $conn -> error);

    return $conn;
  }

  function CloseCon($conn)
  {
    $conn -> close();
  }
 ?>

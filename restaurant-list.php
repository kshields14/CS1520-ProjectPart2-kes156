<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="My restaurant bucketlist">
    <meta name="author" content="Kaitlyn Shields">
    <title>Kait's Restaurant Bucket List</title>
    <link rel="stylesheet" href="./css/rest-style.css">
  </head>
  <body>

    <h1>My PGH Restaurant Bucket List</h1>
    <div class="container">
       <div class="column-left">
         <h3>Brunch Places</h3>
         <ul>
           <?php
             include './db_connection.php';
             $conn = OpenCon();
             $sql = "SELECT name, rating, attended FROM brunch";
             $result = $conn->query($sql);
             while ($row = $result->fetch_assoc())
             {
               if ($row["attended"] == 1)
               {
                 echo "<li class=\"check\">" . $row["name"] . "</li>";
               }
               else {
                 {
                   echo "<li class=\"uncheck\">" . $row["name"] . "</li>";
                 }
               }
             }
            ?>
         </ul>
       </div>
       <div class="column-center">
         <h3>Pizza Places</h3>
         <ul>
           <?php
             //include './db_connection.php';
             $sql = "SELECT name, rating, attended FROM pizza";
             $result = $conn->query($sql);
             while ($row = $result->fetch_assoc())
             {
               if ($row["attended"] == 1)
               {
                 echo "<li class=\"check\">" . $row["name"] . "</li>";
               }
               else {
                 {
                   echo "<li class=\"uncheck\">" . $row["name"] . "</li>";
                 }
               }
             }
             //CloseCon($conn);
            ?>
         </ul>
       </div>
       <div class="column-right">
         <h3>Dessert Places</h3>
           <ul>
             <?php
               //include './db_connection.php';
               $sql = "SELECT name, rating, attended FROM dessert";
               $result = $conn->query($sql);
               while ($row = $result->fetch_assoc())
               {
                 if ($row["attended"] == 1)
                 {
                   echo "<li class=\"check\">" . $row["name"] . "</li>";
                 }
                 else {
                   {
                     echo "<li class=\"uncheck\">" . $row["name"] . "</li>";
                   }
                 }
               }
               CloseCon($conn);
              ?>
           </ul>
         </div>
       </div>
    </div>

  </body>

</html>

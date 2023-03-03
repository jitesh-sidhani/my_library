<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book from DB</title>
</head>
<body>
    <div class="div1">
        <?php

        include 'db_conn.php';

        $sql="SELECT book_file From books";
        $query=mysqli_query($conn.$sql);
        while($info=mysqli_fetch_array($query)){

        }
      ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['pdf']; ?>" width="900" height="500">
     <?php
        
        ?>
    </div>    
</body>
</html>
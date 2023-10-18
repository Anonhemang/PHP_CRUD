<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('conn.php');
$i = $_GET['i'];

    $query = "DELETE FROM registration WHERE id='$i' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
      echo "<script>alert('Your Record Has Been Deleted')</script>";   
    
    ?>
    <meta http-equiv="refresh" content="0; url=http://localhost/poojainfotech/show.php">

  <?php
    }
    else
    {
       echo "not deleted";
    }    

?>

</body>
</html>



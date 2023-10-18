<?php
session_start();
include('conn.php');

if(isset($_POST['updatebtn'])){
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $email = $_POST['edit_email'];
    $number = $_POST['edit_number'];
    $upd_que = "UPDATE registration SET namee = '$name', email= '$email', contact='$number' WHERE id='$id'";
    $run_upd = mysqli_query($conn, $upd_que);

    if($run_upd){
        $_SESSION['success']="entered";
        header('Location:show.php');
    }
    else{
        echo "fail to enter data";
    }
}

?>
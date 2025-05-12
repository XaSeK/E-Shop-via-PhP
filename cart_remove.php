<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $delete_query="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$item_id'";
    $delete_query=mysqli_query($con, $delete_query) or die(mysqli_error($con));
    header('location: products.php');
?>


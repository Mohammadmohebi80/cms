<?php
include '../../includes/db.php' ;

//delete ::

if (isset($_GET['delite'])){
    $id = $_GET['delite'] ;
    // echo $id ;

    $q_delete = "DELETE FROM category WHERE  cat_id = '$id'" ;
   $ok =  mysqli_query($connection , $q_delete) ;
   // header("Location: category.php");
    header("Location:../category.php");
}
?>
<?php
include '../../../CMS/includes/db.php' ;
if (isset($_GET['id'])){
    $id  = $_GET['id'] ;

    $queru = "DELETE FROM post WHERE  post_id = '$id'" ;
    mysqli_query($connection, $queru) ;
    header("location:../../../CMS/admin/post.php?source=add_pos");
}

?>
<?php //include '../../../CMS/includes/db.php'?>

<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>comment</th>
        <th>Email</th>
        <th>status</th>
        <th>In response to</th>
        <th>Date</th>
        <th>Approve</th>
        <th>unapprove</th>
        <th>Delete</th>

    </tr>
    </thead>

    <tbody>
    <?php


    $q = "SELECT * FROM comments" ;
    $all = mysqli_query($connection , $q) ;


    while ($row = mysqli_fetch_assoc($all)){
        $comment_id = $row['comment_id'] ;
        $comment_post_id = $row['comment_post_id'] ;
        $comment_author = $row['comment_author'] ;
        $comment_email = $row['comment_email'] ;
        $comment_content = $row['comment_content'] ;
        $comment_status = $row['comment_status'] ;
        $comment_date = $row['comment_date'] ;








        ?>
        <tr>
            <td><?php echo $comment_id  ; ?></td>
            <td><?php echo $comment_author  ; ?></td>
            <td><?php echo $comment_content  ; ?></td>
            <td><?php echo $comment_email  ; ?></td>
            <td><?php echo $comment_status  ; ?></td>
            <?php
            $query_ = "SELECT * FROM post WHERE post_category ='$comment_post_id'" ;
            $select_all  = mysqli_query($connection , $query_) ;
            while ($row = mysqli_fetch_assoc($select_all)){
                $post_title = $row['post_title'] ;
                echo " <td><a href='../../../CMS/post.php?p_id=$comment_post_id'>$post_title</a></td>" ;
            }
            ?>

            <td><?php echo $comment_date  ; ?></td>

<!---->
<!--            --><?php
//            $query_up = "SELECT * FROM category WHERE cat_id = '$category'";
//            $select_up = mysqli_query($connection, $query_up);
//
//            while ($r = mysqli_fetch_assoc($select_up)) {
//                $cat_i = $r['cat_id'];
//                $cat_t = $r['cat_title'];
//                echo "<td> {$cat_t}</td>";
//            }
//            ?>

            <td><a href="../../../CMS/admin/comment.php?Approve=<?php echo $comment_id?>">Approve</a></td>
            <td><a href="../../../CMS/admin/comment.php?unApprove=<?php echo $comment_id?>">unApprove</a></td>
            <td><a href="../../../CMS/admin/comment.php?delete=<?php echo $comment_id?>">Delete</a></td>



        </tr>

    <?php } ?>
    </tbody>
</table>

<?php

if (isset($_GET['Approve'])){
    $id =  $_GET['Approve'] ;
    $query_delite = "UPDATE comments SET comment_status = 'Approve' WHERE  comment_id = '$id' " ;
    mysqli_query($connection , $query_delite) ;
  // header("location:../index.php");


}



if (isset($_GET['unApprove'])){
    $id =  $_GET['unApprove'] ;
    $query_delite = "UPDATE comments SET comment_status = 'unApprove'  WHERE  comment_id = '$id'" ;
    mysqli_query($connection , $query_delite) ;
  //  header("location:../../../CMS/admin/comment.php");


}



if (isset($_GET['delete'])){
    $id =  $_GET['delete'] ;
    $query_delite = "DELETE FROM comments WHERE comment_id ='$id' " ;
    mysqli_query($connection , $query_delite) ;



}

?>

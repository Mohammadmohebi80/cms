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
            <td>Some Title</td>
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

            <td><a href="../../../CMS/admin/includes/Delete_post.php?id=">Approve</a></td>
            <td><a href="../../../CMS/admin/post.php?source=update_post&id=">unApprove</a></td>

            <td><a href="../../../CMS/admin/includes/Delete_post.php?id=">Delete</a></td>



        </tr>

    <?php } ?>
    </tbody>
</table>

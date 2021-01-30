<?php //include '../../../CMS/includes/db.php'?>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Title</th>
        <th>category</th>
        <th>status</th>
        <th>image</th>
        <th>Tags</th>
        <th>Comment_count</th>
        <th>Date</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    </thead>

    <tbody>
    <?php


    $q = "SELECT * FROM post" ;
    $all = mysqli_query($connection , $q) ;


    while ($row = mysqli_fetch_assoc($all)){
        $ID = $row['post_id'] ;
        $Author = $row['post_author'] ;
        $Title = $row['post_title'] ;
        $category = $row['post_category'] ;
        $status = $row['post_status'] ;
        $image = $row['post_image'] ;
        $Tags = $row['post_tags'] ;
        $Comment_count = $row['post_coment_count'] ;
        $Date = $row['post_date'] ;








        ?>
        <tr>
            <td><?php echo $ID  ; ?></td>
            <td><?php echo $Author  ; ?></td>
            <td><?php echo $Title  ; ?></td>
            <td><?php echo $category  ; ?></td>
            <td><?php echo $status  ; ?></td>
            <td><img class="img-responsive" width="300px" height="300px" src="../../CMS/images/<?php echo $image?>"   ></td>
            <td><?php echo $Tags  ; ?></td>
            <td><?php echo $Comment_count  ; ?></td>
            <td><?php echo $Date  ; ?></td>
            <td><a href="../../../CMS/admin/includes/Delete_post.php?id=<?php echo $ID ?>">Delete</a></td>
            <td><a href="../../../CMS/admin/post.php?source=update_post&id=<?php echo $ID ?>">update</a></td>


        </tr>

    <?php } ?>
    </tbody>
</table>

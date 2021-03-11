<?php //include '../../../CMS/includes/db.php'?>

<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>username</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>role</th>

    </tr>
    </thead>

    <tbody>
    <?php


    $q = "SELECT * FROM user" ;
    $all_user = mysqli_query($connection , $q) ;


    while ($row = mysqli_fetch_assoc($all_user)){

        $user_id = $row['user_id'] ;
        $user_name = $row['user_name'] ;
        $firstname = $row['firstname'] ;
        $lastname = $row['lastname'] ;
        $email = $row['email'] ;
        $user_image = $row['user_image'] ;
        $role = $row['role'] ;




        ?>
        <tr>
            <td><?php echo $user_id ; ?></td>
            <td><?php echo $user_name  ; ?></td>
            <td><?php echo $firstname ; ?></td>
            <td><?php echo $lastname  ; ?></td>
            <td><?php echo $email  ; ?></td>
            <td><?php echo $role  ; ?></td>


            <td><a href="../../../CMS/admin/comment.php?Approve=<?php echo $user_id?>">Approve</a></td>
            <td><a href="../../../CMS/admin/comment.php?unApprove=<?php echo $user_id?>">unApprove</a></td>
            <td><a href="../../../CMS/admin/comment.php?delete=<?php echo $user_id?>">Delete</a></td>
            <td><a href="../../../CMS/admin/user.php?source=update_user&&id=<?php echo $user_id?>">Update</a></td>

        </tr>

    <?php } ?>
    </tbody>
</table>

<?php



if (isset($_GET['Approve'])){
    $id =  $_GET['Approve'] ;
    $query_delite = "UPDATE comments SET comment_status = 'Approve' WHERE  comment_id = '$id' " ;
    mysqli_query($connection , $query_delite) ;

}

if (isset($_GET['unApprove'])){
    $id =  $_GET['unApprove'] ;
    $query_delite = "UPDATE comments SET comment_status = 'unApprove'  WHERE  comment_id = '$id'" ;
    mysqli_query($connection , $query_delite) ;


}

if (isset($_GET['delete'])){
    $id =  $_GET['delete'] ;
    $query_delite = "DELETE FROM comments WHERE comment_id ='$id' " ;
    mysqli_query($connection , $query_delite) ;

}

?>


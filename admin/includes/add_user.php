<?php
include 'headers.php' ;
if (isset($_POST['create_user'])){
//    echo "ok" ;

    $user_name = $_POST['user_name'] ;
    $pass = $_POST['pass'] ;
    $firstname = $_POST['firstname'] ;
    $lastname = $_POST['lastname'] ;
    $email = $_POST['email'] ;
    $user_role= $_POST['post_role'];


    $query = "INSERT INTO user (user_name , firstname ,lastname ,email ,role ,pass) VALUE  ('$user_name' , 
    '$firstname' , '$lastname' ,'$email' , '$user_role' , '$pass' )" ;

    mysqli_query($connection , $query) ;

}

?>

<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
        <label for="title">user name</label>
        <input type="text" class="form-control" name="user_name">
    </div>

    <div class="form-group">
        <label for="title">password</label>
        <input type="text" class="form-control" name="pass">
    </div>

    <div class="form-group">
        <label for="title">first name</label>
        <input type="text" class="form-control" name="firstname">
    </div>

    <div class="form-group">
        <label for="title">last name</label>
        <input type="text" class="form-control" name="lastname">
    </div>

    <div class="form-group">
        <label for="title">Email</label>
        <input type="text" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="category">user role</label>
        <select name="post_role" id="">

            <option value="admin">Admin</option>
            <option value="subscriber">subscriber</option>



            <?php
//            $q = "SELECT * FROM user" ;
//            $all  = mysqli_query($connection , $q) ;
//
//            while ($row = mysqli_fetch_assoc($all)) {
//
//                $user_id = $row['user_id'];
//                $user_role = $row['role'];
//
//                echo "<option value='$user_id'>$user_role</option>" ;
//            }
            ?>



        </select>

    </div>




    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Publish Post">
    </div>


</form>


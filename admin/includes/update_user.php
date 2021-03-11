
<?php

if (isset($_GET['id'])){
    $id = $_GET['id'] ;


    // echo $_GET['id'] ;
    $query = "SELECT * FROM user WHERE  user_id = '$id'" ;
    $all = mysqli_query($connection , $query) ;
    while ($row = mysqli_fetch_assoc($all)){

        $user_name = $row['user_name'] ;
        $pass = $row['pass'] ;
        $firstname = $row['firstname'] ;
        $lastname = $row['lastname'] ;
        $email = $row['email'] ;
        $user_role= $row['role'];
    }



}


?>





<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
        <label for="title">user name</label>
        <input type="text" class="form-control" name="user_name" value="<?php echo $user_name?>">
    </div>

    <div class="form-group">
        <label for="title">password</label>
        <input type="text" class="form-control" name="pass" value="<?php echo $pass?>">
    </div>

    <div class="form-group">
        <label for="title">first name</label>
        <input type="text" class="form-control" name="firstname" value="<?php echo $firstname?>">
    </div>

    <div class="form-group">
        <label for="title">last name</label>
        <input type="text" class="form-control" name="lastname" value="<?php echo $lastname?>">
    </div>

    <div class="form-group">
        <label for="title">Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
    </div>

    <div class="form-group">
        <label for="category">user role</label>
        <select name="post_role" id="">

            <option value="<?php echo $user_role?>"><?php echo $user_role?></option>
            <?php
            if ($user_role == "Admin"){
                echo "<option value='subscriber' >subscriber</option>" ;
            }

            if ($user_role == "subscriber"){
                echo "<option value='Admin' >Admin</option>" ;
            }

            ?>




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
        <input class="btn btn-primary" type="submit" name="updateuser" value="Update user">
    </div>

</form>

<?php

if (isset($_POST['updateuser'])){


    $user_name_up = $_POST['user_name'] ;
    $pass_up = $_POST['pass'] ;
    $firstname_up = $_POST['firstname'] ;
    $lastname_up = $_POST['lastname'] ;
    $email_up = $_POST['email'] ;
    $user_role_up= $_POST['post_role'];



    $update_user = "UPDATE  user  SET user_name ='$user_name_up' ,  pass='$pass_up'  , firstname='$firstname_up' , 
    lastname='$lastname_up'  , email='$email_up'  ,role='$user_role_up'  
    WHERE user_id ='$id'" ;


    mysqli_query($connection , $update_user) ;
 



}
?>




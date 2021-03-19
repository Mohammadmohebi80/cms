<?php include "../../CMS/includes/db.php"?>
<?php include "../../CMS/admin/includes/headers.php" ?>

  <?php
       if (isset($_SESSION['username'])){

           $username = $_SESSION['username'] ;

           $query = "SELECT  * FROM user WHERE  user_name = '$username'" ;

           $select_user = mysqli_query($connection , $query) ;

           while ($row  =  mysqli_fetch_array($select_user)){
               $user_id = $row['user_id'] ;
               $user_name = $row['user_name'] ;
               $firstname = $row['firstname'] ;
               $lastname = $row['lastname'] ;
               $email = $row['email'] ;
               $user_image = $row['user_image'] ;
               $user_role = $row['role'] ;
               $pass = $row['pass'] ;
           }

}

?>

<?php

if (isset($_POST['updatepro'])){

    $user_name_up = $_POST['user_name'] ;
    $pass_up = $_POST['pass'] ;
    $firstname_up = $_POST['firstname'] ;
    $lastname_up = $_POST['lastname'] ;
    $email_up = $_POST['email'] ;
    $user_role_up= $_POST['post_role'];



    $update_user = "UPDATE  user  SET user_name ='$user_name_up' ,  pass='$pass_up'  , firstname='$firstname_up' , 
    lastname='$lastname_up'  , email='$email_up'  ,role='$user_role_up'  
    WHERE user_name = '$username' " ;

    mysqli_query($connection , $update_user) ;

}


?>




<div id="wrapper">


    <!-- Navigation -->

    <?php include "../../CMS/admin/includes/Navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
                        Welcome to admin
                        <small>View all comment </small>
                    </h1>



                    <form action="" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="title">user name</label>
                            <input type="text" class="form-control" name="user_name" value="<?php echo $user_name?>">
                        </div>

                        <div class="form-group">
                            <label for="title">password</label>
                            <input type="password" class="form-control" name="pass" value="<?php echo $pass?>">
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
                            <input class="btn btn-primary" type="submit" name="updatepro" value="Update Profile">
                        </div>

                    </form>



                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>


    <!-- /#page-wrapper -->

    <?php include "../../CMS/admin/includes/footer.php" ?>

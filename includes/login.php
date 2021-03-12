<?php  include "db.php" ?>
<?php   session_start() ;  ?>
<?php


    if (isset($_POST['btn'])){


              $username = $_POST['username'] ;
              $pass = $_POST['pass'] ;

              $username = mysqli_real_escape_string($connection , $username) ;
              $pass = mysqli_real_escape_string($connection , $pass) ;

              $query = "SELECT  * FROM user WHERE user_name = '{$username}'" ;
              $select_users = mysqli_query($connection , $query) ;


              while ($row = mysqli_fetch_array($select_users)){

                  $db_id = $row['user_id'] ;
                  $db_pass = $row['pass'] ;
                  $db_firstname = $row['firstname'] ;
                  $db_lastname = $row['lastname'] ;
                  $db_user_name = $row['user_name'] ;
                  $db_role = $row['role'] ;

              }


              if ($username  !== $db_user_name && $pass !== $db_pass){
                  header("Location: ../index.php");
              }
              elseif ($username == $db_user_name && $pass == $db_pass){

                  $_SESSION['username'] = $db_user_name ;
                  $_SESSION['firstname'] = $db_firstname ;
                  $_SESSION['lastname'] = $db_lastname ;
                  $_SESSION['role'] = $db_role ;

                  header("Location:../admin");
              }
              else{
                  header("Location:../index.php");
              }



    }

?>

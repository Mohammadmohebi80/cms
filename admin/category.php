
<?php  include "../includes/db.php"?>
<?php include "../../CMS/admin/includes/headers.php"?>

<div id="wrapper">

    <!-- Navigation -->


    <?php  include "../../CMS/admin/includes/Navigation.php"?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        welcome
                        <small>Author</small>
                    </h1>


                    <div class="col-xs-6">

                        <?php

                        if(isset($_POST['btn'])){
                            $name   =  $_POST['cat_title']  ;


                            if ($name == "" || empty($name)){
                                echo "not be empty"  ;
                            }
                            else{

                                $q = "INSERT INTO category (cat_title) VALUE  ('$name')" ;
                                mysqli_query($connection , $q) ;
                            }
                        }


                        ?>

<!--                        add ::-->
                        <form action="" method="post">

                            <div class="form-group">

                                <label for="cat_title">Add category</label>
                                <input type="text" class="form-control" name="cat_title">

                            </div>

                            <div class="form-group">


                                <input type="submit" class="btn btn-primary" name="btn" value="add">

                            </div>
                        </form>


<!--                         update ::-->
                        <form action="" method="post">

                            <div class="form-group">

                                <label for="cat_title">update category</label>

<?php

                            if (isset($_GET['edite'])) {
    $id_up = $_GET['edite2'];
   //  echo $id_up ;
    // die();



    $query_up = "SELECT * FROM category WHERE cat_id = '$id_up'";
    $select_up = mysqli_query($connection, $query_up);

    while ($r = mysqli_fetch_assoc($select_up)) {
        $cat_i = $r['cat_id'];
        $cat_t = $r['cat_title'];

        // echo $cat_t;
        ?>

        <?php  echo "<input type='text' class='form-control' name='cat_title' value='$cat_t'>" ;  ?>
    <?php  }}  ?>


                                <?php




                                if (isset($_POST['btn1'])){


                                    $name = $_POST['cat_title'] ;

                                    $query_update = "UPDATE category SET cat_title = '$name' WHERE cat_id = '$id_up'" ;

                                    $update =  mysqli_query($connection   , $query_update) ;

                                   // header("Location:category.php");

                                }




                                ?>



               


                            </div>

                            <div class="form-group">


                                <input type="submit" class="btn btn-primary" name="btn1" value="update">

                            </div>

                        </form>
                    </div>


                    <?php

                    $query = "SELECT * FROM category " ;
                    $select_a =  mysqli_query($connection , $query) ;



                    ?>

                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>cat id </th>
                                <th>cat title</th>

                            </tr>
                            </thead>

                            <tbody>

                            <?php

                            while ($row = mysqli_fetch_assoc($select_a)){
                                $cat_id = $row['cat_id'] ;
                                $cat_title = $row['cat_title'] ;

                               echo "<tr>" ;
                               echo "<td>{$cat_id}</td>" ;
                               echo "<td>{$cat_title}</td>" ;
                               echo "<td><a href='includes/delete.php?delite=$cat_id'>Delete</a></td>" ;
                               echo "<td><a href='category.php?edite=$cat_id&edite2=$cat_id'>edite</a></td>" ;
                               echo"</tr>" ;

                            }

                            ?>




                            </tbody>

                        </table>


                    </div>



                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php include "../../CMS/admin/includes/footer.php"?>
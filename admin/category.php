
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


                        <form action="">

                            <div class="form-group">

                                <label for="cat_title">Add category</label>
                                <input type="text" class="form-control" name="cat_title">

                            </div>

                            <div class="form-group">


                                <input type="submit" class="btn btn-primary" name="btn" value="add">

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
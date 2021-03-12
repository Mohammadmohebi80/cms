

<?php include "../includes/db.php"?>
<?php include "includes/headers.php"?>

    <div id="wrapper">

        <?php if ($connection){
//            echo "con" ;
        }?>

        <!-- Navigation -->


        <?php  include "../../CMS/admin/includes/Navigation.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small><?php  echo  $_SESSION['username']?></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "../../CMS/admin/includes/footer.php"?>
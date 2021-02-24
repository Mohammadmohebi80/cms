<?php include "../../CMS/includes/db.php"?>
<?php include "../../CMS/admin/includes/headers.php" ?>

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


                    <?php
                    include '../../CMS/admin/includes/View_all_comment.php' ;


                    ?>




                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>


    <!-- /#page-wrapper -->

<?php include "../../CMS/admin/includes/footer.php" ?>
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
                        <small>View all post</small>
                    </h1>


               <?php

               if (isset($_GET['source'])){
                   $soure = $_GET['source'] ;

                   switch ($soure){
                       case "add_post" ;
                       include "../../CMS/admin/includes/add_post.php" ;
                       break ;

                       case "update_post" ;
                       include "../../CMS/admin/includes/update_post.php" ;
                           break ;

                       default :
                           include "../../CMS/admin/includes/View_all_post.php" ;

                   }

               }


               ?>




                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>


    <!-- /#page-wrapper -->

<?php include "../../CMS/admin/includes/footer.php" ?>
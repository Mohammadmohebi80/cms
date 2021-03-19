

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







                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                     <?php

                                     $query = "SELECT * FROM post" ;
                                     $select_all_post = mysqli_query($connection , $query) ;
                                     $count_post = mysqli_num_rows($select_all_post) ;

                                     echo  "<div class='huge'>$count_post</div>"
                                     ?>





                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="post.php?source=add_pos">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <?php

                                        $query = "SELECT * FROM comments" ;
                                        $select_all_comments = mysqli_query($connection , $query) ;
                                        $count_comments = mysqli_num_rows($select_all_comments) ;

                                        echo  "<div class='huge'>$count_comments</div>"
                                        ?>



                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comment.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <?php

                                        $query = "SELECT * FROM user" ;
                                        $select_all_user = mysqli_query($connection , $query) ;
                                        $count_user = mysqli_num_rows($select_all_user) ;

                                        echo  "<div class='huge'>$count_user</div>"
                                        ?>


                                        <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="user.php?source=up">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">



                                        <?php

                                        $query = "SELECT * FROM category" ;
                                        $select_all_category = mysqli_query($connection , $query) ;
                                        $count_category = mysqli_num_rows($select_all_category) ;

                                        echo  "<div class='huge'>$count_category</div>"
                                        ?>

                                        <div>Categories</div>
                                    </div>
                                </div>
                            </div>
                            <a href="category.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">


                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Date', 'count'],

                                <?php

                                    $elemnt_text = ['post' , 'comments', 'user' , 'category'] ;
                                    $elemnt_count = [$count_post , $count_comments , $count_user , $count_category] ;


                                    for ($i = 0  ; $i < count($elemnt_count) ; $i++){
                                        echo "['{$elemnt_text[$i]}'".","."{$elemnt_count[$i]}]," ;
                                    }

                                ?>
                              //  ['Post', 1],

                            ]);

                            var options = {
                                chart: {
                                    title: '',
                                    subtitle: '',
                                }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>

                    <div id="columnchart_material" style="width: auto; height: 500px;"></div>
                </div>










            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "../../CMS/admin/includes/footer.php"?>
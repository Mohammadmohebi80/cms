<?php   include "includes/db.php" ?>
<?php   include "includes/header.php"?>


    <!-- Navigation -->
<?php  include "includes/navigation.php"?>
    <!-- Page Content -->
    <div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>mohammad</small>
            </h1>

            <?php

            if (isset($_GET['p_id'])){
                $the_id = $_GET['p_id'] ;

            }
            $query = "SELECT * FROM post WHERE post_id = '$the_id '" ;
            $select_All = mysqli_query($connection , $query) ;
            while ($row = mysqli_fetch_assoc($select_All)){


                $post_title = $row['post_title']  ;
                $post_author = $row['post_author']  ;
                $post_date = $row['post_date']  ;
                $post_image = $row['post_image']  ;
                $post_content = $row['post_contant']  ;


                ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php  echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php  echo $post_author?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                <hr>
                <p><?php   echo $post_content?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

            <?php  } ?>


            <!-- Blog Comments -->

            <!-- Comments Form -->

            <?php
            if (isset($_POST['btn'])) {

                $the_id = $_GET['p_id'];
                $author = $_POST['comment_author'];
                $email = $_POST['comment_email'];
                $content = $_POST['comment_content'];

                $query_comment = "INSERT INTO comments (comment_post_id  , 
                comment_author , 
                comment_email , 
                comment_content , 
                comment_status , 
                comment_date
                ) VALUE  ('$the_id' , '$author' , '$email' , '$content' , 'unapproved' , now())";
                mysqli_query($connection, $query_comment);
            }


            ?>

            <div class="well">
                <h4>Leave a Comment:</h4>
                <form role="form" method="post">
                    <div class="form-group">
                       <input type="text" name="comment_author" class="form-control" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <input type="text" name="comment_email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="comment_content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                </form>
            </div>

            <hr>

            <!-- Posted Comments -->

            <!-- Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Start Bootstrap
                        <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

            <!-- Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Start Bootstrap
                        <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <!-- Nested Comment -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Nested Start Bootstrap
                                <small>August 25, 2014 at 9:30 PM</small>
                            </h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <!-- End Nested Comment -->
                </div>
            </div>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php"?>

    </div>
    <!-- /.row -->

    <hr>

<?php   include "includes/footer.php"?>
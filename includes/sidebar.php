<div class="col-md-4">


    <!-- Blog Search Well -->
        <div class="well">
            <h4>Blog Search</h4>

                 <form action="../../CMS/search.php" method="post">
                            <div class="input-group">
                                 <input type="text" class="form-control" name="text">
                                <span class="input-group-btn">
                                 <button class="btn btn-default" type="submit"  name="btn">
                                <span class="glyphicon glyphicon-search"></span>
                                 </button>
                                </span>
                             </div>
                   </form>
        <!-- /.input-group -->
        </div>


    <!-- login -->
    <div class="well">
        <h4>Login</h4>

        <form action="../../CMS/includes/login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Enter user name">

            </div>
            <div class="input-group">
                <input type="password" class="form-control" name="pass" placeholder="Enter password">
                <span class="input-group-btn">
                    <button class="btn btn-primary" name="btn" type="submit">
                        Login

                    </button>

                </span>

            </div>
        </form>
        <!-- /.input-group -->
    </div>




    <!-- Blog Categories Well -->
    <div class="well">


        <?php


        $query = "SELECT * FROM category " ;

        $select_all = mysqli_query($connection , $query) ;



        ?>
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php

                    while ($row = mysqli_fetch_assoc($select_all)){
                        $cat_title = $row['cat_title'] ;
                        $cat_id = $row['cat_id'] ;

                        echo " <li><a href='../../CMS/cat.php?cat_id=$cat_id'>{$cat_title}</a></li>"  ;
                    }






                    ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->

        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
   <?php   include "widget.php"?>

</div>
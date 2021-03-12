<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">CMS admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">


        <li><a href="../../CMS/index.php">HOME</a></li>






        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#post"><i class="fa fa-fw fa-arrows-v"></i> POST<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="post" class="collapse">
                    <li>
                        <a href="../../../CMS/admin/post.php">View all post</a>
                    </li>
                    <li>
                        <a href="#">add post </a>
                    </li>
                </ul>
            </li>




            <li>
                <a href="../../../CMS/admin/category.php"><i class="fa fa-fw fa-wrench"></i>category</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#comment"><i class="fa fa-fw fa-arrows-v"></i> COMMENT<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="comment" class="collapse">
                    <li>
                        <a href="../../../CMS/admin/comment.php">View all comments</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-arrows-v"></i> user<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user" class="collapse">
                    <li>
                        <a href="../../../CMS/admin/user.php">View all user</a>
                    </li>
                    <li>
                        <a href="#">add user </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> profile</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
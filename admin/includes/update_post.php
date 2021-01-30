<?php

if (isset($_GET['id'])){
    $id = $_GET['id'] ;
   // echo $_GET['id'] ;
    $query = "SELECT * FROM post WHERE  post_id = '$id'" ;
    $all = mysqli_query($connection , $query) ;
    while ($row = mysqli_fetch_assoc($all)){

        $ID = $row['post_id'] ;
        $Author = $row['post_author'] ;
        $Title = $row['post_title'] ;
        $category = $row['post_category'] ;
        $status = $row['post_status'] ;
        $image = $row['post_image'] ;
        $Tags = $row['post_tags'] ;
        $Comment_count = $row['post_coment_count'] ;
        $Date = $row['post_date'] ;
    }

}


?>



<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $Title?>">
    </div>

    <div class="form-group">
        <label for="title">category id </label>
        <input type="text" class="form-control" name="id" value="<?php echo $ID?>">
    </div>

    <div class="form-group">
        <label for="title">Post Author</label>
        <input type="text" class="form-control" name="Author" value="<?php echo $Author?>">
    </div>

    <div class="form-group">
        <label for="title">Post status</label>
        <input type="text" class="form-control" name="status" value="<?php echo $status?>">
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select name="post_category" id="">

            <?php

            $q = "SELECT * FROM category" ;
            $all  = mysqli_query($connection , $q) ;
            while ($row = mysqli_fetch_assoc($all)) {


                $cat_title = $row['cat_title'];

                echo "<option value='$cat_title'>$cat_title</option>" ;
            }


            ?>



        </select>

    </div>


    <div class="form-group">
        <label for="users">Users</label>
        <select name="post_user" id="">




        </select>

    </div>



    <div class="form-group">
        <select name="post_status" id="">
            <option value="draft">Post Status</option>
            <option value="published">Published</option>
            <option value="draft">Draft</option>
        </select>
    </div>



    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file"  name="image">
    </div>

    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
         </textarea>
    </div>



    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>


</form>



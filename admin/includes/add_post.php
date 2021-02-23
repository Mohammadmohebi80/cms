<?php
include 'headers.php' ;
if (isset($_POST['create_post'])){
//    echo "ok" ;
    $post_category = $_POST['post_category'] ;
    $title = $_POST['title'] ;
    $id = $_POST['id'] ;
    $Author = $_POST['Author'] ;
    $status = $_POST['status'] ;


    $post_image = $_FILES['image']['name'] ;
    $post_image_temp = $_FILES['image']['tmp_name'] ;



    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'] ;
    $posst_date = date('d-m-y') ;
    $post_coment_count = 4 ;
    $post_status  = $_POST['post_status'] ;


   // echo $post_image ;
    move_uploaded_file($post_image_temp, "../images/$post_image") ;


    $query = "INSERT INTO post (post_category , post_title ,post_author ,post_date ,post_image ,post_contant ,post_tags ,post_coment_count ,post_status) VALUE  ('$post_category' , 
'$title' , '$Author' , now() , '$post_image' , '$post_content' , '$post_tags' , '$post_coment_count' , '$post_status' )" ;

    mysqli_query($connection , $query) ;

}

?>

<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="form-group">
        <label for="title">category id </label>
        <input type="text" class="form-control" name="id">
    </div>

    <div class="form-group">
        <label for="title">Post Author</label>
        <input type="text" class="form-control" name="Author">
    </div>

    <div class="form-group">
        <label for="title">Post status</label>
        <input type="text" class="form-control" name="status">
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

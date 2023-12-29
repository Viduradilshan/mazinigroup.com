<?php include('auth.php');?>
<?php  require_once('dt_con.php')  ?>
<?= include 'include/head.php'; ?>
    
      
     
           
           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                        <div class="card-header">
                                            <h4>Add Post
                                                <a href="post-view.php" class="btn btn-danger float-end">Back</a>
                                            </h4>
                                        </div>
                                          <?php if (isset($_GET['id'])) {
                                                $id=mysqli_real_escape_string($mysql,$_GET['id']);
                                                $select_posts="SELECT * FROM `post` WHERE `id`=' $id' LIMIT 1";
                                                $select_posts_run=mysqli_query($mysql,$select_posts);
                                                    if(mysqli_num_rows($select_posts_run)>0){
                                                        foreach($select_posts_run as $data){ ?>


                                                    <div class="card-body">
                                                            <form action="post-up.php" method="POST" enctype="multipart/form-data">
                                                                        <div class="row">
                                                                            <input type="hidden" name="post_id" value="<?=$data['id']?>">
                                                                        </div>
                                                                        <div class="row ">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="name">Title</label>
                                                                                <input type="text"  onload="convertToSlug(this.value)" 
                                                                                onkeyup="convertToSlug(this.value)" name="name" id="exampleInputEmail1"
                                                                                aria-describedby="TitleHelp" class="form-control" value="<?=$data['name'];?>" require >
                                                                                <small id="TitleHelp" class="form-text text-muted">Edit product name.</small>
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="slug">Slug (url)</label>
                                                                                <input type="text"  name="slug" value="<?=$data['slug'];?>"  class="form-control">
                                                                                <small id="slug-text" name="cslug"class="form-text text-muted" ></small>

                                                                            
                                                                            </div>
                                                                            <div class="col-md-12 mb-3">
                                                                                <label for="description">Description</label>
                                                                                <textarea name="description" class="form-control" id="text_edit" cols=""  rows="10"require><?=$data['description'];?></textarea>
                                                                            </div>
                                                                            <div class="col-md-12 mb-3">
                                                                                <label for="meta_title">Meta Title</label>
                                                                                <input type="text" name="meta_title" value="<?=$data['meta_title'];?>" class="form-control" >
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="meta_description">Meta Description</label>
                                                                                <textarea name="meta_description" class="form-control" max="191" cols="" rows="4" ><?=$data['meta_discription'];?></textarea>
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="meta_keyword">Meta Keyword</label>
                                                                                <textarea name="meta_keyword" class="form-control" max="191" cols="" rows="4"><?=$data['key_word']?></textarea>
                                                                        </div>
                                                        
                                                                    </div>
                                                                <div class="row">

                                                                        <div class="col-md-6 mb-2">
                                                                            <label for="category-list">Category List</label>
                                                                            <?php 
                                                                            $cat_data="SELECT * FROM `cat` WHERE `status`='0'"; 
                                                                            $cat_data_run=mysqli_query($mysql, $cat_data);
                                                                            if(mysqli_num_rows($cat_data_run)>0){?>
                                                                                <select name="category_id" id="" class="form-control" Required>
                                                                                    <option value="0">--select Category--</option>
                                                                                    <?php

                                                                                    foreach ($cat_data_run as $catitems) { ?>
                                                                                          <option value="<?php echo $catitems['cat_name'] ;?>"<?=$catitems['cat_name']==$data['cat_name']  ?'selected':''?>>
                                                                                          <?php  echo $catitems['cat_name'] ;?></option>
                                                                                    
                                                                                    <?php
                                                                                    }
                                                                                    ?>
                                                                                    
                                                                                </select>

                                                                            <?php

                                                                            }
                                                                            else
                                                                            {  
                                                                                ?>
                                                                                <h5> No Cat now</h5>
                                                                            <?php
                                                                            }

                                                                            ?>
                                                                            
                                                                        </div>
                                                                        
                                                                    
                                                                </div>
                                                                    <div class="row mt-3">
                                                                        
                                                                        <div class="col-md-6 mb-2">
                                                                            <div class="col-md-6 mb-2">
                                                                                <label for="Image" class="form-label"> image Upload </label>
                                                                                <input class="form-control"  type="file" id="formFile" 
                                                                                onchange="preview()" name="image">
                                                                                
                                                                            </div>
                                                                            <input type="hidden" name="oldimg" value="<?=$data['image'];?>">
                                                                            <img id="frame" src="../upload/post/<?=$data['image'];?>" class="img-fluid" />
                                                                        </div>
                                                                            


                                                                    </div>
                                                                    <div class="row mt-5">
                                                                        
                                                                        <button type="submit" name="post-update" class="btn btn-primary btn-lg">Post</button>
                                                                        
                                                                    </div>

                                                                
                                                                

                                                            </form>
                                                </div>




                                                            
                                                            <?php
                                                        }





                        
                                               }}?>
        
                                      
                                </div>
                                    
                                </div>
                        </div>
                    



                </main>
               <?php include('include/footer.php');?>
            </div>
        </div>
       <?php include('include/script.php');?>
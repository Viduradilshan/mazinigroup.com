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
                                        <div class="card-body">
                                                <form action="code_copy.php" method="POST" enctype="multipart/form-data">
                                                            <div class="row ">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="name">Title</label>
                                                                    <input type="text"  onload="convertToSlug(this.value)" 
                                                                    onkeyup="convertToSlug(this.value)" name="name" id="exampleInputEmail1"
                                                                     aria-describedby="TitleHelp" class="form-control" require >
                                                                    <small id="TitleHelp" class="form-text text-muted">add product name.</small>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="slug">Slug (url)</label>
                                                                    <input type="text"  name="slug"  class="form-control">
                                                                    <small id="slug-text" name="cslug"class="form-text text-muted"></small>

                                                                   
                                                                </div>
                                                                <div class="col-md-12 mb-3">
                                                                    <label for="description">Description</label>
                                                                    <textarea name="description" class="form-control" id="text_edit" cols="" rows="10"require></textarea>
                                                                </div>
                                                                <div class="col-md-12 mb-3">
                                                                    <label for="meta_title">Meta Title</label>
                                                                    <input type="text" name="meta_title" class="form-control">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="meta_description">Meta Description</label>
                                                                    <textarea name="meta_description" class="form-control" max="191" cols="" rows="4" ></textarea>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="meta_keyword">Meta Keyword</label>
                                                                    <textarea name="meta_keyword" class="form-control" max="191" cols="" rows="4"></textarea>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                    <label for="short_dis">Short Description</label>
                                                                    <textarea name="short_dis" class="form-control" max="191" cols="" rows="4"></textarea>
                                                            </div>
                                                            <!--select co-->
                                                            <div class="row">

                                                            <div class="col-md-6 mb-2">
                                                                <label for="category-list">country List</label>
                                                                <?php 
                                                                $cou_data="SELECT * FROM `country`"; 
                                                                $cou_data_run=mysqli_query($mysql, $cou_data);
                                                                if(mysqli_num_rows($cou_data_run)>0){?>
                                                                    <select name="cou_id" id="" class="form-control" Required>
                                                                        <option value="all" selected="selected">--All country--</option>
                                                                        <?php

                                                                        foreach ($cou_data_run as $couitem) { ?>
                                                                        <option value="<?php echo $couitem['country_code'] ;?>"><?php  echo $couitem['country_name'] ;?></option>
                                                                        
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        
                                                                    </select>

                                                                <?php

                                                                }
                                                                else
                                                                {  
                                                                    ?>
                                                                    <h5> No country now</h5>
                                                                <?php
                                                                }

                                                                ?>
                                                                
                                                            </div>
                                                            
                                                        
                                                    </div>
                                                            <!--    -->
                                                    <div class="row">

                                                            <div class="col-md-6 mb-2">
                                                                <label for="category-list">Category List</label>
                                                                <?php 
                                                                $cat_data="SELECT * FROM `cat` WHERE `status`=0 "; 
                                                                $cat_data_run=mysqli_query($mysql, $cat_data);
                                                                if(mysqli_num_rows($cat_data_run)>0){?>
                                                                    <select name="category_id" id="" class="form-control" Required>
                                                                        <option value="0">--select Category--</option>
                                                                        <?php

                                                                        foreach ($cat_data_run as $catitem) { ?>
                                                                        <option value="<?php echo $catitem['cat_name'] ;?>"><?php  echo $catitem['cat_name'] ;?></option>
                                                                        
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
                                                                    <label for="Image"  class="form-label"> image Upload </label>
                                                                    <input class="form-control" type="file" id="formFile" 
                                                                    onchange="preview()" name="image">
                                                                    
                                                                </div>
                                                                <img id="frame" src="" class="img-fluid" />
                                                            </div>
                                                                


                                                        </div>
                                                        <div class="row mt-5">
                                                            
                                                            <button type="submit" name="post-add" class="btn btn-primary btn-lg">Post</button>
                                                            
                                                        </div>

                                                    
                                                    

                                                </form>
                                    </div>
                                </div>
                                    
                                </div>
                        </div>
                    



                </main>
               <?php include('include/footer.php');?>
            </div>
        </div>
       <?php include('include/script.php');?>
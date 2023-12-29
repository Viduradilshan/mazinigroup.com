<?php  require_once('dt_con.php')  ?>
<?php include('auth.php');?>
<?= include 'include/head.php'; ?>
    
      
       
        
           
           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                        <div class="card-header">
                                            <h4>spain Post
                                                <a href="post-create.php" class="btn btn-danger float-end">Create Post</a>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="viewtable" class="table table-bordered table-striped">
                                                    <thead>
                                                       <tr>
                                                           <th>NO</th>
                                                            <th>TITLE</th>
                                                            <th>EDIT</th>
                                                            <th>DELETE</th>
                                                       </tr>

                                                    </thead>
                                                    <?php 
                                                        $con=1;
                                                        $post="SELECT * FROM post WHERE `country`='es'"; 
                                                        $post_run=mysqli_query($mysql,$post);
                                                        if(mysqli_num_rows($post_run)>0){
                                                        foreach($post_run as $pos){ ?>
                                                                <tbody>
                                                                    <tr>
                                                                    <td><?=$con?></td>
                                                                <td><?=$pos['name'];?></td>
                                                                <td><a href="post-update.php?id=<?=$pos['id'];?>" class="btn btn-success">Edit</a></td>
                                                            <td><form action="code.php" method="POST">
                                                                    <input type="hidden" name="oldimg"value="<?=$pos['image'];?>">
                                                                    <button type="submit" name="post-delete" value="<?=$pos['id'];?>" class="btn btn-danger">DELETE</button>
                                                                    </form>  </td>
                                                                        <?php $con++ ?>

                                                                    </tr>
                                                                </tbody>
                                                    <?php }}else{ ?>
                                                     <tr>
                                                        <td colspan="4">NO POST</td>
                                                     </tr>
                                                        <?php
                                                    };?>


                                                </table>
                                            </div>
                                               
                                    </div>
                                </div>
                                    
                                </div>
                        </div>
                    



                </main>
               <?php include('include/footer.php');?>
            </div>
        </div>
       <?php include('include/script.php');?>
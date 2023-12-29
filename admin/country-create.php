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
                                            <h4>Add Country
                                                <a href="post-view.php" class="btn btn-danger float-end">Back</a>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                                           <div class="row ">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="name">Country Name</label>
                                                                    <input type="text" name="category" id="exampleInputEmail1"
                                                                     aria-describedby="TitleHelp" class="form-control" require >
                                                                    <small id="TitleHelp" class="form-text text-muted">add country name.</small>
                                                                </div>
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col-md-10 mb-4">
                                                                
                                                                <button type="submit" name="post-add" class=" btn btn-secondary btn-lg">Add Country</button>
                                                                </div>
                                                            </div>
                                                </form>
                                    </div>
                                </div>
                                    
                                </div>
                        </div>
                    



                </main>




</main>
               <?php include('include/footer.php');?>
            </div>
        </div>
       <?php include('include/script.php');?>
<?php

$select_maxno="SELECT MAX(`page_id`) AS page_id FROM `post` WHERE `country`='es' AND `cat_name`='$slug'";
$select_maxno_run=mysqli_query($mysql,$select_maxno);

$maxnos=mysqli_fetch_assoc($select_maxno_run);
if(mysqli_num_rows($select_maxno_run)<0){
$no=1;
}else{
    $no=$maxnos['page_id'];
}









?>

                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                      <li><a href="#">Previous</a></li>
                                       <?php 
                                       $i=0;
                                       while($i<$no){
                                          $i=$i+1;
                                          
                                          ?>

                                          
                                          <li class="active"><a href="category.php?title=<?=$slug.'&id='.$i;?>"><?= $i?></a></li>
                                          <!--<li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>-->
                                          
                                          


                                     <?php
                                      
                                      }?>
                                      <li><a href="#">Next</a></li>
                                   
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>

































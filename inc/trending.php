<div class="trending__product">
            
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="section-title">
                        <h4>Trending Now</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="btn__all">
                        <a href="" class="primary-btn">View All <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                $sql = "SELECT * FROM animes where is_trending = 1 order by id desc ";
                $result = executeResult($sql);
                foreach($result as $key){
                    $id_cate = $key['category'];
                    $name = $key['name'];
                    $sql2 = "SELECT * FROM categories WHERE id = " .$id_cate;
                    $result1 = executeResult($sql2);
                    foreach($result1 as $key1){
                        $name_cate = $key1['name'];
                    ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                
                    <div class="product__item">
                    
                        <div class="product__item__pic set-bg" data-setbg="<?php echo $key['img']?>">
                            <div class="ep"><?php echo $key['chap']  ?></div>
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                        <div class="product__item__text">
                        
                            <ul>
                                <li><?php echo $name_cate ?></li>
                            </ul>
                            
                            <h5><a href="#"><?php echo $name?></a></h5>
                            <h6><a href="#"><?php echo $key['other_name']?></a></h56>
                            
                        </div>
                        
                    </div>
                    
                </div>
                <?php } }?>
            </div>
        </div>
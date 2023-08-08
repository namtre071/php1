
<div class="row">
                <div class="col-lg-8">
                
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>
                        <div class="anime__review__item">
                            <!-- Hiển thị các bình luận có trong db -->
                        <?php
                            $comment = 'select * from comments where AnimeID = ' .$id_cate_now;
                            $cmt = executeResult($comment);
                            foreach($cmt as $row) {
                            $ptime = $row['Timestamp'];
                            $user = 'select * from users where id = '.$row['UserID'];
                                $us = executeResult($user);
                                foreach($us as $row2) {
                            ?>
                            <div class="anime__review__item__pic">
                                <img src="<?= $row2['avatar']?>" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6><?= $row2['name'] ?><span>&ensp;<?= $row['Timestamp'] ?></span></h6>
                                <p><?= $row['Content']?></p>
                            </div>
                            <br>
                            <?php }} ?>
                        </div>
                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Your Comment</h5>
                        </div>
                        <!-- Nhập bình luận -->
                        <?php
                            $idcmt = "select id from users where username= '".$_SESSION['user']."'";
                            $id = executeSingleResult($idcmt);
                            
                            if($id != null){
                                $id = $id['id'];
                            }
                            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                                if (isset($_POST['comment'])) {
                                    $bl = $_POST['comment'];
                                    $new = "INSERT INTO comments (UserID, Content,AnimeID) VALUES ('$id', '$bl','$id_cate_now')";
                                    
                                    if ($con->query($new) === TRUE) {
                                        echo "<script>alert('Comment Success!');</script>";
                                        echo "<script>window.location.href='".$_SERVER['HTTP_REFERER']."'</script>";
                                        
                                    } else {
                                        echo "Lỗi: " . $sql . "<br>" . $conn->error;
                                    }
                                }
                        }
                            
                    
                           
                        ?>
                        <?php if(isset($error)) { echo "<p>$error</p>"; } ?>
                        <form action="#" method="post">
                            <textarea name="comment" placeholder="Your Comment"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                        </form>
                    </div>
                    
                </div>
</div>

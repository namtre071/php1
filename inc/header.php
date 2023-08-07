<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Homepage</a></li>
                                <li><a href="./categories.php">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.php">Categories</a></li>
                                        <li><a href="./anime-details.php">Anime Details</a></li>
                                        <li><a href="./anime-watching.php">Anime Watching</a></li>
                                        <li><a href="./blog-details.php">Blog Details</a></li>
                                        <li><a href="./signup.php">Sign Up</a></li>
                                        <li><a href="./login.php">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.php">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right" style="display :flex;align-items:center;">
                        
                        <?php 
                          if (!isset($_SESSION['username'])) { ?>	
                          <a href="#" class="search-switch"><span class="icon_search"></span></a>		
                          <a href="./login.php"><span class="icon_profile"></span></a>
                          <a href="./login.php"><span class="icon_signup"></span></a>

                            
                        
                        <?php } else{ ?>
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>

                        <a href="./login.php"><span style="font-size : 16px; "><?=$_SESSION['username']?></span></a> 
                        <a href="./logout.php"><span class="icon_lock-open"></span></a>
                            
                                
                                
								

							  

						<?php  } ?>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
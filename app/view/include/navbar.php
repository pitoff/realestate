    <!-- Header Section Begin -->
    <header class="header-section">
      <?php if(isLoggedIn() && $_SESSION['role'] == 2):?>
         <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                             <a href="<?php echo URLROOT;?>"><img src="<?php echo URLROOT;?>/image/logo1.jpg" alt="" style="width: 90px; height: 65px; border-top-left-radius:10px; border-top-right-radius: 10px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <ul>
                               <li><i class="icon_mail_alt" style="color: #a31317;"></i> vostan.support@vostan.com</li>
                                <li><i class="fa fa-mobile-phone" style="color: #a31317;"></i> 125-711-811 <span>125-668-886</span></li>
                            </ul>
                            <a href="<?php echo URLROOT;?>/users/logout" class="hw-btn">Log Out</a>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div> 
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo URLROOT;?>/users/dashboard">All Property</a></li>
                                        <li><a href="<?php echo URLROOT;?>/properties/myproperty/<?php echo $_SESSION['user_id'];?>">My Property</a></li>
                                        <li><a href="<?php echo URLROOT;?>/properties/submit">Submit Property</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo URLROOT;?>/users/profile/<?php echo $_SESSION['user_id'];?>">Profile</a></li>
                                <li><a href="<?php echo URLROOT;?>/users/agents">Agents</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="hn-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <?php elseif(isLoggedIn() && $_SESSION['role'] == 3):?>
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                             <a href="<?php echo URLROOT;?>"><img src="<?php echo URLROOT;?>/image/logo1.jpg" alt="" style="width: 90px; height: 65px; border-top-left-radius:10px; border-top-right-radius: 10px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="icon_mail_alt" style="color: #a31317;"></i> vostan.support@vostan.com</li>
                                <li><i class="fa fa-mobile-phone" style="color: #a31317;"></i> 125-711-811 <span>125-668-886</span></li>
                            </ul>
                            <a href="<?php echo URLROOT;?>/users/logout?>" class="hw-btn">Log Out</a>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div>
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="<?php echo URLROOT;?>/users/dashboard">Properties</a></li>
                                <li><a href="<?php echo URLROOT;?>/users/agents">Agents</a></li>
                                  
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="hn-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php elseif(isLoggedIn() && $_SESSION['role'] == 1):?>
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                           <a href="<?php echo URLROOT;?>"><img src="<?php echo URLROOT;?>/image/logo1.jpg" alt="" style="width: 90px; height: 65px; border-top-left-radius:10px; border-top-right-radius: 10px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="icon_mail_alt" style="color: #a31317;"></i> vostan.support@vostan.com</li>
                                <li><i class="fa fa-mobile-phone" style="color: #a31317;"></i> 125-711-811 <span>125-668-886</span></li>
                            </ul>
                            <a href="<?php echo URLROOT;?>/users/logout?>" class="hw-btn">Log Out</a>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div>
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="#">Properties</a>
                                  <ul class="dropdown">
                                    <li><a href="<?php echo URLROOT;?>/users/dashboard">All Property</a></li>
                                    <li><a href="<?php echo URLROOT;?>/properties/submit">Submit Property</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo URLROOT;?>/users/agents">Agents</a></li>
                                <li><a href="<?php echo URLROOT;?>/users/regular">users</a></li>  
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

      <?php else:?>
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                           <a href="<?php echo URLROOT;?>"><img src="<?php echo URLROOT;?>/image/logo1.jpg" alt="" style="width: 90px; height: 65px; border-top-left-radius:10px; border-top-right-radius: 10px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="icon_mail_alt" style="color: #a31317;"></i> vostan.support@vostan.com</li>
                                <li><i class="fa fa-mobile-phone" style="color: #a31317;"></i> +234805544332211 </li>
                            </ul>
                            <a href="<?php echo URLROOT;?>/properties/submit" class="hw-btn">Submit property</a>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div>
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                                <li class="active"><a href="<?php echo URLROOT;?>">Home</a></li>
                                <li><a href="<?php echo URLROOT;?>/pages/about">About</a></li>
                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo URLROOT;?>/users/dashboard">See all Property</a></li>
                                        <li><a href="<?php echo URLROOT;?>/properties/submit">Submit Property</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Agents</a>
                                    <ul class="dropdown">
                                      <li><a href="<?php echo URLROOT;?>/users/agents">See Agents</a></li>
                                      <li><a href="<?php echo URLROOT;?>/users/agentsignup">Become an Agent</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo URLROOT;?>/users/regularsignup">Sign Up</a></li>
                                <li><a href="<?php echo URLROOT;?>/users/login">Login</a></li>
                                <li><a href="#myfooter">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="hn-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endif;?>
    </header>
    <!-- Header End -->

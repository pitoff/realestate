    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
            <div style="border-left: 3px solid #a31317; padding-left: 2px;"><a href="<?php echo URLROOT;?>"><h4 style="color: #a31317;"><strong><?php echo SITENAME?></strong></h4></a></div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="om-widget">
            <ul>
                <li><i class="icon_mail_alt" style="color: #a31317;"></i> vostan.support@vostan.com</li>
                <li><i class="fa fa-mobile-phone" style="color: #a31317;"></i> +234805544332211</li>
            </ul>
            <?php if(isLoggedIn()):?>
                <a href="<?php echo URLROOT;?>/users/logout" class="hw-btn" style="background: #a31317;">Log out</a>
            <?php else:?>
                <a href="<?php echo URLROOT;?>/properties/submit" class="hw-btn" style="background: #a31317;">Submit property</a>
            <?php endif;?>
        </div>
        <div class="om-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
    </div>

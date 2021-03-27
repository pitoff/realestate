<?php require APPROOT .'/view/include/header'. '.php';?>
   <!-- Property Details Section Begin -->
    <section class="property-details-section" style="padding-top: 10px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-text">

                        <div class="pd-widget">
                            <h4>My profile</h4>
                            <div class="pd-agent">
                                <div class="agent-pic">
                                    <img src="<?php echo URLROOT;?>/image/<?php echo $data['viewagent']->agent_image;?>" alt="">
                                </div>
                                <div class="agent-text">
                                    <div class="at-title">
                                        <h6><?php echo $data['viewagent']->surname .' '.$data['viewagent']->firstname;?></h6>
                                        <span class="fa fa-envelope"> <strong><?php echo $data['viewagent']->email;?></strong></span>
                                        <a href="<?php echo URLROOT;?>/users/updateprofile/<?php echo $data['viewagent']->id;?>" class="primary-btn">Update profile</a>
                                    </div>
                                    <p><?php echo $data['viewagent']->agent_desc;?></p>
                                    <div class="at-option">
                                        <div class="at-number"><?php echo $data['viewagent']->phonenumber;?></div>
                                        <div class="at-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Property Details Section End -->



<?php require APPROOT .'/view/include/footer'. '.php';?>

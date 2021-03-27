<?php require APPROOT .'/view/include/header'. '.php';?>
   <!-- Property Details Section Begin -->
    <section class="property-details-section" style="padding-top: 10px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-text">

                        <div class="pd-widget">
                            <h4>All agents</h4>
                            <?php foreach($data['allagents'] as $allagents):?>
                            <div class="pd-agent">
                                <div class="agent-pic">
                                    <img src="<?php echo URLROOT;?>/image/<?php echo $allagents->agent_image;?>" alt="">
                                </div>
                                <div class="agent-text">
                                    <div class="at-title">
                                        <h6><?php echo $allagents->surname .' '.$allagents->firstname;?></h6>
                                        <span class="fa fa-envelope"> <strong><?php echo $allagents->email;?></strong></span>
                                    </div>
                                    <p><?php echo $allagents->agent_desc;?></p>
                                    <div class="at-option">
                                        <div class="at-number"><?php echo $allagents->phonenumber;?></div>
                                        <div class="at-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                          <?php endforeach;?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Property Details Section End -->



<?php require APPROOT .'/view/include/footer'. '.php';?>

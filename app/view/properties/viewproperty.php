<?php require APPROOT .'/view/include/header'. '.php';?>
   <!-- Property Details Section Begin -->
    <section class="property-details-section" style="padding-top: 10px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-text">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pd-title">
                                <h3 style="text-align: center;"><?php echo $data['viewproperty']->title;?></h3>
                                <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                                <div class="label">For <?php echo $data['viewproperty']->rent_sale;?></div>
                                <div class="pt-price"><i>&#8358;</i><?php echo number_format($data['viewproperty']->price, 2) ?><span></span></div>
                                <p><span class="icon_pin_alt"></span> <strong><?php echo $data['viewproperty']->address;?></strong></p>
                            </div>
                        </div>
                    </div>
                        <div class="pd-board">
                            <div class="tab-board">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Description</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tab-details">
                                            <ul class="left-table">
                                                <li>
                                                    <span class="type-name">Property Type</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->type;?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Price</span>
                                                    <span class="type-value"><i>&#8358;</i><?php echo number_format($data['viewproperty']->price, 2) ?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">For</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->rent_sale;?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Property address</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->address;?></span>
                                                </li>  
                                                <li>
                                                    <span class="type-name">Landmark</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->landmark;?></span>
                                                </li>  
                                                <li>
                                                    <span class="type-name">LGA</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->lga;?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">State</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->state;?></span>
                                                </li>       
                                            </ul>

                                            <ul class="right-table">
                                                <li>
                                                    <span class="type-name">Home Area</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->size;?> sqft</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Bedrooms</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->rooms;?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Sitting room</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->parlour;?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">kitchen</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->kitchen;?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Bath</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->bath;?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Date created</span>
                                                    <span class="type-value"><?php echo $data['viewproperty']->created_at;?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <div class="tab-desc">
                                            <p><?php echo $data['viewproperty']->description;?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php if(($_SESSION['role'] == 2) && ($_SESSION['user_id'] == $data['viewproperty']->agentId)):?>
                                <button class="btn"><a href="<?php echo URLROOT;?>/properties/updateproperty/<?php echo $data['viewproperty']->propertyId;?>" class="primary-btn">Update</a></button>
                            <?php endif;?>
                        </div>

                        <div class="pd-widget">
                            <h4>Agent</h4>
                            <div class="pd-agent">
                                <div class="agent-pic">
                                    <img src="<?php echo URLROOT;?>/image/<?php echo $data['viewproperty']->agent_image;?>" alt="">
                                </div>
                                <div class="agent-text">
                                    <div class="at-title">
                                        <h6><?php echo $data['viewproperty']->surname .' '.$data['viewproperty']->firstname;?></h6>
                                        <span class="fa fa-envelope"> <strong><?php echo $data['viewproperty']->email;?></strong></span>
                                        <a href="#" class="primary-btn">VIew profile</a>
                                    </div>
                                    <p><?php echo $data['viewproperty']->agent_desc;?></p>
                                    <div class="at-option">
                                        <div class="at-number"><?php echo $data['viewproperty']->phonenumber;?></div>
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

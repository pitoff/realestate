<?php require APPROOT .'/view/include/header'. '.php';?>
	
 <!-- Property Section Begin -->
    <section class="property-section spad" style="padding-top: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>available PROPERTies</h4>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach($data['property'] as $allproperty):?>
                <div class="col-lg-4 col-md-6">
                    <div class="property-item">
                        <a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $allproperty->propertyId;?>"><div class="pi-pic set-bg" data-setbg="<?php echo URLROOT;?>/image/<?php echo $allproperty->image?>">
                            <div class="label">For <?php echo $allproperty->rent_sale?></div>
                        </div></a>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price"><i>&#8358;</i><?php echo number_format($allproperty->price, 2) ?><span></span></div>
                            <h5><a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $allproperty->propertyId;?>"><?php echo $allproperty->title?></a></h5>
                            <p><span class="icon_pin_alt"></span> <?php echo $allproperty->address?></p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> <?php echo $allproperty->parlour?></li>
                                <li><i class="fa fa-bathtub"></i><?php echo $allproperty->bath?></li>
                                <li><i class="fa fa-bed"></i> <?php echo $allproperty->rooms?></li>
                                <li><i class="fa fa-cutlery"></i><?php echo $allproperty->kitchen?></li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="<?php echo URLROOT;?>/image/<?php echo $allproperty->agent_image?>" alt="">
                                        <h6><?php echo $allproperty->surname. ' '.$allproperty->firstname?></h6>
                                    </div>
                                    <div class="pa-text">
                                       <?php echo $allproperty->phonenumber?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
				<div class="col-lg-12">
                    <div class="loadmore-btn">
                        <a href="#">Load more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->
			
<?php require APPROOT .'/view/include/footer'. '.php';?>
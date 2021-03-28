<?php require APPROOT .'/view/include/header'. '.php';?>
	
 <!-- Property Section Begin -->
          
        <!-- Property Section Begin -->
    <section class="property-section latest-property-section spad" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Latest PROPERTY</h4> <!-- get property desc limit 6... on click of see more take user to property dashboard -->
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="property-controls">
                        <ul>
                            <li data-filter="all">All</li>
                            <li data-filter=".apartment">Apartment</li>
                            <li data-filter=".house">House</li>
                             <li data-filter=".land">Land</li>
                            <li data-filter=".office">Office</li>
                            <li data-filter=".hotel">Hotel</li>
                            <li data-filter=".restaurant">Restaurant</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row property-filter">
            <?php foreach($data['property'] as $property):?>

                <?php if($property->type == 'house'):?>
                <div class="col-lg-4 col-md-6 mix house">
                    <div class="property-item">
                        <a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><div class="pi-pic set-bg" data-setbg="<?php echo URLROOT;?>/image/<?php echo $property->image?>">
                            <div class="label">For <?php echo $property->rent_sale?></div>
                        </div></a>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price"><i>&#8358;</i><?php echo number_format($property->price, 2) ?><span></span></div>
                            <h5><a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><?php echo $property->title?></a></h5>
                            <p><span class="icon_pin_alt"></span> <?php echo $property->address?></p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> <?php echo $property->parlour?></li>
                                <li><i class="fa fa-bathtub"></i><?php echo $property->bath?></li>
                                <li><i class="fa fa-bed"></i> <?php echo $property->rooms?></li>
                                <li><i class="fa fa-cutlery"></i><?php echo $property->kitchen?></li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="<?php echo URLROOT;?>/image/<?php echo $property->agent_image?>" alt="">
                                        <h6><?php echo $property->surname. ' '.$property->firstname?></h6>
                                    </div>
                                    <div class="pa-text">
                                       <?php echo $property->phonenumber?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>

                <?php if($property->type == 'apartment'):?>
                <div class="col-lg-4 col-md-6 mix apartment">
                    <div class="property-item">
                        <a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><div class="pi-pic set-bg" data-setbg="<?php echo URLROOT;?>/image/<?php echo $property->image?>">
                            <div class="label">For <?php echo $property->rent_sale?></div>
                        </div></a>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price"><i>&#8358;</i><?php echo number_format($property->price, 2) ?><span></span></div>
                            <h5><a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><?php echo $property->title?></a></h5>
                            <p><span class="icon_pin_alt"></span> <?php echo $property->address?></p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> <?php echo $property->parlour?></li>
                                <li><i class="fa fa-bathtub"></i><?php echo $property->bath?></li>
                                <li><i class="fa fa-bed"></i> <?php echo $property->rooms?></li>
                                <li><i class="fa fa-cutlery"></i><?php echo $property->kitchen?></li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="<?php echo URLROOT;?>/image/<?php echo $property->agent_image?>" alt="">
                                        <h6><?php echo $property->surname. ' '.$property->firstname?></h6>
                                    </div>
                                    <div class="pa-text">
                                       <?php echo $property->phonenumber?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>

                <?php if($property->type == 'land'):?>
                <div class="col-lg-4 col-md-6 mix land">
                    <div class="property-item">
                        <a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><div class="pi-pic set-bg" data-setbg="<?php echo URLROOT;?>/image/<?php echo $property->image?>">
                            <div class="label">For <?php echo $property->rent_sale?></div>
                        </div></a>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price"><i>&#8358;</i><?php echo number_format($property->price, 2) ?><span></span></div>
                            <h5><a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><?php echo $property->title?></a></h5>
                            <p><span class="icon_pin_alt"></span> <?php echo $property->address?></p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> <?php echo $property->parlour?></li>
                                <li><i class="fa fa-bathtub"></i><?php echo $property->bath?></li>
                                <li><i class="fa fa-bed"></i> <?php echo $property->rooms?></li>
                                <li><i class="fa fa-cutlery"></i><?php echo $property->kitchen?></li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="<?php echo URLROOT;?>/image/<?php echo $property->agent_image?>" alt="">
                                        <h6><?php echo $property->surname. ' '.$property->firstname?></h6>
                                    </div>
                                    <div class="pa-text">
                                       <?php echo $property->phonenumber?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>

                <?php if($property->type == 'office'):?>
                <div class="col-lg-4 col-md-6 mix office">
                    <div class="property-item">
                        <a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><div class="pi-pic set-bg" data-setbg="<?php echo URLROOT;?>/image/<?php echo $property->image?>">
                            <div class="label">For <?php echo $property->rent_sale?></div>
                        </div></a>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price"><i>&#8358;</i><?php echo number_format($property->price, 2) ?><span></span></div>
                            <h5><a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><?php echo $property->title?></a></h5>
                            <p><span class="icon_pin_alt"></span> <?php echo $property->address?></p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> <?php echo $property->parlour?></li>
                                <li><i class="fa fa-bathtub"></i><?php echo $property->bath?></li>
                                <li><i class="fa fa-bed"></i> <?php echo $property->rooms?></li>
                                <li><i class="fa fa-cutlery"></i><?php echo $property->kitchen?></li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="<?php echo URLROOT;?>/image/<?php echo $property->agent_image?>" alt="">
                                        <h6><?php echo $property->surname. ' '.$property->firstname?></h6>
                                    </div>
                                    <div class="pa-text">
                                       <?php echo $property->phonenumber?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>

                <?php if($property->type == 'hotel'):?>
                <div class="col-lg-4 col-md-6 mix hotel">
                    <div class="property-item">
                        <a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><div class="pi-pic set-bg" data-setbg="<?php echo URLROOT;?>/image/<?php echo $property->image?>">
                            <div class="label">For <?php echo $property->rent_sale?></div>
                        </div></a>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price"><i>&#8358;</i><?php echo number_format($property->price, 2) ?><span></span></div>
                            <h5><a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><?php echo $property->title?></a></h5>
                            <p><span class="icon_pin_alt"></span> <?php echo $property->address?></p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> <?php echo $property->parlour?></li>
                                <li><i class="fa fa-bathtub"></i><?php echo $property->bath?></li>
                                <li><i class="fa fa-bed"></i> <?php echo $property->rooms?></li>
                                <li><i class="fa fa-cutlery"></i><?php echo $property->kitchen?></li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="<?php echo URLROOT;?>/image/<?php echo $property->agent_image?>" alt="">
                                        <h6><?php echo $property->surname. ' '.$property->firstname?></h6>
                                    </div>
                                    <div class="pa-text">
                                       <?php echo $property->phonenumber?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>

                <?php if($property->type == 'restaurant'):?>
                <div class="col-lg-4 col-md-6 mix restaurant">
                    <div class="property-item">
                        <a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><div class="pi-pic set-bg" data-setbg="<?php echo URLROOT;?>/image/<?php echo $property->image?>">
                            <div class="label">For <?php echo $property->rent_sale?></div>
                        </div></a>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price"><i>&#8358;</i><?php echo number_format($property->price, 2) ?><span></span></div>
                            <h5><a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $property->propertyId;?>"><?php echo $property->title?></a></h5>
                            <p><span class="icon_pin_alt"></span> <?php echo $property->address?></p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> <?php echo $property->parlour?></li>
                                <li><i class="fa fa-bathtub"></i><?php echo $property->bath?></li>
                                <li><i class="fa fa-bed"></i> <?php echo $property->rooms?></li>
                                <li><i class="fa fa-cutlery"></i><?php echo $property->kitchen?></li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="<?php echo URLROOT;?>/image/<?php echo $property->agent_image?>" alt="">
                                        <h6><?php echo $property->surname. ' '.$property->firstname?></h6>
                                    </div>
                                    <div class="pa-text">
                                       <?php echo $property->phonenumber?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>            

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

<style type="text/css">
.blinking{
    animation:blinkingText 2s infinite;

}
@keyframes blinkingText{
    0%{     color: #a31317;    }
    49%{    color: #a31317; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #a31317;    }
}
</style>
<?php require APPROOT .'/view/include/header'. '.php';?>
        <!-- Property Section Begin -->
    <section class="property-section latest-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>PROPERTY you searched</h4>
                    </div>
                </div>
            </div>
            <div class="row property-filter">
            <?php if(isset($data['get'])):?>
            <?php foreach($data['get'] as $get):?>

                <div class="col-lg-4 col-md-6 mix ">
                    <div class="property-item">
                        <a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $get->propertyId;?>"><div class="pi-pic set-bg" data-setbg="<?php echo URLROOT;?>/image/<?php echo $get->image?>">
                            <div class="label">For <?php echo $get->rent_sale?></div>
                        </div></a>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price"><i>&#8358;</i><?php echo number_format($get->price, 2) ?><span></span></div>
                            <h5><a href="<?php echo URLROOT;?>/properties/viewproperty/<?php echo $get->propertyId;?>"><?php echo $get->title?></a></h5>
                            <p><span class="icon_pin_alt"></span> <?php echo $get->address?></p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> <?php echo $get->parlour?></li>
                                <li><i class="fa fa-bathtub"></i><?php echo $get->bath?></li>
                                <li><i class="fa fa-bed"></i> <?php echo $get->rooms?></li>
                                <li><i class="fa fa-cutlery"></i><?php echo $get->kitchen?></li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="<?php echo URLROOT;?>/image/<?php echo $get->agent_image?>" alt="">
                                        <h6><?php echo $get->surname. ' '.$get->firstname?></h6>
                                    </div>
                                    <div class="pa-text">
                                       <?php echo $get->phonenumber?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       

            <?php endforeach;?>
        	<?php else:?>
        		<div class="col-lg-12" style="text-transform: uppercase; text-align: center;"><strong><span class="blinking">Oops! no <?php echo $data['property_type'];?> property was found in <?php echo $data['lga'];?></span></strong></div>
        	<?php endif;?>

            </div>
        </div>
    </section>
    <!-- Property Section End -->
<?php require APPROOT .'/view/include/footer'. '.php';?>

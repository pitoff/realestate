<?php require APPROOT .'/view/include/header.php';?>

 <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="hs-slider owl-carousel">
             <?php foreach($data['carouselProperty'] as $carouselProperty):?>
                <div class="hs-item set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/hero/hero-1.jpg">
                    <div class="row">
                   
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <div class="hc-text">
                                    <h4><?php echo $carouselProperty->title;?></h4>
                                    <p><span class="icon_pin_alt"></span><?php echo $carouselProperty->address;?></p>
                                    <div class="label">For <?php echo $carouselProperty->rent_sale;?></div>
                                    <h5><i>&#8358;</i><?php echo $carouselProperty->price;?></h5>
                                </div>
                                <div class="hc-widget">
                                    <ul>
                                        <li><i class="fa fa-object-group"></i> <?php echo $carouselProperty->parlour;?></li>
                                        <li><i class="fa fa-bathtub"></i> <?php echo $carouselProperty->bath;?></li>
                                        <li><i class="fa fa-bed"></i> <?php echo $carouselProperty->rooms;?></li>
                                        <li><i class="fa fa-chef"></i> <?php echo $carouselProperty->kitchen;?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <?php endforeach;?>
           
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

 <!-- Search Section Begin -->
    <section class="search-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h4>Find a property</h4>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="change-btn">
                        <div class="cb-item">
                            <label for="cb-rent" class="active">
                                For Rent
                                <input type="radio" id="cb-rent">
                            </label>
                        </div>
                        <div class="cb-item">
                            <label for="cb-sale">
                                For Sale
                                <input type="radio" id="cb-sale">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-form-content">
                <form action="#" class="filter-form">
                <select class="sm-width" name="property_type">
                        <option value="">Property Type</option>
                        <option value="apartment">Apartment</option>
                        <option value="house">House</option>
                        <option value="land">Land</option>
                        <option value="office">Office</option>
                        <option value="restaurant">Restaurant</option>
                        <option value="hotel">Hotel</option>
                    </select>
                    <select class="sm-width">
                        <option value="">Chose The City</option>
                    </select>
                    <select class="sm-width">
                        <option value="">Location</option>
                    </select>
                    
                    <div style="margin-top: 5px;">
                        <div class="room-size-range-wrap sm-width">
                            <div class="price-text">
                                <label for="roomsizeRange">Size:</label>
                                <input type="text" id="roomsizeRange" readonly>
                            </div>
                            <div id="roomsize-range" class="slider"></div>
                        </div>
                        <div class="price-range-wrap sm-width">
                            <div class="price-text">
                                <label for="priceRange">Price:</label>
                                <input type="text" id="priceRange" readonly>
                            </div>
                            <div id="price-range" class="slider"></div>
                        </div>
                        <button type="button" class="search-btn sm-width" style="margin-top: 5px;">Search</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- Search Section End -->

        <!-- Property Section Begin -->
    <section class="property-section latest-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Latest PROPERTY</h4> <!-- get property desc limit 6... on click of see more take user to property dashboard -->
                    </div>
                </div>
            </div>
            <div class="row property-filter">
            <?php foreach($data['property'] as $property):?>

                <div class="col-lg-4 col-md-6 mix ">
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

            <?php endforeach;?>


            </div>
        </div>
    </section>
    <!-- Property Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus-section spad set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/chooseus/chooseus-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="chooseus-text">
                        <div class="section-title">
                            <h4>Why choose us</h4>
                        </div>
                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="chooseus-features">
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="<?php echo URLROOT;?>/realestate/img/chooseus/chooseus-icon-1.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Find your future home</h5>
                                <p>We help you find a new home by offering a smart real estate.</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="<?php echo URLROOT;?>/realestate/img/chooseus/chooseus-icon-2.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Buy or rent homes</h5>
                                <p>Millions of houses and apartments in your favourite cities</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="<?php echo URLROOT;?>/realestate/img/chooseus/chooseus-icon-3.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Experienced agents</h5>
                                <p>Find an agent who knows your market best</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="<?php echo URLROOT;?>/realestate/img/chooseus/chooseus-icon-4.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>List your own property</h5>
                                <p>Sign up now and sell or rent your own properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

 <!-- Feature Property Section Begin -->
    <section class="feature-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="feature-property-left">
                        <div class="section-title">
                            <h4>PROPERTy types</h4>
                        </div>
                        <ul>
                            <li>Apartment</li>
                            <li>House</li>
                            <li>Land</li>
                            <li>Office</li>
                            <li>Hotel</li>
                            <li>Restaurant</li>
                        </ul>
                        <a href="<?php echo URLROOT;?>/users/dashboard">View all property</a>
                    </div>
                </div>
                <div class="col-lg-8 p-0">
                    <div class="fp-slider owl-carousel">
                        <div class="fp-item set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/feature-property/fp-1.jpg">
                            <div class="fp-text">
                                <h5 class="title">Home in Merrick Way</h5>
                                <p><span class="icon_pin_alt"></span> 3 Middle Winchendon Rd, Rindge, NH 03461</p>
                                <div class="label">For Rent</div>
                                <h5>$ 289.0<span>/month</span></h5>
                                <ul>
                                    <li><i class="fa fa-object-group"></i> 2, 283</li>
                                    <li><i class="fa fa-bathtub"></i> 03</li>
                                    <li><i class="fa fa-bed"></i> 05</li>
                                    <li><i class="fa fa-automobile"></i> 01</li>
                                </ul>
                            </div>
                        </div>
                        <div class="fp-item set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/feature-property/fp-2.jpg">
                            <div class="fp-text">
                                <h5 class="title">Home in Merrick Way</h5>
                                <p><span class="icon_pin_alt"></span> 3 Middle Winchendon Rd, Rindge, NH 03461</p>
                                <div class="label">For Rent</div>
                                <h5>$ 289.0<span>/month</span></h5>
                                <ul>
                                    <li><i class="fa fa-object-group"></i> 2, 283</li>
                                    <li><i class="fa fa-bathtub"></i> 03</li>
                                    <li><i class="fa fa-bed"></i> 05</li>
                                    <li><i class="fa fa-automobile"></i> 01</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Property Section End -->

        <!-- Categories Section Begin -->
    <section class="categories-section">
        <div class="cs-item-list">
            <div class="cs-item set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/categories/cat-1.jpg">
                <div class="cs-text">
                    <h5>Apartment</h5>
                    <span><?php echo $data['papartment'];?></span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/categories/cat-2.jpg">
                <div class="cs-text">
                    <h5>Land</h5>
                    <span><?php echo $data['pland'];?></span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/categories/cat-3.jpg">
                <div class="cs-text">
                    <h5>House</h5>
                    <span><?php echo $data['phouse'];?></span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/categories/cat-4.jpg">
                <div class="cs-text">
                    <h5>Restaurant</h5>
                    <span><?php echo $data['prestaurant'];?></span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/categories/cat-5.jpg">
                <div class="cs-text">
                    <h5>Office</h5>
                    <span><?php echo $data['poffice'];?></span>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section" style="margin-top: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Address</h5>
                                <p>No 22 Okpara marginal avenue, mulumba state</p>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>+234805544332211</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Support</h5>
                                <p>vostan.support@vostan.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d735515.5813275519!2d-80.41163541934742!3d43.93644386501528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882a55bbf3de23d7%3A0x3ada5af229b47375!2sMono%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sbd!4v1583262687289!5m2!1sen!2sbd"
                height="450" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- Contact Section End -->
<?php require APPROOT .'/view/include/footer.php';?>

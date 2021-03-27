<?php require APPROOT .'/view/include/header.php';?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Update property</h4>
                        <div class="bt-option">
                            <a href="<?php echo URLROOT;?>/users/dashboard"><i class="fa fa-home"></i> Home</a>
                            <span>Property</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Property Submit Section Begin -->
    <section class="property-submit-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-submit-form">
                        <form method="POST" action="<?php echo URLROOT;?>/properties/updateproperty/<?php echo $data['id'];?>" enctype = "multipart/form-data">
                            <div class="pf-title">
                                <h4>Title</h4>
                                <input type="text" name ="title" value="<?php echo $data['title'];?>" placeholder="Property title">
                            </div>                        
                            <div class="pf-type">
                                <h4>Property type</h4>
                                <div class="type-item">
                                    <label for="pt-apart">Apartment
                                        <input type="radio" name="radio" value ="apartment" id="pt-apart">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-house">House
                                        <input type="radio" name="radio" value="house" id="pt-house">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-land">Land
                                        <input type="radio" name="radio" value="land" id="pt-land">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-off">Office
                                        <input type="radio" name="radio" value="office" id="pt-off">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-villa">Villa
                                        <input type="radio" name="radio" value="villa" id="pt-villa">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-store">Store
                                        <input type="radio" name="radio" value="store" id="pt-store">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-rest">Resturant
                                        <input type="radio" name="radio" value ="restaurant" id="pt-rest">
                                        <span class="checkbox"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="pf-status">
                                <h4>Property status</h4>
                                <div class="status-item">
                                    <label for="ps-rent">For rent
                                        <input type="radio" name="r_s" value ="rent" id="ps-rent">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="ps-sale">For sale
                                        <input type="radio" name="r_s" value="sale" id="ps-sale">
                                        <span class="checkbox"></span>
                                    </label>
                                </div>
                            </div>                            
                            <div class="pf-summernote">
                                <h4>Description</h4>
                               
                                <textarea class="text-editor" name="desc" value = "" required style="width: 100%;"></textarea>
                            </div>
                            <div class="pf-location">
                                <h4>Property Location</h4>
                                <div class="location-inputs">
                                    <input type="text" name="addr" value="<?php echo $data['addr'];?>" required placeholder="Address">
                                    <input type="text" name="landmark" value="<?php echo $data['landmark'];?>" required placeholder="Nearest landmark">
                                    <input type="text" name="city" value="<?php echo $data['city'];?>" required placeholder="City">
                                    <input type="text" name="lga" value="<?php echo $data['lga'];?>" required placeholder="Local govt area">
                                    <input type="text" name="state" value="<?php echo $data['state'];?>" required placeholder="State">
                                </div>
                            </div>
                            <div class="pf-feature-price">
                                <h4>Featured Price</h4>
                                <div class="fp-inputs">
                                    <input type="text" name="price" value="<?php echo $data['price'];?>" required placeholder="Price">
                                  <!--   <input type="text" placeholder="Second Price ( Optional )">
                                    <input type="text" placeholder="After Price Label (ex: monthly)"> -->
                                </div>
                            </div>
                            <div class="pf-feature-image">
                                <h4>Featured Image</h4>
                                <input type="file" name="property_img" value="" required>
                                <!-- <div class="feature-image-content"></div> -->
                            </div>
                            <div class="pf-property-details">
                                <h4>Property details</h4>
                                <div class="property-details-inputs">
                                    <input type="text" name="area_size" value="<?php echo $data['area_size'];?>" placeholder="Area Size ( Only digits )">
                                    <input type="number" required name="parlour" value="<?php echo $data['parlour'];?>" min="0" placeholder="Sitting room">
                                    <input type="number" required name="bedroom" value="<?php echo $data['bedroom'];?>" min="0" placeholder="Bedrooms">
                                    <input type="number" required name="bath" value="<?php echo $data['bath'];?>" min="0" placeholder="Bathrooms">
                                    <input type="number" required name="kitchen" value="<?php echo $data['kitchen'];?>" min="0" placeholder="Kitchen">
                                </div>
                                <button type="submit" class="site-btn">Update Property</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Submit Section End -->

<?php require APPROOT .'/view/include/footer.php';?>
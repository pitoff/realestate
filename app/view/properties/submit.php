<?php require APPROOT .'/view/include/header.php';?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="<?php echo URLROOT;?>/realestate/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Submit property</h4>
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
                        <form method="POST" action="<?php echo URLROOT;?>/properties/submit" enctype = "multipart/form-data">
                            <div class="pf-title">
                                <h4>Title</h4>
                                <input type="text" name ="title" placeholder="Property title">
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
                                <!--     <label for="pt-villa">Villa
                                        <input type="radio" name="radio" value="villa" id="pt-villa">
                                        <span class="checkbox"></span>
                                    </label> -->
                                    <label for="pt-store">Hotel
                                        <input type="radio" name="radio" value="hotel" id="pt-store">
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
                               
                                <textarea class="text-editor" name="desc" required style="width: 100%;"></textarea>
                            </div>
                            <div class="pf-location">
                                <h4>Property Location</h4>
                                <div class="location-inputs">
                                    <input type="text" name="addr" required placeholder="Address">
                                    <input type="text" name="landmark" required placeholder="Nearest landmark">
                                    <input type="text" name="city" required placeholder="City">
                                    <input type="text" name="lga" required placeholder="Local govt area">
                                    <input type="text" name="state" required placeholder="State">
                                </div>
                            </div>
                            <div class="pf-feature-price">
                                <h4>Featured Price</h4>
                                <div class="fp-inputs">
                                    <input type="text" name="price" required placeholder="Price">
                                  <!--   <input type="text" placeholder="Second Price ( Optional )">
                                    <input type="text" placeholder="After Price Label (ex: monthly)"> -->
                                </div>
                            </div>

                            <div class="pf-feature-image">
                                <h4>Featured Image</h4>
                                <input type="file" name="property_img" required>
                                <!-- <div class="feature-image-content"></div> -->
                            </div>
                            <div class="pf-property-details">
                                <h4>Property details</h4>
                                <div class="property-details-inputs">
                                    <input type="text" name="area_size" placeholder="Area Size ( Only digits )">
                                    <input type="number" required name="parlour" min="0" placeholder="Sitting room">
                                    <input type="number" required name="bedroom" min="0" placeholder="Bedrooms">
                                    <input type="number" required name="bath" min="0" placeholder="Bathrooms">
                                    <input type="number" required name="kitchen" min="0" placeholder="Kitchen">
                                </div>
                                <button type="submit" class="site-btn">Submit Property</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Submit Section End -->

<?php require APPROOT .'/view/include/footer.php';?>

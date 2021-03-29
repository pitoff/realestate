<?php require APPROOT .'/view/include/header'. '.php';?>
   <!-- Property Details Section Begin -->
    <section class="property-details-section" style="padding-top: 10px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-text">

                        <div class="pd-widget">
                            <h4>All Users</h4>
                          <div class="table-responsive">
                          
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Surname</th>
                                  <th>Firstname</th>
                                  <th>Email</th>
                                  <th>contact</th>
                                  <th>Created_at</th>
                                </tr>
                              </thead>
                              <?php foreach($data['regularusers'] as $user):?>
                              <tbody>
                                <tr>
                                  <td><?php echo $user->surname;?></td>
                                  <td><?php echo $user->firstname;?></td>
                                  <td><?php echo $user->email;?></td>
                                  <td><?php echo $user->phonenumber;?></td>
                                  <td><?php echo $user->created_at;?></td>
                                </tr>
                              </tbody>
                              <?php endforeach;?>
                            </table>
                           
                          </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Property Details Section End -->



<?php require APPROOT .'/view/include/footer'. '.php';?>

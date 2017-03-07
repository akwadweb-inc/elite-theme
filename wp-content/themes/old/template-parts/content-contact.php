<!-- [CONTACT]
 ============================================================================================================================-->
 <section class="contact-remsh white-background black" id="contact">
 <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="sectionTitle text-center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                                   
                    </div>

                   <form id="eliteContactForm" method="post" action="#" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" required="required" >
                                    <small class="text-danger form-control-msg">Your Name is required</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required="required">
                                    <small class="text-danger form-control-msg">Your Email is required</small>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" id="message" rows="3" required="required"></textarea>
                            <small class="text-danger form-control-msg">Your Message is required</small>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary black-background" id="contactbtn">Submit</button>
                    <small class="text-info form-control-msg js-form-submission">Submission in process, please wait...</small>
                    <small class="text-success form-control-msg js-form-success">Message Successflly submitted ,thank you</small>
                    <small class="text-danger form-control-msg js-form-error">There was a problem submitting your message please try again.</small>
                    </form>

                </div>
            </div>

        </div>
 </section>
 
 <!-- [/CONTACT]
 ============================================================================================================================-->
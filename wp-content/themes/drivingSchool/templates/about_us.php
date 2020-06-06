<?php
/*
Template Name: About Us
*/
get_header(  );
if(have_posts(  )):
    while(have_posts(  )):
        the_post(  );
        $about_us_options = get_post_meta( get_the_ID(), 'about_us_options', true );
        $about_us_image = $about_us_options['about_us_image']['url'];
?>
 <!--Why Us Section-->
 <section class="why-us-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <!--Sec Title-->
                    <div class="sec-title">
                        <div class="title">Who We Are</div>
                        <h2><?php the_title( ) ?></h2>
                        <div class="separator"></div>
                        <div class="text">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="image wow slideInRight pt-55" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <img src="<?php echo $about_us_image; ?>" alt="" /><br><br>
                </div>
            </div>
        </div>
    </div>
    <!--Services Section-->
    <?php do_shortcode( '[services_bulk]' ); ?>
    <!--End Services Section-->
</section>
<!--End Why Us Section-->

<!--FullWisth Section Three-->
<section class="fullwidth-section-three">
    <div class="outer-box clearfix">
        <!--Image Column-->
        <div class="image-column" style="background-image:url(images/resource/fullwith-3.jpg);">
            <div class="image-box">
                <img src="images/resource/fullwith-3.jpg" alt="" />
            </div>
        </div>
        <!--Services Column-->
        <div class="services-column">
            <div class="inner">
                <div class="testimonial-carousel owl-carousel owl-theme">
                
                    <!--Testimonial Slide-->
                    <div class="testimonial-slide">

                        <!--Testimonial Block Two-->
                        <div class="testimonial-block-two">
                            <div class="testimonial-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-people-1"></span>
                                </div>
                                <h3><a href="#">Instructor Training</a></h3>
                                <div class="text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odiomsan ipsum velit.</div>
                            </div>
                        </div>

                        <!--Testimonial Block Two-->
                        <div class="testimonial-block-two">
                            <div class="testimonial-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-gearbox"></span>
                                </div>
                                <h3><a href="#">Highway Safety</a></h3>
                                <div class="text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odiomsan ipsum velit.</div>
                            </div>
                        </div>

                        <!--Testimonial Block Two-->
                        <div class="testimonial-block-two">
                            <div class="testimonial-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-traffic-light-1"></span>
                                </div>
                                <h3><a href="#">Traffic Rules </a></h3>
                                <div class="text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odiomsan ipsum velit.</div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
        <!--Form Column-->
        <div class="form-column">
            <div class="form-inner">
                <h3>Application Form</h3>
                
                <!--Default Form-->
                <div class="default-form">
                    <form method="post">
                        <div class="row clearfix">
                        
                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label class="icon-label" for="field-one"><span class="fa fa-user"></span></label>
                                    <input id="field-one" type="text" name="username" value="" placeholder="Your Name" required>
                                </div>
                            </div>
                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label class="icon-label" for="field-two"><span class="fa fa-envelope-o"></span></label>
                                    <input id="field-two" type="email" name="email" value="" placeholder="Email" required>
                                </div>
                            </div>
                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label class="icon-label" for="field-three"><span class="fa fa-phone"></span></label>
                                    <input id="field-three" type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label class="icon-label" for="field-four"><span class="fa fa-calendar"></span></label>
                                    <input id="field-four" type="text" name="date-time" class="datetimepicker" value="" placeholder="Date and Time" required>
                                </div>
                            </div>
                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="group-inner">
                                    <label class="icon-label" for="field-five"><span class="fa fa-file-text-o"></span></label>
                                    <select id="field-five" class="custom-select-box">
                                        <option>Course Type</option>
                                        <option>Type 1</option>
                                        <option>Type 2</option>
                                        <option>Type 3</option>
                                    </select>
                                </div>
                            </div>
                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="group-inner">
                                    <label class="icon-label" for="field-six"><span class="fa fa-car"></span></label>
                                    <select id="field-six" class="custom-select-box">
                                        <option>Car Type</option>
                                        <option>Honda</option>
                                        <option>City</option>
                                        <option>Rebon</option>
                                    </select>
                                </div>
                            </div>
                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">SEND INQUIRY</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
                <!--End Inquiry Form-->
                
            </div>
        </div>
    </div>
</section>
<!--End FullWisth Section Three-->
<?php
endwhile;
endif;
get_footer();
<?php
/*
Template Name: Homepage
*/
get_header()
?>
<!--Main Slider-->
<section class="main-slider" data-start-height="550" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <?php
                    $args = array(
                        'post-type'=>'banners',
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts(  )):
                        while($query->have_posts(  )):
                            $query->the_post(  );
                            $banner_options = get_post_meta( get_the_ID(), 'banner_options', true );
                            echo '<pre>';
                            // print_r($banner_options);
                            var_dump($banner_options);
                            echo '</pre>';
                            ?>
                            <!-- <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                                <img src="images/main-slider/image-3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                            
                                <div class="tp-caption sfl sfb tp-resizeme"
                                data-x="left" data-hoffset="15"
                                data-y="center" data-voffset="-80"
                                data-speed="1500"
                                data-start="0"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"><h4>welcome to our driving school</h4></div>
                                
                                <div class="tp-caption sfl sfb tp-resizeme"
                                data-x="left" data-hoffset="15"
                                data-y="center" data-voffset="-10"
                                data-speed="1500"
                                data-start="500"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"><h2>WE ARE FOCUSED ON YOUR <br> SUCCESS</h2></div>
                                
                                <div class="tp-caption sfl sfb tp-resizeme"
                                data-x="left" data-hoffset="15"
                                data-y="center" data-voffset="70"
                                data-speed="1500"
                                data-start="1000"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"><div class="normal-text">Lorem ipsum dolLorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Sed ultrices ipsum nonltrices ipsum non</div></div>
                                
                                <div class="tp-caption sfl sfb tp-resizeme"
                                data-x="left" data-hoffset="15"
                                data-y="center" data-voffset="140"
                                data-speed="1500"
                                data-start="1500"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"><a href="services.html" class="theme-btn btn-style-one">Read More</a> &nbsp; &nbsp; <a href="#" class="theme-btn btn-style-two">see Pricing</a></div>
                                
                            </li> -->
                            <?php
                        endwhile;
                        wp_reset_postdata(  );
                    endif;
                    ?>
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
        
    </section>
      <!--End Main Slider-->
      <?php
      get_footer();
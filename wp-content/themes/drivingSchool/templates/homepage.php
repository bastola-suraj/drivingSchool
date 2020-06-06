<?php
/*
Template Name: Homepage
*/
get_header();
?>
<!--Main Slider-->
<section class="main-slider" data-start-height="550" data-slide-overlay="yes">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <?php
                $args = array(
                    'post_type'=>'banners',
                );
                $query = new WP_Query($args);
                if($query->have_posts(  )):
                    while($query->have_posts(  )):
                        $query->the_post(  );
                        $banner_options = get_post_meta( get_the_ID(), 'banner_options', true );
                    
                        $banner_image = $banner_options['banner_image']['url'];
                        $banner_message = $banner_options['banner_message'];
                        $banner_message_extended = $banner_options['banner_message_extended'];
                        $banner_readmore_switcher = $banner_options['banner_readmore_switcher'];
                        $banner_readmore_button_text = $banner_options['banner_readmore_button_text'];
                        $banner_readmore_button_url = $banner_options['banner_readmore_button_url'];
                        // $banner_see_pricing_switcher = $banner_options['banner_see_pricing_switcher'];
                        $banner_see_pricing_button_url = $banner_options['banner_see_pricing_button_url'];
                        $banner_see_pricing_button_text = $banner_options['banner_see_pricing_button_text'];
                        ?>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo $banner_image ?>"  data-saveperformance="off"  data-title="Awesome Title Here">
                            <img src="<?php echo $banner_image ?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
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
                                data-endeasing="Power4.easeIn"><h4><?php the_title(  ) ?></h4>
                            </div>
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
                                data-endeasing="Power4.easeIn"><h2><?php echo $banner_message ?></h2>
                            </div>
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
                                data-endeasing="Power4.easeIn">
                                <div class="normal-text">
                                    <?php echo $banner_message_extended ?>
                                </div>
                            </div>
                            <?php
                            if(1 == $banner_readmore_switcher):
                                ?>
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
                                data-endeasing="Power4.easeIn">
                                <a href="<?php echo $banner_readmore_button_url ?>" class="theme-btn btn-style-one"><?php echo $banner_readmore_button_text ?></a> &nbsp; &nbsp; <a href="<?php echo $banner_see_pricing_button_url ?>" class="theme-btn btn-style-two"><?php echo $banner_see_pricing_button_text ?></a>
                            </div>
                                <?php
                                else:

                            endif;
                            ?>
                        </li>
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
<?php do_shortcode( '[services_bulk]' ); ?>


<?php
get_footer();
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
					$args  = array(
						'post_type' => 'banners',
					);
					$query = new WP_Query( $args );
					if ( $query->have_posts() ):
						while ( $query->have_posts() ):
							$query->the_post();
							$banner_options = get_post_meta( get_the_ID(), 'banner_options', true );

							$banner_image                = $banner_options['banner_image']['url'];
							$banner_message              = $banner_options['banner_message'];
							$banner_message_extended     = $banner_options['banner_message_extended'];
							$banner_readmore_switcher    = $banner_options['banner_readmore_switcher'];
							$banner_readmore_button_text = $banner_options['banner_readmore_button_text'];
							$banner_readmore_button_url  = $banner_options['banner_readmore_button_url'];
							// $banner_see_pricing_switcher = $banner_options['banner_see_pricing_switcher'];
							$banner_see_pricing_button_url  = $banner_options['banner_see_pricing_button_url'];
							$banner_see_pricing_button_text = $banner_options['banner_see_pricing_button_text'];
							$attachment                     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true );
							?>
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                                data-thumb="<?php echo $attachment[0]; ?>" data-saveperformance="off"
                                data-title="Awesome Title Here">
                                <img src="<?php echo $attachment[0]; ?>" alt="" data-bgposition="center top"
                                     data-bgfit="cover" data-bgrepeat="no-repeat">

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
                                     data-endeasing="Power4.easeIn"><h4><?php the_title() ?></h4>
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
								if ( 1 == $banner_readmore_switcher ):
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
                                        <a href="<?php echo $banner_readmore_button_url ?>"
                                           class="theme-btn btn-style-one"><?php echo $banner_readmore_button_text ?></a>
                                        &nbsp; &nbsp; <a href="<?php echo $banner_see_pricing_button_url ?>"
                                                         class="theme-btn btn-style-two"><?php echo $banner_see_pricing_button_text ?></a>
                                    </div>
								<?php
								else:

								endif;
								?>
                            </li>
						<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
                </ul>

                <div class="tp-bannertimer"></div>
            </div>
        </div>

    </section>
    <!--End Main Slider-->
<?php do_shortcode( '[services_bulk]' ); ?>

    <!--About Section-->
    <!--Course Section-->
    <section class="course-section grey-bg pt-10">
		<?php $query = new WP_Query( "page_id=66" );
		if ( $query->have_posts() ):while ( $query->have_posts() ): $query->the_post() ?>

            <div class="auto-container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="content-column col-md-8 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<?php $attachment = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true ); ?>
                                <img src="<?php echo $attachment[0] ?>" alt=""/>
                            </figure>
                            <!--Content-->
                            <div class="content">
                                <div class="sec-title">
                                    <div class="title"><?php the_title(); ?></div>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="separator"></div>
                                    <div class="text">
										<?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <a href="<?php the_permalink(); ?>">
                                        <button type="submit" class="theme-btn btn-style-one">More</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="timing-column col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px;">
                        <div class="column-inner">
                            <div class="title school-time">
                                <h3>School Opening Hours</h3>
                                <p>Monday To Sunday </p>
                                <p>&</p>
                                <p>Every friday is Holiday</p>
                            </div>
                            <ul>
                                <li class="clearfix">A:<span>8:00 Am - 10:00 Am</span></li>
                                <li class="clearfix">B :<span>10:00 Am - 12:00Pm</span></li>
                                <li class="clearfix">C :<span>12:00Pm - 14:00 Pm</span></li>
                                <li class="clearfix">D :<span>14:00 Pm - 16:00 Pm</span></li>
                                <li class="clearfix">E :<span>16:00 Pm - 18:00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		<?php endwhile;
			wp_reset_postdata(); endif; ?>

    </section>

    <!--End Course Section-->
    <!--End About Section-->

    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title">Our Great Team</div>
                <h2>Our Instructors</h2>
                <div class="separator"></div>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme">
				<?php
				$args  = array(
					'post_type' => 'instructors',
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ):
					while ( $query->have_posts() ):
						$query->the_post();
						$instructor_options = get_post_meta( get_the_ID(), 'instructor_options', true );
//						echo '<pre>';
//						print_r( $instructor_options );
//						echo '</pre>';
						$instructor_position    = $instructor_options['instructor_position'];
						$instructor_social      = $instructor_options['instructor_social'];
						$instructor_facebook    = $instructor_options['instructor_facebook'];
						$instructor_twitter     = $instructor_options['instructor_twitter'];
						$instructor_linked_in   = $instructor_options['instructor_linked_in'];
						$instructor_dribble     = $instructor_options['instructor_dribble'];
						$instructor_google_plus = $instructor_options['instructor_google_plus'];
						$attachment             = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true );

						?>
                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <! -- Image Column -- >
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="image">
                                            <img src="<?php echo $attachment[0]; ?>" alt=""/>
                                        </div>
                                    </div>
                                    <! -- Content Column -- >
                                    <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-content">
                                            <h3><a href="<?php the_permalink(); ?>"> <?php the_title() ?> </a></h3>
                                            <div class="designation"> <?php echo $instructor_position; ?></div>
                                            <div class="separator"></div>
                                            <div class="text"> <?php the_content() ?></div>
											<?php if ( 1 == $instructor_social ): ?>
                                                <ul class="social-links-one">
													<?php if ( !empty( $instructor_facebook ) ): ?>
                                                        <li><a href="<?php echo $instructor_facebook; ?>"><span class="fa fa-facebook"></span></a></li>
													<?php endif; ?>
	                                                <?php if ( !empty( $instructor_twitter ) ): ?>
                                                        <li><a href="<?php echo $instructor_twitter?>"><span class="fa fa-twitter"></span></a></li>
	                                                <?php endif; ?>
	                                                <?php if ( !empty( $instructor_linked_in ) ): ?>
                                                        <li><a href="<?php echo $instructor_linked_in; ?>"><span class="fa fa-linkedin"></span></a></li>
	                                                <?php endif; ?>
	                                                <?php if ( !empty( $instructor_google_plus ) ): ?>
                                                        <li><a href="<?php echo $instructor_google_plus; ?>"><span class="fa fa-google-plus"></span></a></li>
	                                                <?php endif; ?>
                                                </ul>
											<?php else: ?>
											<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member -->
					<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>

            </div>
        </div>
    </section>
    <! -- End Team Section -- >

<?php
get_footer();
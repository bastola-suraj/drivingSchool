<?php
add_shortcode('services_shortcode','services_shortcode');
function services_shortcode($atts){
    extract(shortcode_atts(array(
      'flaticon' => '',
      'text'=>'',
   ), $atts));
?>
<div class="services-block column col-md-3 col-sm-6 col-xs-12">
                <div class="inner">
                    <h3><span class="icon <?php echo $flaticon ?>"></span> <?php echo $text ?></h3>
                </div>
            </div>
<?php
}
add_shortcode( 'services_bulk', 'services_bulk' );
function services_bulk(){
    ?>
    <section class="services-section">
    <div class="auto-container">
        <div class="clearfix">
            <!--Services Block-->
    <?php
           do_shortcode( '[services_shortcode flaticon="flaticon-steering-wheel-1" text="Comfort Vehicles"]');
           do_shortcode( '[services_shortcode flaticon="flaticon-credit-card-1" text="Licensed Training"]');
           do_shortcode( '[services_shortcode flaticon="flaticon-gearbox" text="Driving Practice"]');
           do_shortcode( '[services_shortcode flaticon="flaticon-vehicle-speedometer" text="Flexible Schedule"]');
           ?>
            <!--Services Block-->
            
            </div>
    </div>
</section>
           <?php
}
<?php 

/**
* Template Name: Contact Us
*
*/

get_header();
?>

<!-- ========================= 
            Google Map
    =========================  -->
<?php 
$map = get_field('map');

if (!empty($map)) { ?>
    <section class="py-0">
      <?php echo $map; ?>
    </section>
<?php } ?>   

    <!-- ==========================
        contact layout 1
    =========================== -->

<?php 
$contacts = get_field('contacts');
$form_details = $contacts['form_details'];
    $form_heading = $form_details['form_heading'];
    $sub_heading = $form_details['sub_heading'];
    $contact_form_7 = $form_details['contact_form_7'];
if (!empty($contacts)): ?>
    <section class="contact-layout1 pt-0 mt--100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
              <div class="row">
                <div class="col-12">
                  <?php if(!empty($form_heading)): ?>
                  <h4 class="contact-panel__title"><?php echo $form_heading;?></h4>
                  <?php endif; ?>

                  <?php if(!empty($sub_heading)): ?>
                  <p class="contact-panel__desc mb-30"><?php echo $sub_heading;?></p>
                  <?php endif; ?>
                </div>
              </div>
              <?php if(!empty($contact_form_7)): ?>
                <?php echo do_shortcode('[contact-form-7 id="'.$contact_form_7.'"]');?>
                <?php endif; ?>

              <div class="contact-panel__info d-flex flex-column justify-content-start bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img">
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banners/1.jpg" alt="banner">
                </div>

                <?php 
                $quick_contact = $contacts['quick_contact'];
                    $contact_heading = $quick_contact['contact_heading'];
                    $contact_sub_heading = $quick_contact['contact_sub_heading'];
                    $contact_phone = $quick_contact['phone'];
                    $contact_email = $quick_contact['email'];
                    $contact_address = $quick_contact['address'];
                    $contact_timing = $quick_contact['timing'];

                if ($quick_contact): ?>
                <div>
                  <?php if (!empty($contact_heading)): ?>
                  <h4 class="contact-panel__title color-white"><?php echo $contact_heading;?></h4>
                  <?php endif; ?>

                  <?php if (!empty($contact_sub_heading)): ?>
                  <p class="contact-panel__desc font-weight-bold color-white mb-30"><?php echo $contact_sub_heading;?></p>
                  <?php endif; ?>
                </div>

                <div>
                  <ul class="contact__list list-unstyled mb-30">
                    <?php if (!empty($contact_phone)): ?>
                    <li>
                      <i class="icon-phone"></i>
                      <a href="tel:<?php echo $contact_phone;?>"><?php echo $contact_phone;?></a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty($contact_email)): ?>
                    <li>
                      <i class="icon-email"></i>
                      <a href="mailto:<?php echo $contact_email;?>"><?php echo $contact_email;?></a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty($contact_address)): ?>
                    <li>
                      <i class="icon-location"></i>
                      <a href="#">Location: <?php echo $contact_address;?></a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty($contact_timing)): ?>
                    <li>
                      <i class="icon-clock"></i>
                      <a href="#"><?php echo $contact_timing;?></a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              <?php endif; ?>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- /.contact layout 1 -->
<?php endif; ?>


<?php  

get_footer();

?>
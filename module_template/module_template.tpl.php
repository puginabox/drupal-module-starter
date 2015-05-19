<?php
  $img_path = drupal_get_path('module', 'strayer_campusfinder_form') . '/images/';
  $legend_img_path = base_path() . drupal_get_path('theme', 'strayer_redesign') . '/_res/img/';
?>

<section id="campusfinder-section" class="campus-finder">
  <div id="campusfinder-form">
    <!--<h1>College Campus Finder</h1>-->
    <div class="content form-body">
      <div class="field form-field"><label for='edit-zip'>Enter your ZIP Code</label><?php print drupal_render($form['zip']); ?></div>
      <div class="field single-text">OR</div>
      <div class="field form-field"><label for='edit-province'>Select a State</label><?php print drupal_render($form['province']); ?></div>
      <div class="field form-submit"><?php print drupal_render($form['submit']); ?></div>
    </div>
<?php
  print drupal_render($form['form_build_id']);
  print drupal_render($form['form_token']);
  print drupal_render($form['form_id']);
?>
  </div>
  <div id="campus_messages" style="width:896px; margin:0 auto !important; display:none;"></div>
</section>


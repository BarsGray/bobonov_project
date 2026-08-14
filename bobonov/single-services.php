<?php
get_header();
show_page_title();

if (get_the_content() || get_field("text_before")): ?>
  <div class="content_container"><?php the_field("text_before"); the_content(); ?></div>
<?php endif; ?>
<?php
  show_handbook();
  show_benefits();
  show_specialists_on_services();
  show_price_sevice_page();
?>
<?php if (get_field("text_after")): ?>
  <div class="content_container"><?php the_field("text_after"); ?></div>
<?php endif; ?>
<?php
  show_feedback();
  show_bottom_contacts();
  get_footer();
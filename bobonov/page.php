<?php
get_header();
show_page_title();

if (get_the_content() || get_field("text_before")): ?>
  <div class="content_container"><?php get_field("text_before") ? the_field("text_before") : ''; get_the_content() ? the_content() : '';?></div>
<?php endif; ?>

<?php
  if(is_page(33)) show_price();
  if(is_page(39)) show_about();
  if(is_page(36)) show_contacts_page();
  if(is_page(42)) show_spetsialisty();
  if(is_page(44)) show_otzyvy();
?>
<?php if (get_field("text_after")): ?>
  <div class="content_container"><?php the_field("text_after"); ?></div>
<?php endif; ?>
<?php
  if(!is_page(36)) {
    show_feedback();
    show_bottom_contacts();
  }
  get_footer();
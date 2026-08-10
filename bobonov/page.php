<?php
get_header();
show_page_title();
if(is_page(33)) show_price();
if(is_page(39)) show_about();
if(is_page(36)) show_contacts_block();
if(is_page(42)) show_spetsialisty();
if(is_page(44)) show_otzyvy();
get_footer(); ?>
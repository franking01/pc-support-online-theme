<?php
/*
Template Name: Contact
*/
get_header(); ?>

<h2>Contact Us</h2>
<p>Email us directly at <a href="mailto:fran@pc-support-online.com">fran@pc-support-online.com</a></p>

<form action="mailto:fran@pc-support-online.com" method="post" enctype="text/plain">
  <p><label>Your Name: <input type="text" name="name"></label></p>
  <p><label>Your Email: <input type="email" name="email"></label></p>
  <p><label>Your Message:<br><textarea name="message"></textarea></label></p>
  <p><input type="submit" value="Send"></p>
</form>

<?php get_footer(); ?>

<?php
/**
 * Template part for displaying contact form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ansmusic
 */

?>
<form class="ANS_contact-form ANS_flex flex_column" action="">
    <input data-aos="fade-up" name="name" id="name" type="text" placeholder="Name" />
    <input data-aos="fade-up" name="email" id="email" type="email" placeholder="Email" />
    <textarea data-aos="fade-up" rows="1" name="message" id="message" type="text" placeholder="Message"></textarea>
    <input data-aos="fade-up" name="verifyNnonce" id="verifyNnonce" placeholder="What is 1+2=?" type="text" />
    <button data-aos="fade-up" type="submit" class="fs-base ANS_btn btn-b-yellow">
        SEND
    </button>
</form>
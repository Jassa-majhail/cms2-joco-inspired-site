<?php
/**
 * Title: Contact Page
 * Slug: joco/contact
 * Categories: featured, pages
 * Keywords: contact, get in touch, form, support
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"72px","bottom":"24px"}}}} -->
<div class="wp-block-group alignfull"><!-- wp:paragraph {"textColor":"primary","className":"joco-eyebrow"} -->
<p class="joco-eyebrow has-primary-color has-text-color">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Get in touch</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Questions, press, or wholesale? Send a note and our team will respond soon.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"},"className":"joco-contact-cards","style":{"spacing":{"padding":{"top":"56px","bottom":"72px"}}}} -->
<div class="wp-block-group alignfull joco-contact-cards"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:56%"><!-- wp:group {"backgroundColor":"secondary","className":"joco-contact-card","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}},"border":{"radius":"20px"}}} -->
<div class="wp-block-group joco-contact-card has-secondary-background-color has-background" style="border-radius:20px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Send a message</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">We read every message. For order help, include your order number if you have one.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"joco-contact-form","style":{"spacing":{"padding":{"top":"16px"}}}} -->
<div class="wp-block-group joco-contact-form" style="padding-top:16px"><!-- wp:html -->
<form>
  <div class="joco-form-row">
    <div class="joco-form-field">
      <label for="joco-full-name">Full name</label>
      <input id="joco-full-name" name="full_name" type="text" />
    </div>
    <div class="joco-form-field">
      <label for="joco-email">Email</label>
      <input id="joco-email" name="email" type="email" />
    </div>
  </div>

  <div class="joco-form-field">
    <label for="joco-subject">Subject</label>
    <input id="joco-subject" name="subject" type="text" />
  </div>

  <div class="joco-form-field">
    <label for="joco-message">Message</label>
    <textarea id="joco-message" name="message" rows="7"></textarea>
  </div>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"18px"}}}} -->
<div class="wp-block-buttons" style="margin-top:18px"><!-- wp:button {"text":"Submit"} /-->

<!-- wp:button {"text":"Reset","className":"is-style-outline"} /--></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:44%"><!-- wp:group {"backgroundColor":"secondary","className":"joco-contact-card","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}},"border":{"radius":"20px"}}} -->
<div class="wp-block-group joco-contact-card has-secondary-background-color has-background" style="border-radius:20px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Customer care</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Email:</strong> support@customjocoinspired.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Hours:</strong> Monday–Friday, 9am–5pm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Location:</strong> United States</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">For collaborations and wholesale, include “Wholesale” in your subject line.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

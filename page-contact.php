<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amybollana
 */

get_header();
?>

<body>
    <section class="contact">
        <h1>Contact</h1>
        <div class="contact-form">
            <?php echo apply_shortcodes('[contact-form-7 id="289" class="contact-form" title="Contact form 1"]'); ?>
        </div>
    </section>
</body>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="mx-auto max-w-4xl">
    <h1><?php the_title() ?></h1>

    <div class="mt-4">
        <?php get_template_part('./includes/section', 'content') ?>
    </div>
</div>

<?php get_footer(); ?>
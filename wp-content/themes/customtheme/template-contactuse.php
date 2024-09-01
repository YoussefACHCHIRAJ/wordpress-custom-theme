<?php

/**
Template Name: Contact Us
 */
?>

<?php get_header(); ?>

<div class="mx-auto max-w-4xl">
    <h1 class="text-xl font-bold my-6 border-b border-black pb-2"><?php the_title() ?></h1>

    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 bg-black/40 p-4 rounded-md">
        <div class="border-r border-black">
            <?php get_template_part('./includes/section', 'content') ?>
        </div>
        <div>
            This would be the right side bar
        </div>
    </div>
</div>

<?php get_footer(); ?>
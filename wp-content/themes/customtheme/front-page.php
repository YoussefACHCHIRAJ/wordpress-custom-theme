<?php get_header(); ?>

<div class="mx-auto max-w-3xl">
    <h1 class="text-xl font-bold my-6 border-b border-black pb-2"><?php the_title() ?></h1>

    <div class="mt-4">
        <?php get_template_part('./includes/section', 'content') ?>
    </div>
</div>

<?php get_footer(); ?>
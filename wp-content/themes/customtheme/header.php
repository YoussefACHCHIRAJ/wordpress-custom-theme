<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Theme</title>
    <?php wp_head() ?>
</head>

<body>

    <header class="bg-gray-900 w-full h-20 text-white">
        <div class="max-w-3xl mx-auto h-full py-4">
            <?php wp_nav_menu([
                "theme_location" => "top-menu",
                "menu_class" => "flex items-center gap-2 top-menu"
            ]) ?>
        </div>
    </header>
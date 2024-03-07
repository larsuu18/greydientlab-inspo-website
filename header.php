<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    wp_head();
    $logo = get_field('logo');
    ?>

</head>
<body>

    <div class="intro">

        <h1 class="logo-header">
            <span class="logo">Lars</span><span class="logo spacing">De Guzman</span>
        </h1>

    </div>

<header>
    <div class="container menu-wrapper">
        <div class="container-logo">
            <a href="/portfolio">Lars De Guzman</a>
        </div>
        <div class="containers">
            <?php
            wp_nav_menu(
                    array(

                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-bar',
                    )
            );
            ?>
        </div>
    </div>
</header>

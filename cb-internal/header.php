<!DOCTYPE html>
<!-- Selects the language that the user selected in the wordpress theme -->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Prints scripts or data in the head tag on the front end. -->
    <?php wp_head(); ?>
</head>

<!-- Adds WP classes to the body tag. Use the inspector google tool to view it -->

<body <?php body_class(); ?>>
    <!-- <header class="container cb-site-header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid nav-display">
                <img src="<?php echo get_theme_file_uri('/imgs/1cb_logo.png') ?>">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <form class="d-flex top-banner-search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="jumbotron-search-btn" type="submit">Search</button>
        </form>
    </header> -->
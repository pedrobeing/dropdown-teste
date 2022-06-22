<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Pharmavie">

    <title><?php bloginfo('name'); ?></title>

    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/site.webmanifest">

    <!-- Header wordpress -->
    <?php wp_head(); ?>

    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/deps.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/app.min.css">

</head>

<body>

    <header class="header">

        <div class="wrapper wrapper-1740 some-topo">

            <nav class="navbar navbar-expand-xl justify-content-between px-0 align-items-center">

                <!-- Collapse button -->
                <!-- <button class="navbar-toggler d-block d-xl-none" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu1"></span>
                    <span class="menu2"></span>
                    <span class="menu3"></span>
                </button> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu1"></span>
                    <span class="menu2"></span>
                    <span class="menu3"></span>
                </button>


                <a href="/" class="d-flex">
                    <figure class="mb-0 logo">
                        <img class="responsive logo_desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_principal.jpg" alt="Logo Pharmavie">
                        <img class="responsive logo_mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_mobile.svg" alt="Logo Pharmavie">
                    </figure>
                </a>


                <div class="max-900 w-100 d-none d-xl-block pl-3">
                    <form class="search-form " action="/action_page.php">
                        <div class="form-group position-relative mb-0">
                            <input type="search" class="search-field form-control" placeholder="Olá, o que você procura?">

                            <button type="submit" id="searchsubmit">
                                <i class="fas fa-search bege-claro mx-2 fs-24"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="d-flex d-xl-none">
                    <i class="fas fa-shopping-bag bege-claro mx-2 fs-16"></i>
                    <i class="fas fa-search bege-claro mx-2 fs-16"></i>
                </div>

                <a href="/minha-conta/" class="d-xl-flex d-none mr-2">

                    <div class="bg-icons-header bege-claro mr-2 ml-3">
                        <i class="fas fa-user fs-24"></i>
                    </div>

                    <div class="bege-claro d-flex flex-column mr-3">

                        Conta
                        <span class="preto-texto fs-12 text-nowrap">Entrar / Cadastrar</span>

                    </div>
                </a>

                <div class="d-xl-flex d-none">

                    <div class="bg-icons-header bege-claro mx-2">
                        <i class="fas fa-shopping-bag fs-24"></i>
                    </div>

                    <div class="bege-claro d-flex flex-column">

                        Sacola
                        <span class="preto-texto fs-12">0 item</span>

                    </div>

                </div>

            </nav>

        </div>

        <div class="topo2">

            <div class="wrapper wrapper-1740 infos-section">
                <nav class="navbar navbar-expand-xl">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <a href="/minha-conta/" class="branco d-flex align-items-center d-block d-xl-none topo-mobile">
                                <div>
                                    <i class="fas fa-user branco mr-3"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <span><strong>Conta</strong></span>
                                    <span class="fs-12 text-nowrap">Entrar / Cadastrar</span>
                                </div>
                            </a>

                            <li class="nav-item dropdown category">
                                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bars mr-3"></i>
                                    <i class="fas fa-ellipsis-h mr-3 d-none"></i>
                                    Nossas Categorias
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown1.1
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                        <li class="dropdown-item" href="#"><a>Action 1.1</a></li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1.1</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                                <li class="dropdown-item" href="#"><a>Action 1.1.1</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>


                                    <a href="#" class="dropdown-item">Corpo</a>
                                    <a href="#" class="dropdown-item">Proteção Solar</a>
                                    <a href="#" class="dropdown-item">Cabelo, Barba e Unhas</a>
                                    <a href="#" class="dropdown-item">Infantil</a>
                                    <a href="#" class="dropdown-item">Nutricosméticos/Suplementos</a>
                                    <a href="#" class="dropdown-item">Linha Profissional</a>
                                </ul>
                            </li>



                            <!-- <li class="nav-item category">

                                <div class="custom-select-form mx-auto my-2">

                                    <select name="categorias" class="form-control border-0" id="categorys">
                                        <option value="0">Nossas Categorias</option>
                                        <option class="py-4">Rosto</option>
                                        <option class="py-4">Corpo</option>
                                        <option class="py-4">Proteção Solar</option>
                                        <option class="py-4">Cabelo, Barba e Unhas</option>
                                        <option class="py-4">Infantil</option>
                                        <option class="py-4">Nutricosméticos/Suplementos</option>
                                        <option class="py-4">Linha Profissional</option>
                                    </select>

                                </div> -->

                            <!-- </li> -->






                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'menu-principal',
                                        'menu_id'        => 'menu-principal',
                                        'container'      => false,
                                        'depth'          => 2,
                                        'menu_class'     => 'navbar-nav justify-content-around',
                                        'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                                        'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                                    ) );
                                ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

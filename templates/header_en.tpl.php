<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DNF9GE8E26"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-DNF9GE8E26'); </script>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Marc Bobin">
        <meta name="description" content="Marc Bobin is certified Web Developer from Seneca College and received the high honours. He is passionate with web development and coding and he is looking forward to work with you. Feel free to reach out to him.">
        <meta name="keywords" content="website, websites, web development, development, web developer, developer, web design, design, web designer, designer, marc bobin, marc, bobin, portfolio, about, skills, html5, html 5, css 3, css3, javascript, react, angular, php, wordpress">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/3976ef52ce.js" crossorigin="anonymous"></script>
        <!-- Css -->
        <link href="css/style.min.css" rel="stylesheet" type="text/css">

        <title>Marc Bobin | D&D - EN</title>

    </head>

    <body>
        <?php
        // DEFINE WHAT PAGE IS SHOWING
            if ($page == 'home') {
                $page_title = "Welcome";
                $link_fra = "index_fr.php?page=home_fr";
            }
            elseif ($page == 'about') {
                $page_title = "About Me";
                $link_fra = "index_fr.php?page=a_propos";
            }
            elseif ($page == 'skills') {
                $page_title = "Skills";
                $link_fra = "index_fr.php?page=competences";
            }
            elseif ($page == 'portfolio') {
                $page_title = "Portfolio";
                $link_fra = "index_fr.php?page=portfolio_fr";
            }
            elseif ($page == 'testimonials') {
                $page_title = "Testimonials";
                $link_fra = "index_fr.php?page=temoignages";
            }
            elseif ($page == 'contact') {
                $page_title = "Contact Me";
                $link_fra = "index_fr.php?page=contacter";
            }
            else {
                $page_title = "Something went wrong!";
            }
        ?>

        <!-- NAVIGATION -->
        <nav id="navigation" class="shadow-white">
            <div class="d-flex logo">
                <a href="index.php"><img src="img/mb-dd-dark-bg.png" alt="Marc Bobin D&D written in white color on a dark background" width="200" height="35" class="border-dark"></a>
            
                <div class="burger mt-2">
                    <!-- middle bar -->
                    <span></span>
                </div>            
            </div>

            <div class="navigation">
                <ul class="mt-0 pt-1">
                    <li>
                        <a class="<?php echo $page == 'about' ? 'active-nav' : '' ; ?>" href="?page=about">About Me</a>
                    </li>
                    <li>
                        <a class="<?php echo $page == 'skills' ? 'active-nav' : '' ; ?>" href="?page=skills">Skills</a>
                    </li>
                    <li>
                        <a class="<?php echo $page == 'portfolio' ? 'active-nav' : '' ; ?>" href="?page=portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="<?php echo $page == 'testimonials' ? 'active-nav' : '' ; ?>" href="?page=testimonials">Testimonials</a>
                    </li>
                    <li>
                        <a class="<?php echo $page == 'contact' ? 'active-nav' : '' ; ?>" href="?page=contact">Contact</a>
                    </li>
                    <li id="language">
                        <a href="<?php echo $link_fra; ?>"><span class="pipe">| &nbsp; &nbsp;</span><i class="fas fa-globe"></i> FR</a>
                    </li>
                    <div class="contact-info mt-5 text-center">
                        <a href="https://www.linkedin.com/in/marc-bobin-b3bb95168/" rel="external" target="blank"><i class="fab fa-linkedin accent-color"></i></a> 
                        <a href="index.php?page=contact" class="pl-0"><i class="fas fa-envelope accent-color"></i></a>
                        <a href="tel:647-707-1979"><i class="fas fa-phone-alt accent-color"></i></a>
                    </div>
                </ul>
            </div>
        </nav>        
        <!-- END OF NAVIGATION -->

        <!-- HEADER -->
        <header class="shadow py-4">
            <h1 class="text-center display-4 animate__animated animate__zoomIn my-0 text-white"><?php echo $page_title; ?></h1>
        </header>
        <!-- END OF HEADER -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DNF9GE8E26"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-DNF9GE8E26'); </script>

        <!-- Meta tags requis -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Marc Bobin">
        <meta name="description" content="Marc Bobin a obtenu son certificat de Développeur Web au College Seneca, avec les hautes distinctions. Le code et le développement web sont devenu sa passion et il est impatient de travailler avec vous. N'hésitez pas à le contacter.">
        <meta name="keywords" content="website, site web, création, création web, création de site internet, web development, développement internet, design web, design, designer web, designer, marc bobin, marc, bobin, portfolio, à propos, compétences, html5, html 5, css 3, css3, javascript, react, angular, php, wordpress">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/3976ef52ce.js" crossorigin="anonymous"></script>
        <!-- Css -->
        <link href="css/style.min.css" rel="stylesheet" type="text/css">

        <title>Marc Bobin | D&D - FR</title>

    </head>

    <body>
        <?php
        // DEFINIR LA PAGE MONTREE
            if ($page == 'home_fr') {  
                $page_title = "Bienvenue";
                $link_eng = "index.php?page=home";
            }
            elseif ($page == 'a_propos') {
                $page_title = "A propos de moi";
                $link_eng = "index.php?page=about";
            }
            elseif ($page == 'competences') {
                $page_title = "Compétences";
                $link_eng = "index.php?page=skills";
            }
            elseif ($page == 'portfolio_fr') {
                $page_title = "Portfolio";
                $link_eng = "index.php?page=portfolio";
            }
            elseif ($page == 'temoignages') {
                $page_title = "Témoignages";
                $link_eng = "index.php?page=testimonials";
            }
            elseif ($page == 'contacter') {
                $page_title = "Contactez-moi";
                $link_eng = "index.php?page=contact";
            }
            else {
                $page_title = "Quelque chose ne s'est pas bien déroulé !";
            }      
        ?>

        <!-- NAVIGATION -->
        <nav id="navigation" class="shadow-white">
            <div class="d-flex logo">
                <a href="index_fr.php"><img src="img/mb-dd-dark-bg.png" alt="MB écrit en blanc sur un fond foncé" width="200" height="35" class="border-dark"></a>
        
                <div class="burger mt-2">
                    <!-- barre du milieu -->
                    <span></span>
                </div>
            </div>

            <div class="navigation">
                <ul class="mt-0 pt-1">
                    <li>
                        <a class="<?php echo $page == 'a_propos' ? 'active-nav' : '' ; ?>" href="?page=a_propos">A propos de moi</a>
                    </li>
                    <li>
                        <a class="<?php echo $page == 'competences' ? 'active-nav' : '' ; ?>" href="?page=competences">Compétences</a>
                    </li>
                    <li>
                        <a class="<?php echo $page == 'portfolio_fr' ? 'active-nav' : '' ; ?>" href="?page=portfolio_fr">Portfolio</a>
                    </li>
                    <li>
                        <a class="<?php echo $page == 'temoignages' ? 'active-nav' : '' ; ?>" href="?page=temoignages">Témoignages</a>
                    </li>
                    <li>
                        <a class="<?php echo $page == 'contacter' ? 'active-nav' : '' ; ?>" href="?page=contacter">Contact</a>
                    </li>
                    <li id="language">
                        <a href="<?php echo $link_eng; ?>"><span class="pipe">| &nbsp; &nbsp;</span> <i class="fas fa-globe"></i> EN</a>
                    </li>
                    <div class="contact-info mt-5 text-center">
                        <a href="https://www.linkedin.com/in/marc-bobin-b3bb95168/" rel="external" target="blank"><i class="fab fa-linkedin accent-color"></i></a> 
                        <a href="index_fr.php?page=contacter" class="pl-0"><i class="fas fa-envelope accent-color"></i></a>
                        <a href="tel:647-707-1979"><i class="fas fa-phone-alt accent-color"></i></a>
                    </div>
                </ul>
            </div>
        </nav>
        <!-- FIN DE NAVIGATION -->

        <!-- HEADER -->
        <header class="shadow py-4">
                <h1 class="text-center display-4 animate__animated animate__zoomIn my-0 text-white"><?php echo $page_title; ?></h1>
        </header>
        <!-- FIN DE HEADER -->
<!-- Définir la page d'entrée sur home_fr -->
<?php if (!isset($_GET["page"])) {
    $page = "home_fr";
} else {
    $page = $_GET['page'];
} ?>

<?php require_once 'templates/header_fr.tpl.php'?>

<main class="view-height my-5">

<?php if ($page === "home_fr") { ?>
<!-- ================================================ 
                    HOME_FR
================================================= -->
    <div id="my-logo" class="container row col-12 col-md-9 col-xl-7 text-center my-5 mx-auto fade-in">
        <img src="img/mb-dd-dark-bg.png" alt="MB écrit en blanc sur un fond foncé" class="img-fluid border-inside px-0">
        <h2 class="my-tagline h6 mt-3"><i class="fas fa-grip-lines"></i> Design & Développement <i class="fas fa-grip-lines"></i></h2>
    </div> <!-- Fin de #my-logo -->

    <div class="container row d-flex justify-content-center align-items-center mx-auto fade-in">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 h5 bg-section border-inside py-3 mb-0">
            <div class="d-flex justify-content-center portrait fade-in slide-in from-right">
                <img src="img/marc-square.jpg" alt="portrait of Marc" class="img-fluid border-white border rounded-3 shadow-white">
            </div>
            <div class="fade-in slide-in from-left">
                <p>Bonjour,</p>
                <p>Je m'appelle Marc, je suis un Développeur et Designer Web, diplômé avec les hautes distinctions du programme Design et Développement Web du College Seneca de Toronto.</p>
                <p>Bilingue (français et anglais), passionné et très organisé, j'ai voyagé à travers différents domaines dans ma vie professionnelle qui ont contribués à façonner  le créatif que je suis aujourd'hui.</p>
                <p>Vous avez besoin d'un site pour votre activité, ou juste d'une vitrine pour votre passion? N'hesitez pas à me <a href="index_fr.php?page=contacter" class="body-link-white">contacter</a> si vous avez la moindre question.</p>
            </div>
        </div>
    </div>

<?php } elseif ($page === "a_propos") { ?>
<!-- ================================================ 
                    A PROPOS
================================================= -->
    <div class="col-12 my-5 text-center">
        <h2 class="pb-3">De la pâtisserie au développement web</h2>
    </div> <!-- Fin de .col-12 -->

    <div class="timeline">
        <!-- ANNEE 2021 -->
        <article class="timeline-container left fade-in slide-in from-left">
            <div class="content bg-section border-inside rounded-3">
                <h3 class="accent-color year mt-0"><span class="border border-white rounded-3 px-3">2021</span></h3>
                <p><strong>Diplômé avec les hautes distinctions</strong>  du programme Design et Développement Web du College Seneca de Toronto!</p>
                <p>J'apprends actuellement React JS, Angular JS et TypeScript.</p>
            </div>
        </article> <!-- Fin de .timeline-container 2021-->
        <!-- FIN DE ANNEE 2021 -->

        <!-- ANNEE 2018 -->
        <article class="timeline-container right fade-in slide-in from-right">
            <div class="content rounded bg-section">
                <h3 class="accent-color mt-0"><span class="border border-white rounded-3 px-3">2018</span></h3>
                <p>J'ai déménagé à Toronto.</p>
                <p>La pandemie a changé le monde dans lequel nous vivons et j'ai ressenti le besoin de m'y adapter.</p>
                <p>C'est pourquoi j'ai décidé de retourner sur les bancs de l'école et de me former dans ce que je peux maintenant appeler ma passion: le développement web, au Collège Seneca de Toronto, où j'ai reçu ma <strong>certification avec les hautes distinctions</strong>.</p>
            </div>    
        </article> <!-- Fin de .timeline-container 2018-->
        <!-- FIN DE ANNEE 2018 -->

        <!-- ANNEE 2012 -->
        <article class="timeline-container left fade-in slide-in from-left">
            <div class="content rounded bg-section">
                <h3 class="accent-color year mt-0"><span class="border border-white rounded-3 px-3">2012</span></h3>
                <p>Retour en France dans le Service Public, au département culturel. <br>
                Faire partie d'une équipe qui organise des évènements culturels a été l'une des plus belles expériences de ma vie professionnelle.</p>
                <p>Rencontrer des artistes, qu'ils soient connus ou moins connus, être capable de voir un éventail de spectacles, concerts, pièces de théâtre, et être témoin de la réaction du public est absolument épanouissant.<br>
                <strong>La création humaine peut être magnifique</strong> et je suis convaincu qu'elle est nécessaire.</p>
            </div>
        </article> <!-- Fin de .timeline-container 2012 -->
        <!-- FIN DE ANNEE 2012 -->

        <!-- ANNEE 2010 -->
        <article class="timeline-container right fade-in slide-in from-right">
            <div class="content rounded bg-section">
                <h3 class="accent-color mt-0"><span class="border border-white rounded-3 px-3">2010</span></h3>
                <p>J'ai déménagé en Italie et y ai vécu la "Dolce Vita" pendant un an et demi.</p>
                <p>Cette expérience m'a montré une autre culture, et c'est là-bas que j'ai découvert que <strong>j'aimais l'architecture</strong>.<br>
                Je pouvais rester en face d'un immense édifice et voir combien il était impressionnant que les hommes puissent être capables de créer de telles structures qui soient toujours debout aujourd'hui.</p>
            </div>
        </article> <!-- Fin de .timeline-container 2010 -->
        <!-- FIN DE ANNEE 2010 -->

        <!-- ANNEE 2005-->
        <article class="timeline-container left fade-in slide-in from-left">
            <div class="content rounded bg-section">
                <h3 class="accent-color year mt-0"><span class="border border-white rounded-3 px-3">2005</span></h3>
                <p>Après avoir reçu un massage, j'ai ressenti le besoin d'explorer les massages Ayurvédiques (massage Indien relaxant et thérapeutique). J'ai suivi une formation à Paris, obtenu un certificat, et commencé à pratiquer en complément d'activité.</p>
                <p>Lorsque vous donnez un massage, vous devez <strong>lire et écouter l'énergie de l'autre</strong>. Vous créez une relation, vous donnez et vous recevez en même temps.</p> 
            </div>
        </article> <!-- Fin de .timeline-container 2005-->
        <!-- FIN DE ANNEE 2005 -->
        
        <!-- ANNEE 1995-->
        <article class="timeline-container right fade-in slide-in from-right">
            <div class="content rounded bg-section">
                <h3 class="accent-color mt-0"><span class="border border-white rounded-3 px-3">1995</span></h3>
                <p>Retour à l'école, dans le domaine de l'administration.</p>
                <p>Après un stage dans un Hôtel de Ville, et après avoir obtenu mon diplôme, j'ai trouvé un emploi dans le Service Public Français et y ai travaillé pendant la plus grande partie de ma vie (18 ans).</p>
                <p>Avec cette expérience, j'ai acquis de <strong>très grandes compétences organisationnelles</strong>.</p>
            </div>
        </article> <!-- Fin de .timeline-container 1995 -->
        <!-- FIN DE ANNEE 1995 -->

        <!-- ANNEE 1993 -->
        <article class="timeline-container left fade-in slide-in from-left">
            <div class="content rounded bg-section">
                <h3 class="accent-color year mt-0"><span class="border border-white rounded-3 px-3">1993</span></h3>
                <p>J'ai commencé ma vie professionnelle à 14 ans en suivant un CAP Pâtisserie.</p>
                <p>Cela m'a apporté mon <strong>premier sentiment de création</strong>. C'est magnifique d'avoir une idée en tête, de prendre le temps de penser à la façon de lui donner vie, essayer encore et encore, et finalement visualiser le résultat.</p>
            </div>
        </article> <!-- Fin de .col-12 1993 -->
        <!-- FIN DE ANNEE 1993 -->
    </div> <!-- Fin de .timeline-->


<?php } elseif ($page === "competences") { ?>
<!-- ================================================ 
                    COMPETENCES
================================================= -->
<!-- COLLEGE SENECA -->
<section class="container row d-flex justify-content-around mx-auto mt-5 text-center fade-in slide-in from-left">

    <h2 class="h3"><i class="fas fa-certificate"></i> Certifié avec les <strong>"Hautes Distinctions"</strong> dans le programme  <a href="https://webmaster.senecacollege.ca/" rel="external" target="blank"><span class="body-link text-color">Webmaster du Collège Seneca</span></a>.</h2>
    <hr>

    <div class="col-7 col-sm-5 col-md-3 col-lg-2 text-center mb-5 py-3 bg-section border-inside">
        <span class="h4">HTML</span><br>
        <span class="accent-color h2"><i class="fab fa-html5 text-center"></i></span>
    </div> <!-- Fin de .col-8 HTML -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
        <span class="h4">CSS</span><br>
        <span class="accent-color h2"><i class="fab fa-css3 text-center"></i></span>
    </div> <!-- Fin de .col-8 CSS -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fab fa-js-square text-center"></i></span><br>
        <span class="h4">JavaScript</span> 
    </div> <!-- Fin de .col-8 JS -->

    <div class="col-7 col-sm-5 col-md-3 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
        <span class="h2"><img src="img/jQuery-red.png" alt="jQuery logo" width="25" height="25" class="mb-1"></span><br>
        <span class="h4">jQuery</span>
    </div> <!-- Fin de .col-8 jQuery -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 offset-lg-0 col-lg-2 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fab fa-bootstrap"></i></span><br>
        <span class="h4">Bootstrap</span>
    </div> <!-- Fin de .col-8 bootstrap -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fab fa-sass"></i></span><br>
        <span class="h4">Sass</span>
    </div> <!-- Fin de .col-8 sass -->

    <div class="col-7 col-sm-5 col-md-3 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fab fa-wordpress"></i></span><br>
        <span class="h4">WordPress</span>
    </div> <!-- Fin de .col-8 wordpress -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fab fa-php"></i></span><br>
        <span class="h4">PHP</span>
    </div> <!-- Fin de .col-8 php -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 offset-lg-0 col-lg-2 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fas fa-mobile-alt"></i></span><br>
        <span class="h4">Adaptibilité</span>
    </div> <!-- Fin de .col-8 responsive -->

    <div class="col-7 col-sm-5 col-md-3 col-lg-2 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fas fa-low-vision"></i></span><br>
        <span class="h4 accessibility">Accessibilité</span>
    </div> <!-- Fin de .col-8 accessibility -->

</section> <!-- Fin de .row -->
<!-- FIN DE COLLEGE SENECA -->

<!-- PROGRAMMES ACTUELS -->
<section class="container row d-flex justify-content-around mx-auto mt-5 text-center fade-in slide-in from-right">

    <h2 class="h3"><i class="fas fa-laptop-code"></i> Programmes actuellement suivis
    <!-- au <a href="https://www.senecacollege.ca/ce/technology/application-development/web-programming-development.html#Curriculum" rel="external" target="blank"><span class="body-link text-color">Collège Seneca</span></a> -->
    </h2>
    <hr>

    <div class="col-7 col-sm-5 col-md-3 col-lg-3 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fab fa-react"></i></span><br>
        <span class="h4">React JS</span>
    </div> <!-- Fin de .col-8 react -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-3 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fab fa-angular"></i></span><br>
        <span class="h4">Angular JS</span>
    </div> <!-- Fin de .col-8 angular -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-3 border-inside text-center mb-5 py-3 bg-section">
        <span class="h2"><img src="img/typescript-red.png" alt="a T an a S representing the typescript logo" width="25" height="25" class="mb-1"></span><br>
        <span class="h4">TypeScript</span>
    </div> <!-- Fin de .col-8 typescript -->

</section> <!-- Fin de .row -->
<!-- FIN DE PROGRAMMES ACTUELS -->

<!-- AUTRE -->
<section class="container row d-flex justify-content-around mx-auto mt-5 text-center fade-in slide-in from-left">

    <h2 class="h3"><i class="fas fa-tasks"></i> Autre</h2>
    <hr>

    <div class="col-7 col-sm-5 col-md-3 col-lg-3 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fas fa-globe-americas"></i></span><br>
        <span class="h4">Bilingue</span>
    </div> <!-- Fin de .col-8 bilingue -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-3 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="far fa-folder-open"></i></span><br>
        <span class="h4">Organisation</span>
    </div> <!-- Fin de .col-8 organisation -->

    <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-3 border-inside text-center mb-5 py-3 bg-section">
        <span class="accent-color h2"><i class="fas fa-file-contract"></i></span><br>
        <span class="h4">Gestion de Projet</span>
    </div> <!-- Fin de .col-8 Gestion de projet -->

</section> <!-- Fin de .row -->
<!-- FIN DE AUTRE -->

<?php } elseif ($page === "portfolio_fr") { ?>
<!-- ================================================ 
                    PORTFOLIO
================================================= -->
    <!-- LIES AUX CLIENTS -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 fade-in slide-in from-left">
        <h2 class="h2 text-center"><i class="fas fa-laptop-house"></i> Réalisations liées aux clients</h2>
        <hr>
        <article class="col-12 col-md-5 col-lg-3 bg-section border-inside mb-5">
            <a href="https://www.marcbobin.com/index_fr.php" rel="internal" target="blank">
            <img src="img/works/mb-dd.jpg" alt="a screen shot of Marc Bobin D&D's website" height="100" class="img-fluid mt-3 border border-white rounded-3"></a>

            <h3 class="text-center accent-color">Marc Bobin | D&D <br> (Site en php)</h3>
            <p>J'ai créé le site de <a href="https://www.marcbobin.com/index_fr.php" rel="internal" target="blank"><span class="body-link-white">Marc Bobin | D&D </span></a> avec php en tant que site web en single page avec un ressenti en multi-page. J'ai utilisé des templates pour le header et le footer, inséré dynamiquement la date du copyright ainsi que le titre du header qui change selon la page qui a été cliquée.</p>
            <p>J'ai utilisé Sass pour travailler plus facilement avec des variables concernant les couleurs et les tailles.</p>
            <p>Bootstrap a été utilisé pour m'aider à construire plus rapidement un site qui s'adapte à tout type d'écran, mais j'ai créé le menu sandwich par moi-même.</p>
            <p>Enfin, j'ai utilisé JavaScript pour mes animations et pour cacher mon adresse email de la page source.</p>
        </article> <!-- Fin de .col-12 MB Websites -->
        
        <article class="col-12 col-md-5 offset-md-1 col-lg-3 offset-lg-1 bg-section border-inside mb-5">
            <a href="https://www.caitlinmcneilpsychotherapy.com/" rel="external" target="blank"><img src="img/works/caitlin.jpg" alt="a screen shot of caitlin mcneil therapist's website" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Caitlin McNeil - Therapist</h3>
            <p><a href="https://www.caitlinmcneilpsychotherapy.com/" rel="external" target="blank"><span class="body-link-white">Cailtin McNeil</span></a> fut ma cliente pendant mon programme <a href="https://webmaster.senecacollege.ca/" rel="external" target="blank"><span class="body-link-white">Webmaster au Collège Seneca</span></a>.</p>
            <p>Il s'agit d'une travailleuse sociale en Ontario. Elle avait besoin d'un site internet pour attirer plus de clients pour son activité privée, mais également pour être un endroit duquel elle puisse référencer ses collègues.</p>
            <p>Elle voulait un site relaxant, procurant un sentiment de calme, et souhaitait y intégrer des photos de paysages d'Écosse, d'où elle est originaire.</p>
            <p>J'ai créé ce site en partant de zéro, en utilisant HTML, CSS, Bootstrap et JavaScript/jQuery.<br>
            php a également été utilisé en fin de processus pour la validation du formulaire de contact.</p>
            <p>Ce fut un énorme plaisir de travailler avec Caitlin.</p>
        </article> <!-- Fin de .col-12 Caitlin McNeil-->
        
        <article class="col-12 col-md-5 col-lg-3 offset-lg-1 bg-section border-inside mb-5">
            <a href="portal" rel="external" target="blank"><img src="img/works/portal.jpg" alt="a screen shot of caitlin mcneil therapist's portal" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Portail Client</h3>
            <p>Pendant l'élaboration de ce projet client, je devais créer un <a href="portal" rel="external" target="blank"><span class="body-link-white">portail client</span></a>, pour que mon client ait la possibilité de se connecter et de voir la progression de son site.</p>
            <p>J'ai dû créer une barre de progression et j'ai eu cette idée de révéler doucement cette image de 2 mains qui se rejoignent. Un de mes professeurs m'a aidé à trouver cette solution pour réaliser cette idée.</p>
            <p>Le client pouvait ainsi accéder aux documents tels que les conclusions des réunions (les documents originaux ont été retirés), la proposition (certaines informations de cette proposition sont fictives), les wireframes et mockups, et les prototypes de son site.</p>
        </article> <!-- Fin de .col-12 Caitlin McNeil-->
        
    </section> <!-- Fin de .col-12 Liees aux clients -->
    <!-- FIN DE LIEES AUX CLIENTS -->

    <!-- LIEES AUX ETUDES -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 fade-in slide-in from-right">
        <h2 class="h2 text-center"><i class="fas fa-university"></i> Réalisations liées aux études</h2>
        <hr>
        <article class="col-12 col-md-5 col-lg-4 bg-section border-inside mb-5">
            <a href="chez-martine" rel="external" target="blank"><img src="img/works/martine.jpg" alt="a screen shot of chew martine's website" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Une bonne préparation mène à un bon design</h3>
            <p>Un des <a href="chez-martine" rel="external" target="blank"><span class="body-link-white">devoirs</span></a> durant mon programme était de créer un site de zéro pour un client fictif titulaire d'une petite activité, avec un design original. J'ai choisi le thème d'une boulangerie française.</p>
            <p>La particularité de ce devoir était qu'il s'agissait de la première fois que j'ai pu voir l'autre partie du métier de développeur web.</p>
            <p>J'ai effectué une recherche, comparaison et analyse du marché de la boulangerie française à Toronto, et une explication de design pour aider dans les décisions prises.</p>
            <p>J'ai adoré travailler sur ce devoir et je suis très content du rendu final.</p>
            <p>J'ai reçu une note de 93% pour ce travail.</p>
        </article> <!-- Fin de .col-12 Chez Martine -->
        
        <article class="col-12 col-md-5 offset-md-1 col-lg-4 offset-lg-1 bg-section border-inside mb-5">
            <a href="glove-actually" rel="external" target="blank"><img src="img/works/glove.jpg" alt="a screen shot of glove actually's website" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">It’s Glove, Actually (devoir sur php)</h3>
            <p>Pour ce dernier <a href="glove-actually" rel="external" target="blank"><span class="body-link-white">devoir</span></a> du programme, il était demandé d'examiner les fichiers fournis (codes HTML et CSS) et de développer une solution HARI (Halte Aux Redondances Inutiles) qui utilise php pour la logique et le traitement.</p>
            <p>Le site finalisé devait garder l'esthétique existante, mais aussi les conditions suivantes:</p>
                <ul>
                    <li>intégrer dynamiquement du contenu en utilisant un tableau</li>
                    <li>créer une fonction pour récupérer l'année en cours et l'insérer dynamiquement</li>
                    <li>insérer dynamiquement les bannières, les titres et les textes principaux</li>
                    <li>créer des modèles pour le header et le footer</li>
                    <li>site en page unique avec le sentiment d'un site mutli pages en utilisant la superglobale $_GET et les structures de contrôle</li>
                    <li>récupérer l'adresse email d'un utilisateur à l'aide de la superglobale $_POST</li>
                </ul>
            <p>J'ai vraiment beaucoup aimé réaliser ce devoir et j'ai obtenu une note de 100% dont je suis très fier.</p>
        </article> <!-- Fin de .col-12 Glove actually -->
    </section> <!-- Fin de .col-12 School Related -->
    <!-- FIN DE LIES AUX ETUDES -->

    <!-- PHOTOSHOP -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 fade-in slide-in from-left">
        <h2 class="h2 text-center"><i class="fas fa-paint-brush"></i> Photoshop</h2>
        <hr>
        <article class="col-12 col-md-5 col-lg-4 bg-section border-inside mb-5">
            <a href="img/works/graphic_design/dracula.jpg" rel="internal" target="blank"><img src="img/works/graphic_design/dracula-small.jpg" alt="dracula in his red robe hiding his face with his hands" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Affiche de Film</h3>
            <p>J'adore Photoshop et lorsque j'ai lu ce <a href="img/works/graphic_design/dracula.jpg" rel="internal" target="blank"><span class="body-link-white">devoir</span></a>, j'en ai été ravi!</p>
            <p>Francis Ford Coppola's Dracula est un de mes films favoris et c'est tout naturellement que je l'ai choisi; je pensais qu'il se prêterait très bien au thème.</p>
            <p>Il était demandé de créer une affiche sur un film de mon choix, en utilisant les techniques Photoshop apprises en classe, telles que le fondu des photos, l'outil sélection pour faire disparaître un fond ou remplacer un élément avec le remplissage avec contenu pris en compte, etc...</p>
            
            <p>Il était également demandé d'utiliser au moins 5 images et d'intégrer un sous-titre, le nom des acteurs et tous les crédits nécessaires.</p>
            <p>J'ai obtenu une note de 98% pour cette affiche.</p>
        </article> <!-- Fin de .col-12 Poster -->

        <article class="col-12 col-md-5 offset-md-1 col-lg-4 offset-lg-1 bg-section border-inside mb-5">
            <a href="img/works/graphic_design/mockups-1.3.jpg" rel="internal" target="blank"><img src="img/works/graphic_design/mockup-small.jpg" alt="a screen shot of caitlin mcneil therapist website's mockup" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Maquettes Client</h3>
            <p>Pendant cette formation, nous avons appris l'importance des <a href="img/works/graphic_design/mockups-1.3.jpg" rel="internal" target="blank"><span class="body-link-white">mockups</span></a> dans le processus de création d'un site internet.</p>
            <p>Comme je l'ai dit, j'adore Photoshop et ce fut un plaisir, une fois de plus, de travailler sur les mockups de ma cliente.</p>
            <p>Il m'a été demandé d'organiser les différentes couches selon les meilleures pratiques, de sélectionner une police d'écriture qui convient au domaine du client, de créer un logo simple, et également une page du site basé sur le mockup.</p>
            <p>Vous voyez ici le dernier mockup que j'ai réalisé, celui que ma cliente a choisi, et celui que j'ai utilisé pour créer son site.</p>
            <p>J'ai obtenu 96% pour ce devoir.</p>
        </article> <!-- Fin de .col-12 Mockups-->
    </section>
    <!-- FIN DE PHOTOSHOP -->
    
    <!-- LOGOS -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 fade-in slide-in from-right">
        <h2 class="h2 text-center"><i class="far fa-edit"></i> Logos</h2>
        <hr>
        <article class="col-12 col-md-5 col-lg-3 bg-section border-inside mb-5">
            <a href="img/mb-dd-dark-bg.png" rel="internal" target="blank"><img src="img/works/graphic_design/mb-dd-dark-bg.jpg" alt="Marc Bobin D&D written in white color on a dark background" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">MB Websites</h3>
            <p>Pour mon propre site, j'ai voulu un <a href="img/mb-dd-dark-bg.png" rel="internal" target="blank"><span class="body-link-white">logo</span></a> simple.</p>
            <p>J'ai utilisé Adobe Illustrator et me suis basé le thème couleur du site.</p>
        </article> <!-- Fin de .col-12 MB Websites -->
        
        <article class="col-12 col-md-5 offset-md-1 col-lg-3 bg-section offset-lg-1 border-inside mb-5">
            <a href="img/works/graphic_design/caitlin-logo.svg" rel="internal" target="blank"><img src="img/works/graphic_design/caitlin-logo.jpg" alt="caitlin mcneil written in white on a dark gray background and therapist underneath written the opposite way" height="30" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Caitlin McNeil</h3>
            <p>Il s'agit du simple <a href="img/works/graphic_design/caitlin-logo.svg" rel="internal" target="blank"><span class="body-link-white">logo</span></a> que j'ai créé pour le devoir sur la maquette client, en utilisant Adobe Illustrator.</p>
            <p>Mon client a trouvé que le logo lui convenait et qu'il complémentait le ressenti général du site, et a donc décidé de le garder.</p>
        </article> <!-- Fin de .col-12 Caitlin McNeil-->

        <article class="col-12 col-md-5 col-lg-3 bg-section offset-lg-1 border-inside mb-5">
            <a href="img/works/graphic_design/martine-logo.png" rel="internal" target="blank"><img src="img/works/graphic_design/martine-logo.jpg" alt="chez martine written with an eiffel tower replacing the a" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Chez Martine - French Bakery</h3>
            <p>Ce <a href="img/works/graphic_design/martine-logo.png" rel="internal" target="blank"><span class="body-link-white">logo</span></a> a été créé pour un de mes devoirs, à l'aide d'Adobe Photoshop.</p>
            <p>Avec ce logo, j'ai essayé d'incorporer le ressenti d'une boulangerie parisienne.</p>
        </article> <!-- Fin de .col-12 Chez Martine -->
    </section> <!-- Fin de .col-12 Logos -->
    <!-- FIN DE LOGOS -->

<?php } elseif ($page === "temoignages") { ?>
<!-- ================================================ 
                    TEMOIGNAGES
================================================= -->
    <div class="container row d-flex justify-content-around mx-auto my-5 fade-in slide-in from-left">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active py-5">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border-inside bg-section p-5">
                        <p>Travailler avec Marc fut une pure joie, il est dévoué, attentif et possède vraiment un oeil fantastique pour les détails.<br>
                        Il a écouté attentivement toutes mes demandes, m'a apporté de précieux conseils, et m'a guidée pour faire des choix plus judicieux.
                        <br><br>
                        Il a créé un site absolument magnifique et je me sens chanceuse d'avoir eu l'opportunité de travailler avec lui; il m'est impossible de chanter ses louanges assez fort!
                        <br><br>
                        Merci énormément pour cette formidable opportunité.</p>
                        <p class="body-link-white">—Caitlin McNeil, Thérapiste</p>
                    </div> <!-- Fin de .border-custom -->
                </div> <!-- Fin de .carousel-item Caitlin -->

                <div class="carousel-item py-5">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border-inside bg-section p-5">
                        <p>Marc a réellement été un étudiant exceptionnel dans notre programme Webmaster.<br>
                        Il a excellé dans tous les domaines du programme, montrant une vraie aptitude pour le code et le développement de sites internet.
                        <br><br>
                        Extrêmement organisé, doté d'un oeil exceptionnel pour les détails et d'excellentes compétences en communication, une faculté constante à tenir les délais et même à en dépasser les attentes, Marc sera un très grand atout pour n'importe quelle entreprise.</p>
                        <p class="body-link-white">—Donna Noma, Coordinatrice de Faculté et de Programme - Collège Seneca</p>
                    </div> <!-- Fin de .border-custom -->
                </div> <!-- Fin de .carousel-item Donna -->
            </div> <!-- Fin de .carousel-inner -->

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> <!-- Fin de .carousel slide -->
    </div> <!-- Fin de .row -->

<?php } elseif ($page === "contacter") { ?>
<!-- ================================================ 
                    CONTACTER
================================================= -->
    <div class="row container d-flex justify-content-around mx-auto my-5 py-4 fade-in slide-in from-left">
        <div class="col-12 col-md-8 border-inside bg-section my-5">
            <section class="text-center mt-5">
                <h2 class="body-link-white h4">N'hésitez pas à me contacter si vous avez la moindre question :</h2>
            </section> <!-- Fin de .text-center -->

            <section class="text-center mt-5 mb-3">
                <h3 class="accent-color"><i class="fas fa-phone-alt"></i><a href="tel:647-707-1979" class="phone"> 647-707-1979</a></h3>
            </section> <!-- Fin de .text-center phone -->

            <div class="text-center mt-3 mb-5">
                <span class="h4 body-link-no-underline"><i class="far fa-paper-plane accent-color h5"></i> <a class="email" data-email="marcdotbobinathotmaildotcom"></a></span>
            </div> <!-- Fin de .text-center email -->
        </div> <!-- Fin de .col-12 -->
    </div> <!-- Fin de .row -->

<?php } else { ?>
<!-- ================================================ 
                    ERROR
================================================= -->
    <div id="my-logo" class="container text-center my-5 mx-auto fade-in slide-in from-right">
        <img src="img/mb-dd-dark-bg.png" alt="MB written in a dark blue color on a white background amd websites written in a white color on a dark blue background" width="800" height="100" class="img-fluid mt-5 custom-shadow">
    </div> <!-- Fin de #my-logo -->

    <section id="my-tagline" class="text-center mb-5 mx-auto fade-in slide-in from-left">
        <h2 class="h1 py-5"><span>Désolé, cette page n'existe pas!</span></h2>
    </section> <!-- End of #my-tagline -->

<?php } ?>

</main>

<?php require_once 'templates/footer_fr.tpl.php'?>
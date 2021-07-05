<!-- Set the page to home -->
<?php if (!isset($_GET["page"])) {
    $page = "home";
} else {
    $page = $_GET['page'];
} ?>

<?php require_once 'templates/header_en.tpl.php'?>

<main class="view-height my-5">

<?php if ($page === "home") { ?>
<!-- ================================================ 
                    HOME
================================================= -->
    <div id="my-logo" class="container row col-12 col-md-9 col-xl-7 text-center my-5 mx-auto fade-in">
        <img src="img/mb-dd-dark-bg.png" alt="Marc Bobin D&D written in white color on a dark background" class="img-fluid border-inside px-0">
        <h2 class="my-tagline h6 mt-3"><i class="fas fa-grip-lines"></i> Design & Development <i class="fas fa-grip-lines"></i></h2>
    </div> <!-- End of #my-logo -->

    <div class="container row d-flex justify-content-center align-items-center mx-auto fade-in">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 h5 bg-section border-inside py-3 mb-0">
            <div class="d-flex justify-content-center portrait fade-in slide-in from-right">
                <img src="img/marc-square.jpg" alt="portrait of Marc" class="img-fluid border-white border rounded-3 shadow-white">
            </div>
            <div class="fade-in slide-in from-left">
                <p>Hi there,</p>
                <p>I'm Marc, a Front End Web Designer and Developer, graduated with high honours from the Seneca College Web Design and Development Program.</p>
                <p>Bilingual (French and English), passionate, and very organized, I traveled into different fields in my professional life that contributed to build the creative person I am today.</p>
                <p>If you need a website for your activity, or just a showcase for your passion, feel free to <a href="index.php?page=contact" class="body-link-white">contact</a> me with any question you may have.</p>
            </div>
        </div>
    </div>

<?php } elseif ($page === "about") { ?>
<!-- ================================================ 
                    ABOUT
================================================= -->
    <div class="col-12 my-5 text-center">
        <h2 class="pb-3">From Baking to Web Development</h2>
    </div> <!-- End of .col-12 -->

    <div class="timeline">
        <!-- YEAR 2021 -->
        <div class="timeline-container left fade-in slide-in from-left">
            <div class="content bg-section border-inside rounded-3">
                <h3 class="accent-color year mt-0"><span class="border border-white rounded-3 px-3">2021</span></h3>
                <p><strong>Graduated with the High Honours</strong> from Seneca College!</p>
                <p>Currently learning React JS, Angular JS and TypeScript.</p>
            </div>
        </div>
        <!-- END OF YEAR 2021 -->

        <!-- YEAR 2018 -->
        <article class="timeline-container right fade-in slide-in from-right">
            <div class="content rounded bg-section">
                <h3 class="accent-color mt-0"><span class="border border-white rounded-3 px-3">2018</span></h3>
                <p>I moved to Toronto.</p>
                <p>The pandemic has changed the world we are living in and I felt I needed to adapt to this new world.</p>
                <p>Therefor I decided to go back to school to learn what I now call my passion: Web Development at the Seneca College, where <strong>I graduated with the High Honours</strong>.</p>
            </div>
        </article>
        <!-- END OF YEAR 2018 -->

        <!-- YEAR 2012 -->
        <div class="timeline-container left fade-in slide-in from-left">
            <div class="content rounded bg-section">
                <h3 class="accent-color year mt-0"><span class="border border-white rounded-3 px-3">2012</span></h3>
                <p>Back to France and back to the Public Service, in the cultural office.<br>
                To be part of a team that organizes cultural events was one of the best experience in my professional life.</p>
                <p>Meeting artists, famous or not, and being able to see all kind of show, concert, play, and witnessing the audience's reaction is absolutely fulfilling.<br>
                <strong>Human's creation can be beautiful</strong> and is necessary.</p>
            </div>
        </div>
        <!-- END OF YEAR 2012 -->

        <!-- YEAR 2010 -->
        <div class="timeline-container right fade-in slide-in from-right">
            <div class="content rounded bg-section">
                <h3 class="accent-color mt-0"><span class="border border-white rounded-3 px-3">2010</span></h3>
                <p>I moved to Italy and lived the "Dolce Vita" for a year and a half.</p>
                <p>This experience showed me another culture, and this is where I discover <strong>I liked the architecture</strong>.<br>
                I could stand in front of a huge ancient building and see how great it was that men could create such a structure, which is still standing today.</p>
            </div>
        </div>
        <!-- END OF YEAR 2010 -->

        <!-- YEAR 2005 -->
        <div class="timeline-container left fade-in slide-in from-left">
            <div class="content rounded bg-section">
                <h3 class="accent-color year mt-0"><span class="border border-white rounded-3 px-3">2005</span></h3>
                <p>After receiving a massage, I felt the need to explore Ayurvedic massages (relaxing and therapeutic Indian massage). I followed a training, obtained a certificate and started practicing on the side.</p>
                <p>When you give a massage, you need to <strong>read and to listen to the other</strong>'s energy. You create a relationship, you give and you receive.</p>
            </div>
        </div>
        <!-- END OF YEAR 2005 -->

        <!-- YEAR 1995 -->
        <div class="timeline-container right fade-in slide-in from-right">
            <div class="content rounded bg-section">
                <h3 class="accent-color mt-0"><span class="border border-white rounded-3 px-3">1995</span></h3>
                <p>Back to school in the administration field.</p>
                <p>After an internship in a City Hall and once I got my diploma, I found a position in the French Public Service and worked there for the most of my life (18 years).</p>
                <p>With this experience, I have acquired very <strong>strong organizational skills</strong>.</p>
            </div>
        </div>
        <!-- END OF YEAR 1995 -->

        <!-- YEAR 1993 -->
        <div class="timeline-container left fade-in slide-in from-left">
            <div class="content rounded bg-section">
                <h3 class="accent-color year mt-0"><span class="border border-white rounded-3 px-3">1993</span></h3>
                <p>I started my professional life at 14 with a baking training. This two-year program brought me my first work experience.</p>
                <p>It gave me this <strong>first feeling of creation</strong>. It is beautiful to have something in mind, thinking of how and what to do to create it, take the time, try again and again and finally see the result.</p>
            </div>
        </div>
        <!-- END OF YEAR 1993 -->
    </div> <!-- End of .Timeline -->


<?php } elseif ($page === "skills") { ?>
<!-- ================================================ 
                    SKILLS
================================================= -->
    <!-- SENECA COLLEGE -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 text-center fade-in slide-in from-left">

        <h2 class="h3"><i class="fas fa-certificate"></i> Graduated with <strong>"High Honours"</strong> from the <a href="https://webmaster.senecacollege.ca/" rel="external" target="blank"><span class="body-link text-color">Seneca Webmaster Program</span></a></h2>
        <hr>

        <div class="col-7 col-sm-5 col-md-3 col-lg-2 text-center mb-5 py-3 bg-section border-inside">
            <span class="h4">HTML</span><br>
            <span class="accent-color h2"><i class="fab fa-html5 text-center"></i></span>
        </div> <!-- End of .col-8 HTML -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
            <span class="h4">CSS</span><br>
            <span class="accent-color h2"><i class="fab fa-css3 text-center"></i></span>
        </div> <!-- End of .col-8 CSS -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fab fa-js-square text-center"></i></span><br>
            <span class="h4">JavaScript</span> 
        </div> <!-- End of .col-8 JS -->

        <div class="col-7 col-sm-5 col-md-3 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
            <span class="h2"><img src="img/jQuery-red.png" alt="jQuery logo" width="25" height="25" class="mb-1"></span><br>
            <span class="h4">jQuery</span>
        </div> <!-- End of .col-8 jQuery -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 offset-lg-0 col-lg-2 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fab fa-bootstrap"></i></span><br>
            <span class="h4">Bootstrap</span>
        </div> <!-- End of .col-8 bootstrap -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fab fa-sass"></i></span><br>
            <span class="h4">Sass</span>
        </div> <!-- End of .col-8 sass -->

        <div class="col-7 col-sm-5 col-md-3 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fab fa-wordpress"></i></span><br>
            <span class="h4">WordPress</span>
        </div> <!-- End of .col-8 wordpress -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-2 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fab fa-php"></i></span><br>
            <span class="h4">PHP</span>
        </div> <!-- End of .col-8 php -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 offset-lg-0 col-lg-2 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fas fa-mobile-alt"></i></span><br>
            <span class="h4">Responsive</span>
        </div> <!-- End of .col-8 responsive -->

        <div class="col-7 col-sm-5 col-md-3 col-lg-2 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fas fa-low-vision"></i></span><br>
            <span class="h4 accessibility">Accessibility</span>
        </div> <!-- End of .col-8 accessibility -->

    </section> <!-- End of .row -->
    <!-- END OF SENECA COLLEGE -->

    <!-- CURRENT PROGRAMS -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 text-center fade-in slide-in from-right">

        <h2 class="h3"><i class="fas fa-laptop-code"></i> Programs that I am currently learning
        <!-- at <a href="https://www.senecacollege.ca/ce/technology/application-development/web-programming-development.html#Curriculum" rel="external" target="blank"><span class="body-link text-color">Seneca College</span></a> -->
        </h2>
        <hr>

        <div class="col-7 col-sm-5 col-md-3 col-lg-3 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fab fa-react"></i></span><br>
            <span class="h4">React JS</span>
        </div> <!-- End of .col-8 react -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-3 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fab fa-angular"></i></span><br>
            <span class="h4">Angular JS</span>
        </div> <!-- End of .col-8 angular -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-3 border-inside text-center mb-5 py-3 bg-section">
            <span class="h2"><img src="img/typescript-red.png" alt="a T an a S representing the typescript logo" width="25" height="25" class="mb-1"></span><br>
            <span class="h4">TypeScript</span>
        </div> <!-- End of .col-8 typescript -->

    </section> <!-- End of .row -->
    <!-- END OF CURRENT PROGRAMS -->

    <!-- OTHER -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 text-center fade-in slide-in from-left">

        <h2 class="h3"><i class="fas fa-tasks"></i> Other</h2>
        <hr>

        <div class="col-7 col-sm-5 col-md-3 col-lg-3 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fas fa-globe-americas"></i></span><br>
            <span class="h4">Bilingual</span>
        </div> <!-- End of .col-8 bilingual -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-3 offset-lg-1 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="far fa-folder-open"></i></span><br>
            <span class="h4">Organization</span>
        </div> <!-- End of .col-8 organizational skills -->

        <div class="col-7 col-sm-5 col-md-3 offset-md-1 col-lg-3 border-inside text-center mb-5 py-3 bg-section">
            <span class="accent-color h2"><i class="fas fa-file-contract"></i></span><br>
            <span class="h4">Project Management</span>
        </div> <!-- End of .col-8 Project Management -->

    </section> <!-- End of .row -->
    <!-- END OF OTHER -->


<?php } elseif ($page === "portfolio") { ?>
<!-- ================================================ 
                    PORTFOLIO
================================================= -->
    <!-- CLIENT RELATED -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 fade-in slide-in from-left">
        <h2 class="h2 text-center"><i class="fas fa-laptop-house"></i> Client related</h2>
        <hr>
        <article class="col-12 col-md-5 col-lg-3 bg-section border-inside mb-5">
            <a href="https://www.marcbobin.com/" rel="internal" target="blank">
            <img src="img/works/mb-dd.jpg" alt="a screen shot of Marc Bobin D&D's website" height="100" class="img-fluid mt-3 border border-white rounded-3"></a>

            <h3 class="text-center accent-color">Marc Bobin | D&D <br> (php Website)</h3>
            <p>I have created <a href="https://www.marcbobin.com/" rel="internal" target="blank"><span  class="body-link-white">Marc Bobin | D&D </span></a> with php as a single page website with multi-page feeling. I have used templates for the header and footer, I have dynamically output the date for the copyright, and the headings in the header depending on what page is clicked on.</p>
            <p>I used Sass to work easily with variables for my colours and sizes.</p>
            <p>Bootstrap was used to help me build a responsive website faster, but I have created the burger menu by myself.</p>
            <p>Lastly, I used JavaScript for my animations and to hide my email address from the source page.</p>
        </article> <!-- End of .col-12 MB Websites -->

        <article class="col-12 col-md-5 offset-md-1 col-lg-3 offset-lg-1 bg-section border-inside mb-5">
            <a href="https://www.caitlinmcneilpsychotherapy.com/" rel="external" target="blank"><img src="img/works/caitlin.jpg" alt="a screen shot of caitlin mcneil therapist's website" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Caitlin McNeil - Therapist</h3>
            <p><a href="https://www.caitlinmcneilpsychotherapy.com/" rel="external" target="blank"><span class="body-link-white">Cailtin McNeil</span></a> was my client during my <a href="https://webmaster.senecacollege.ca/" rel="external" target="blank"><span class="body-link-white">Webmaster Program at Seneca College</span></a>.</p>
            <p>She is a social worker in Ontario and needed a website to attract new customers for her private practice, and to be a place to refer her colleagues to.</p>
            <p>She wanted her website to have a calming and relaxing feeling and wanted to show pictures of landscapes of Scotland.</p>
            <p>I built this website from scratch, using HTML, CSS, Bootstrap and JavaScript/jQuery.<br>
            php was also used for the form validation.</p>
            <p>It was such a great pleasure to work with Caitlin.</p>
        </article> <!-- End of .col-12 Caitlin McNeil-->

        <article class="col-12 col-md-5 col-lg-3 offset-lg-1 bg-section border-inside mb-5">
            <a href="portal" rel="external" target="blank"><img src="img/works/portal.jpg" alt="a screen shot of caitlin mcneil therapist's portal" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Client Portal</h3>
            <p>During this project client, I was asked to create a <a href="portal" rel="external" target="blank"><span class="body-link-white">client portal</span></a> where my client was able to connect and see her website's progress.</p>
            <p>I had to create a progress bar and I got this idea of slowly revealing this picture of two hands reaching each other. One of my instructor helped me find a solution to make this idea reality.</p>
            <p>The client had access to all the documents such as the outcome of meetings (the actual documents have been removed), the proposal (some information about this proposal is fictitious), the wireframes and mockups, and the prototypes of her website.</p>
        </article> <!-- End of .col-12 Caitlin McNeil-->
    </section> <!-- End of .col-12 Client Related -->
    <!-- END OF CLIENT RELATED -->

    <!-- SCHOOL RELATED -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 fade-in slide-in from-right">
        <h2 class="h2 text-center"><i class="fas fa-university"></i> School related</h2>
        <hr>
        <article class="col-12 col-md-5 col-lg-4 bg-section border-inside mb-5">
            <a href="chez-martine" rel="external" target="blank"><img src="img/works/martine.jpg" alt="a screen shot of chew martine's website" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Good Planning Leads to Good Design</h3>
            <p>One of the <a href="chez-martine" rel="external" target="blank"><span class="body-link-white">assignments</span></a> during my program was to build a website from scratch for a fictitious/pretend client with a small business, with an original design. I chose a French Bakery theme.</p>
            <p>The particularity with this assignment was that it was the first time we had to see the other side of being a web developer.</p>
            <p>I did a Research, Benchmark and Analysis of the French Bakery Market in Toronto, and a Design Rationale to help with design decisions.</p>
            <p>I loved doing this assignment, and I am happy with the final look.</p>
            <p>I received a 93% grade for this work.</p>
        </article> <!-- End of .col-12 Chez Martine -->

        <article class="col-12 col-md-5 offset-md-1 col-lg-4 offset-lg-1 bg-section border-inside mb-5">
            <a href="glove-actually" rel="external" target="blank"><img src="img/works/glove.jpg" alt="a screen shot of glove actually's website" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">It’s Glove, Actually (php assignment)</h3>
            <p>For this final <a href="glove-actually" rel="external" target="blank"><span class="body-link-white">assignment</span></a> of the program, my task was to review the supplied files (HTML and CSS codes) and develop a DRY solution that uses php for all logic and processing.</p>
            <p>The finished website had to maintain its existing aesthetic whilst satisfying the following requirements:</p>
                <ul>
                    <li>dynamically output content by using an array</li>
                    <li>create a function for the current year and dynamically output it</li>
                    <li>dynamically output the banner, the title and the lead text</li>
                    <li>template the header and footer</li>
                    <li>single-page site with multi-page feel by using the $_GET superglobal and flow control</li>
                    <li>harvest user's email address with the $_POST global</li>
                </ul>
            <p>I really enjoyed this assignment and obtained a 100% grade for this work, which I am very proud of.</p>
        </article> <!-- End of .col-12 Glove actually -->
    </section> <!-- End of .col-12 School Related -->
    <!-- END OF SCHOOL RELATED -->

    <!-- PHOTOSHOP -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 fade-in slide-in from-left">
        <h2 class="h2 text-center"><i class="fas fa-paint-brush"></i> Photoshop</h2>
        <hr>
        <article class="col-12 col-md-5 col-lg-4 bg-section border-inside mb-5">
            <a href="img/works/graphic_design/dracula.jpg" rel="internal" target="blank"><img src="img/works/graphic_design/dracula-small.jpg" alt="dracula in his red robe hiding his face with his hands" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Movie Poster</h3>
            <p>I love Photoshop, and when I read about this <a href="img/works/graphic_design/dracula.jpg" rel="internal" target="blank"><span class="body-link-white">assignment</span></a>, I was very excited!</p>
            <p>Francis Ford Coppola's Dracula is one of my favorite movies and it was natural to choose it, as I thought the theme would suit very well the purpose of the assignment.</p>
            <p>I was asked to create a poster of a movie of my choice, using all the Photoshop technics I have learned in class, such as blending images, the selection tool to get rid of a background or replace an element with the content aware, etc.</p>
            
            <p>I was asked to use a minimum of 5 images and to add a tagline, the names of the actors and all the necessary credits.</p>
            <p>I received a 98% grade for this poster.</p>
        </article> <!-- End of .col-12 Poster -->

        <article class="col-12 col-md-5 offset-md-1 col-lg-4 offset-lg-1 bg-section border-inside mb-5">
            <a href="img/works/graphic_design/mockups-1.3.jpg" rel="internal" target="blank"><img src="img/works/graphic_design/mockup-small.jpg" alt="a screen shot of caitlin mcneil therapist website's mockup" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Client Mockups</h3>
            <p>During this program, we have learnt the importance of <a href="img/works/graphic_design/mockups-1.3.jpg" rel="internal" target="blank"><span class="body-link-white">mockups</span></a> in the process of the creation of a website.</p>
            <p>As I said, I love Photoshop and, again, it was a pleasure to work on my client's mockups.</p>
            <p>I was asked to organize all the layers with best practices, to select a font that suits my client's field, to create a simple logo, and to create a single website page based on this mockup.</p>
            <p>This is the last one I have made, the one that my client chose, and the one I used to create her website.</p>
            <p>I was graded 96% for this assignment.</p>
        </article> <!-- End of .col-12 Mockups-->
    </section>
    <!-- END OF PHOTOSHOP -->

    <!-- LOGOS -->
    <section class="container row d-flex justify-content-around mx-auto mt-5 fade-in slide-in from-right">
        <h2 class="h2 text-center"><i class="far fa-edit"></i> Logos</h2>
        <hr>
        <article class="col-12 col-md-5 col-lg-3 bg-section border-inside mb-5">
            <a href="img/mb-dd-dark-bg.png" rel="internal" target="blank"><img src="img/works/graphic_design/mb-dd-dark-bg.jpg" alt="Marc Bobin D&D written in white color on a dark background" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">MB Websites</h3>
            <p>For my own website, I wanted a simple <a href="img/mb-dd-dark-bg.png" rel="internal" target="blank"><span class="body-link-white">logo</span></a>.</p>
            <p>I used Adobe Illustrator and used the colour theme of the website.</p>
        </article> <!-- End of .col-12 MB Websites -->

        <article class="col-12 col-md-5 offset-md-1 col-lg-3 bg-section offset-lg-1 border-inside mb-5">
            <a href="img/works/graphic_design/caitlin-logo.svg" rel="internal" target="blank"><img src="img/works/graphic_design/caitlin-logo.jpg" alt="caitlin mcneil written in white on a dark gray background and therapist underneath written the opposite way" height="30" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Caitlin McNeil</h3>
            <p>This is the simple <a href="img/works/graphic_design/caitlin-logo.svg" rel="internal" target="blank"><span class="body-link-white">logo</span></a> I created for my client's mockup assignment, using Adobe Illustrator.</p>
            <p>My client thought it suited well the general feeling of the website and decided to keep it!</p>
        </article> <!-- End of .col-12 Caitlin McNeil-->

        <article class="col-12 col-md-5 col-lg-3 bg-section offset-lg-1 border-inside mb-5">
            <a href="img/works/graphic_design/martine-logo.png" rel="internal" target="blank"><img src="img/works/graphic_design/martine-logo.jpg" alt="chez martine written with an eiffel tower replacing the a" height="100" class="img-fluid border border-white rounded-3 mt-3"></a>

            <h3 class="text-center accent-color">Chez Martine - French Bakery</h3>
            <p>This <a href="img/works/graphic_design/martine-logo.png" rel="internal" target="blank"><span class="body-link-white">logo</span></a> was created for one of my assignments, using Adobe Photoshop.</p>
            <p>With this logo, I tried to incorporate the feeling of a French Bakery, as we can find in Paris.</p>
        </article> <!-- End of .col-12 Chez Martine-->
    </section> <!-- End of .col-12 Logos -->
    <!-- END OF LOGOS -->

<?php } elseif ($page === "testimonials") { ?>
<!-- ================================================ 
                    TESTIMONIALS
================================================= -->
    <div class="container row d-flex justify-content-around mx-auto my-5 fade-in slide-in from-left">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active py-5">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border-inside bg-section p-5">
                        <p>"Working with Marc has been a pure joy, he is dedicated, attentive and has a truly fantastic eye for detail. Marc listened carefully to everything I asked for and was so helpful in providing advice, guidance and making such considerate and thoughtful choices.
                        <br><br>
                        He has created an absolutely beautiful website and I feel so incredibly lucky to have had the opportunity to work with him; I really cannot sing his praises highly enough!
                        <br><br>
                        Thank you so much for this wonderful opportunity."</p>
                        <p class="body-link-white">—Caitlin McNeil, Therapist</p>
                    </div> <!-- End of .border-custom -->
                </div> <!-- End of .carousel Caitlin -->

                <div class="carousel-item py-5">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border-inside bg-section p-5">
                        <p>"Marc was a truly exceptional student in our Webmaster program. He excelled in all aspects of the program, showing a real aptitude for coding and website development.
                        <br><br>
                        Extremely organized with an amazing eye for detail, excellent communication skills and an ability to consistently meet deadlines and exceed expectations, Marc would be a tremendous asset for any company."</p>
                        <p class="body-link-white">—Donna Noma, Faculty and Program Coordinator - Seneca College</p>
                    </div> <!-- End of .border-custom-->
                </div> <!-- End of .carousel-item Donna-->
            </div> <!-- End of .carousel-inner -->
    
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> <!-- End of .carousel slide -->  
    </div> <!-- End of .row -->

<?php } elseif ($page === "contact") { ?>
<!-- ================================================ 
                    CONTACT
================================================= -->
    <div class="row container d-flex justify-content-around mx-auto my-5 py-4 fade-in slide-in from-left">
        <div class="col-12 col-md-8 border-inside bg-section my-5">
            <section class="text-center mt-5">
                <h2 class="body-link-white h4">Feel free to contact me with any question you may have:</h2>
            </section> <!-- End of .text-center -->

            <section class="text-center mt-5 mb-3">
                <h3 class="accent-color"><i class="fas fa-phone-alt h5"></i> <a href="tel:647-707-1979" class="phone">647-707-1979</a></h3>
            </section> <!-- End of .text-center phone -->

            <div class="text-center mt-3 mb-5">
                <span class="h4 body-link-no-underline"><i class="far fa-paper-plane accent-color h5"></i> <a class="email" data-email="marcdotbobinathotmaildotcom"></a></span>
            </div> <!-- End of .text-center email -->
        </div> <!-- End of .col-12 -->
    </div> <!-- End of .row -->


<?php } else { ?>
<!-- ================================================ 
                    ERROR
================================================= -->
    <div id="my-logo" class="container text-center my-5 mx-auto fade-in slide-in from-right">
        <img src="img/mb-dd-dark-bg.png" alt="MB written in a dark blue color on a white background amd websites written in a white color on a dark blue background" width="800" height="100" class="img-fluid mt-5 custom-shadow">
    </div> <!-- End of #my-logo -->

    <section id="my-tagline" class="text-center mb-5 mx-auto fade-in slide-in from-left">
        <h2 class="h1 py-5"><span>Sorry, this page does not exist!</span></h2>
    </section> <!-- End of #my-tagline -->

<?php } ?>

</main>

<?php require_once 'templates/footer_en.tpl.php'?>
<!-- "4". Here I am telling that if the page is not set up, the user will go on the arrivals page -->
<?php if (!isset($_GET["page"])) {
    $page = "arrivals";
    // "4". and if the page is set up, the user will go on the related page as follows
} else {
    $page = $_GET['page'];
} ?>

<!-- "3". I am asking the header template to show at the top of the index.php page. As the header will show only once, I use require_once  -->
<?php require_once 'templates/header.tpl.php'; ?>

<!-- 1. Look at the functions.inc.php and at the footer.tpl.php -->
<!-- 2. Look at the header.tpl.php -->
<!-- 3. Look at the templates' folder and below -->
<!-- 4. Look at the header.tpl.php and below   -->
<!-- 5. Look below -->
<!-- 6. Look at the footer.tpl.php and at the process-form.inc.php -->

<!-- NEW ARRIVALS BEGINS -->
<!-- "4". Here I am setting up the page to be the 'arrivals page' and show this specific content when it's clicked on -->
<?php if ($page === "arrivals") {

    // "5". I've created an associative array to store the information of the new arrivals items
    $new_arrivals = [
            [
                'img_src' => 'img/product-medium/cn19017427.jpg',
                'img_alt' => 'Juliet gloves',
                'item_title' => 'Juliet',
                'item_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique.',
                'item_link' => 'More about Juliet&#8230;',
                'item_price' => '$12.99'
            ],
            [
                'img_src' => 'img/product-medium/cn19250301.jpg',
                'img_alt' => 'Peter gloves',
                'item_title' => 'Peter',
                'item_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique.',
                'item_link' => 'More about Peter&#8230;',
                'item_price' => '$10.99'
            ],
            [
                'img_src' => 'img/product-medium/cn19264775.jpg',
                'img_alt' => 'Mark gloves',
                'item_title' => 'Mark',
                'item_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique.',
                'item_link' => 'More about Mark&#8230;',
                'item_price' => '$14.99'
            ]
            // "5". If we want to add new items, we do it here with the same syntax as above, and it will be added into the foreach loop below
    ];

?>
    <div class="container">
        <div class="row-fixed u-pad-y-3x">
            <div class="col col-1-1-sm">
                <h2 class="u-text-center c-line-b-sm c-line-red">New Arrivals</h2>
            </div>

        <!-- New Arrival -->
        <!-- "5". The HTML div will be written only once and the foreach loop will run and add this div as many time as there are item in the array above. -->
        <?php foreach ($new_arrivals as $new_arrival){ ?>
            <div class="col col-1-2-md col-1-3-lg u-text-center">
                <img class="c-img-headshot" src="<?php echo $new_arrival['img_src']; ?>" alt="<?php echo $new_arrival['img_alt']; ?>">
                <h3><?php echo $new_arrival['item_title']; ?></h3>
                <p><?php echo $new_arrival['item_text']; ?>
                <a href="#" class="c-product-more"><?php echo $new_arrival['item_link']; ?></a></p>
                <p class="c-product-price"><?php echo $new_arrival['item_price']; ?></p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div> 
        <?php } ?>

        </div> <!-- /row-fixed -->
    </div> <!-- /container -->
    <!-- NEW ARRIVALS ENDS -->


<!-- SHOP BEGINS -->
<!-- "4". Here I am setting up the page to be the 'shop page' and show this specific content when it's clicked on -->
<?php } elseif ($page === "shop") { ?>

    
    <div class="container">
        <div class="row-fixed u-pad-y-3x">
            <div class="col col-1-1-sm">
                <h2 class="u-text-center c-line-b-sm c-line-red">Shop</h2>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19243103.jpg" alt="Billy gloves">
                <h4>Billy</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Billy&#8230;</a></p>
                <p class="c-product-price">$11.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19243108.jpg" alt="Joe gloves">
                <h4>Joe</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Joe&#8230;</a></p>
                <p class="c-product-price">$9.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19243141.jpg" alt="Jamie gloves">
                <h4>Jamie</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Jamie&#8230;</a></p>
                <p class="c-product-price">$12.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19245162.jpg" alt="Aurélia gloves">
                <h4>Aurélia</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Aurélia&#8230;</a></p>
                <p class="c-product-price">$10.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19245236.jpg" alt="Harry gloves">
                <h4>Harry</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Harry&#8230;</a></p>
                <p class="c-product-price">$9.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19245248.jpg" alt="Karen gloves">
                <h4>Karen</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Karen&#8230;</a></p>
                <p class="c-product-price">$12.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19251384.jpg" alt="Mia gloves">
                <h4>Mia</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Mia&#8230;</a></p>
                <p class="c-product-price">$12.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19264731.jpg" alt="David gloves">
                <h4>David</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about David&#8230;</a></p>
                <p class="c-product-price">$10.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19264742.jpg" alt="Natalie gloves">
                <h4>Natalie</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Natalie&#8230;</a></p>
                <p class="c-product-price">$11.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19473829.jpg" alt="Daniel gloves">
                <h4>Daniel</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Daniel&#8230;</a></p>
                <p class="c-product-price">$12.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19582978.jpg" alt="Sam gloves">
                <h4>Sam</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Sam&#8230;</a></p>
                <p class="c-product-price">$10.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
            <div class="col col-1-3-md col-1-4-lg u-text-center u-mar-b-1x">
                <img class="c-img-headshot" src="img/product-small/cn19666012.jpg" alt="Joanna gloves">
                <h4>Joanna</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="c-product-more">More about Joanna&#8230;</a></p>
                <p class="c-product-price">$11.99</p>
                <a href="#" class="c-btn c-btn-submit">Add to cart</a>
            </div>
        </div> <!-- /row-fixed -->
    </div> <!-- /container -->
    <!-- SHOP ENDS -->


    <!-- BLOG BEGINS -->
    <!-- "4". Here I am setting up the page to be the 'blog page' and show this specific content when it's clicked on -->
<?php } elseif ($page === "blog") { ?>      
    
    <div class="container">
        <div class="row-fixed u-pad-y-3x">
            <div class="col col-1-1-sm">
                <h2 class="u-text-center c-line-b-sm c-line-red">Blog</h2>
            </div>
            <div class="col col-1-2-md col-1-3-lg u-mar-t-2x">
                <div class="c-img-aperture-md c-img-rounded">
                <img class="" src="img/blog-posts/blog-post-one.jpg" alt="Blog post one image">
                </div>
                <h3 class="c-line-b-sm u-mar-t-1x">Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique? Alias nobis, reiciendis vitae at, dolorum ad
                est. Sunt fugit praesentium laborum, eius officiis similique aliquid quas&#8230;</p>
                <p class="c-blog-date-published">Published <span>June 1, 1979</span></p>
            </div>
            <div class="col col-1-2-md col-1-3-lg u-mar-t-2x">
                <div class="c-img-aperture-md c-img-rounded">
                <img class="" src="img/blog-posts/blog-post-two.jpg" alt="Blog post two image">
                </div>
                <h3 class="c-line-b-sm u-mar-t-1x">Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique? Alias nobis, reiciendis vitae at, dolorum ad
                est. Sunt fugit praesentium laborum, eius officiis similique aliquid quas&#8230;</p>
                <p class="c-blog-date-published">Published <span>June 1, 1979</span></p>
            </div>
            <div class="col col-1-2-md col-1-3-lg u-mar-t-2x">
                <div class="c-img-aperture-md c-img-rounded">
                <img class="" src="img/blog-posts/blog-post-three.jpg" alt="Blog post three image">
                </div>
                <h3 class="c-line-b-sm u-mar-t-1x">Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique? Alias nobis, reiciendis vitae at, dolorum ad
                est. Sunt fugit praesentium laborum, eius officiis similique aliquid quas&#8230;</p>
                <p class="c-blog-date-published">Published <span>June 1, 1979</span></p>
            </div>
            <div class="col col-1-2-md col-1-3-lg u-mar-t-2x">
                <div class="c-img-aperture-md c-img-rounded">
                <img class="" src="img/blog-posts/blog-post-six.jpg" alt="Blog post six image">
                </div>
                <h3 class="c-line-b-sm u-mar-t-1x">Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique? Alias nobis, reiciendis vitae at, dolorum ad
                est. Sunt fugit praesentium laborum, eius officiis similique aliquid quas&#8230;</p>
                <p class="c-blog-date-published">Published <span>June 1, 1979</span></p>
            </div>
            <div class="col col-1-2-md col-1-3-lg u-mar-t-2x">
                <div class="c-img-aperture-md c-img-rounded">
                <img class="" src="img/blog-posts/blog-post-five.jpg" alt="Blog post five image">
                </div>
                <h3 class="c-line-b-sm u-mar-t-1x">Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique? Alias nobis, reiciendis vitae at, dolorum ad
                est. Sunt fugit praesentium laborum, eius officiis similique aliquid quas&#8230;</p>
                <p class="c-blog-date-published">Published <span>June 1, 1979</span></p>
            </div>
            <div class="col col-1-2-md col-1-3-lg u-mar-t-2x">
                <div class="c-img-aperture-md c-img-rounded">
                <img class="" src="img/blog-posts/blog-post-four.jpg" alt="Blog post four image">
                </div>
                <h3 class="c-line-b-sm u-mar-t-1x">Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis beatae
                dignissimos excepturi similique? Alias nobis, reiciendis vitae at, dolorum ad
                est. Sunt fugit praesentium laborum, eius officiis similique aliquid quas&#8230;</p>
                <p class="c-blog-date-published">Published <span>June 1, 1979</span></p>
            </div>
        </div> <!-- /row-fixed -->
    </div> <!-- /container -->
    <!-- BLOG ENDS -->

<!-- "4". In this last part, I am setting up an error message in case if a wrong page name or no page name is written, using 'else' meaning that everything else different than above cases will run the code below -->
<?php } else { ?>

    <div class="container">
    <div class="row-fixed u-pad-y-3x">
        <div class="col col-1-1-sm">
            <h2 class="u-text-center c-line-b-sm c-line-red">Ooooopps!</h2>
        </div>
        <div class="col col-1-1-sm u-text-center u-mar-t-2x">
            <div class="Here I am setting up the page to be the c-img-rounded">
            <img class="" src="img/cleaning-gloves.jpg" width="225" height="225" alt="black cleaning gloves">
            </div>
            <h3 class="c-line-b-sm u-mar-t-1x">It looks like these gloves don't exist!</h3>
            <p>You should try to click on one of our page in the menu.</p>
        </div>
        
    </div> <!-- /row-fixed -->
    </div> <!-- /container -->
<?php } ?>

<!-- "3". I am asking the footer template to show at the bottom of the index.php page. As the footer will show only once, I use require_once -->
<?php require_once 'templates/footer.tpl.php'; ?>
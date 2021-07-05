<!-- FOOTER BEGINS -->

<footer class="container u-bg-dark-gray u-text-light-gray">
    <div class="row-fixed u-pad-y-1x">
        <div class="col col-1-1-sm col-2-4-md col-2-4-lg u-mar-y-1x">

        <!-- "6". I am now asking if the email in the POST is set, then run the code below ... -->
        <?php if (isset($_POST['email'])) { ?>

            <h2 class="h5" id="subscribeAndSave">Subscribe and SAVE 30%</h2>
            <p>Thank you for registering for our monthly newsletter. We will email your 30% discount code to the following address:</p>
            <!-- "6". I am echoing the email address that has been store in the $_POST associative array. For this I am using the $_POST superglobal -->
            <span class="h5"><?php echo $_POST['email']; ?></span>

        <!-- ... and if it's not, then leave the following code (this part doesn't work anymore since I put this if statement and I can't find a way to fixe it) -->
        <?php } else { ?>

            <h2 class="h5" id="subscribeAndSave">Subscribe and SAVE 30%</h2>
            <p>Sign up for our monthly newsletter and receive a one-time discount of 30% on your next online or in-store purchase.</p>

            <!-- FORM BEGINS -->
            <form action="index.php#subscribeAndSave" method="POST">
                <input type="text" name="email" value="" placeholder="name@address.com" class="c-input-text">
                <div class="u-mar-t-1x">
                <input type="submit" name="subscribe" value="Subscribe" class="c-btn c-btn-submit">
                </div>
            </form>
            <!-- FORM ENDS -->

        <?php } ?>

        </div>

        <div class="col col-1-2-sm col-1-4-md col-1-4-lg u-mar-y-1x">
            <h2 class="h5">About us</h2>
            <ul class="nav nav-list">
            <li class="nav-list-item">
                <a class="nav-link c-nav-text" href="#">Careers</a>
            </li>
            <li class="nav-list-item">
                <a class="nav-link c-nav-text" href="#">Sustainability</a>
            </li>
            <li class="nav-list-item">
                <a class="nav-link c-nav-text" href="#">Giving back</a>
            </li>
            <li class="nav-list-item">
                <a class="nav-link c-nav-text" href="#">Founding</a>
            </li>
            </ul>
        </div>

        <div class="col col-1-2-sm col-1-4-md col-1-4-lg u-mar-y-1x">
            <h2 class="h5">Customer support</h2>
                <ul class="nav nav-list">
                    <li class="nav-list-item">
                        <a class="nav-link c-nav-text" href="#">Store locator</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-link c-nav-text" href="#">Customer service</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-link c-nav-text" href="#">Shipping</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-link c-nav-text" href="#">Returns</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-link c-nav-text" href="#">Gift cards</a>
                    </li>
                </ul>
            </div>

            <div class="col col-1-1 u-mar-y-1x">
                <p class="c-line-t-sm">
                <!-- "1". The function 'get_current_year' is called here -->
                    <small>Copyright &copy; 1983&#8211;<?php get_current_year() ?> Seneca College. All rights reserved.</small>
                </p>
                <p>
                    <small>Glove Actually is a fictitious brand created by
                    <a href="https://webmaster.senecacollege.ca" target="_blank" class="c-nav-text">Seneca College</a>
                    for the purpose of teaching. All information including products, services and
                    people associated with Glove Actually are also fictitious. Any resemblance to
                    real brands, products, services or people is coincidental. The information
                    presented is not representative of actual products or services on the market.</small>
                </p>
            </div>
    </div> <!-- /row-fixed -->
</footer>
<!-- FOOTER ENDS -->

</body>

</html>
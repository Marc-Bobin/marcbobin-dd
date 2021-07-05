<!-- "1". I am calling the functions.inc.php at the beginning of the header template to allows all the functions written to run on all the pages the header will appear -->
<?php require_once 'includes/functions.inc.php'; ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <title>Glove Actually</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Establish a baseline -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Link to 3rd party assets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700%7cOpen+Sans:300,400,700">
    <!-- Link to our stylesheet -->
    <link rel="stylesheet" href="css/style.min.css">
    <!-- Ask the browser not to store things in the cache -->
    <!-- <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" /> -->
</head>

<!-- "2". I decided to create an associative array to store the title and the lead... -->
<?php
$banner = [
    [
        "title" => "It's Glove, Actually.",
        "lead" => "Fall in glove with our fine selection of Canadian made, handcrafted winter gloves. A pair of gloves from Glove Actually make the perfect holiday gift for your gloved one."
    ]
];
?>

<body>
    <header>
        <!-- NAV BEGINS -->
        <nav class="nav">
            <div class="row-fixed u-overflow-visible">
                <span class="nav-logo">Glove Actually</span>
                <ul class="nav-bar">
                    <li class="nav-item">
                    <!-- "4". Here I am saying that if the page arrivals is clicked on, the class of 'nav-active' will be passed. If it is not clicked, no class will be added -->
                        <a class="nav-link <?php echo $page == 'arrivals' ? 'nav-active' : '' ; ?>" href="?page=arrivals">New arrivals</a>
                    </li>
                    <!-- "4". Here I am saying that if the page shop is clicked on, the class of 'nav-active' will be passed. If it is not clicked, no class will be added -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page == 'shop' ? 'nav-active' : '' ; ?>" href="?page=shop">Shop</a>
                    </li>
                    <!-- "4". Here I am saying that if the page blog is clicked on, the class of 'nav-active' will be passed. If it is not clicked, no class will be added -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page == 'blog' ? 'nav-active' : '' ; ?>" href="?page=blog">Blog</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#subscribeAndSave">Subscribe & Save</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- NAV ENDS -->

        <!-- BANNER BEGINS -->
        <div class="m-banner">
            <div class="row-fixed">
                <div class="col col-3-5-lg">

        <!-- "2". ... and to output them dynamically into the HTML by echoing the needed key where I want it to show -->
                    <!-- BANNER TITLE BEGINS-->
                    <h1 class="d1">
                    <?php echo ($banner[0]["title"])?></h1>
                    <!-- BANNER TITLE ENDS -->

                    <!-- BANNER CAPTION BEGINS -->
                    <p class="intro">
                    <?php echo ($banner[0]["lead"]); ?></p>
                    <!-- BANNER CAPTION ENDS -->

                </div> <!-- End of .col -->
            </div> <!-- End of .row-fixed -->
        </div>
        <!-- BANNER ENDS -->

    </header>
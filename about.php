<?php // PHP Scripting (Database Stuff)
?>
<!DOCTYPE html>
<html>
    <head>
        <title>About | FindAVet PBC</title>
        <!--Sets Meta Tags for SEO (later)-->
        <meta charset="UTF-8">
        <meta name="description" content="FindAVet PBC">
        <meta name="keywords" content="Vet, Find, Palm Beach, County, Palm Beach County, Find a Vet, Find a Vet Palm Beach County, Find a Vet PBC, PBC">
        <meta name="author" content="Michael Castiglia">
        <!--Makes it look good on all devices (everything scales to the width of the screen-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Sets Stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <header>
            <div class="menu"> <!--Makes it easily styleable-->
                <!--Also clickable, can discard checkbox and make menu with this-->
                <label for="menu">
                    <!--For the buttons-->
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <input type="checkbox" id="menu"> <!--Hamburger menu button for mobile (used only for css)-->
            <nav>
                <!--Actual Links for Navigation-->
                <a href="index.php">Home</a>
                <a href="search.php">Search</a>
                <a href="#">About</a> <!--Makes Navigation Faster to Same Page-->
            </nav>
        </header>
        <article>
            <h2 class="header">About Project</h2> <!--About Us Tag (Main Tag)-->
            <p>This website is a Personal Project of Michael Castiglia.</p>
            <p>Michael is a Student who is completing the required MYP Personal Project.</p>
            <p>Michael has decided to make it about coding in PHP, HTML, and CSS.</p> <!-- About Us Content -->
        </article>
        <footer>
            <p class="footerp">
                © Michael Castiglia 2019. All Rights Reserved. This site is for the sole use of education (IB MYP Personal Project). <!--Copyright Information-->
            </br>
                <a href="index.php">Home</a> - <a href="search.php">Search</a> - <a href="#">About</a> <!--Links for Footer (In Case Something Breaks in Header)-->
                                                                                <!--Makes Navigation Faster to Same Page-->
            </p>
        </footer>
    </body>
</html>
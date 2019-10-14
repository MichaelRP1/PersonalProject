<?php // PHP Scripting (Database Stuff)
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require_once "db.php"; // Gives Connection Information for DB

if(isset($_POST['searchValue'])){ // If There is Anything in the Search Box
    $searchValue = $_POST['searchValue']; // Gets Search Value from Search Box
    $query = $conn->prepare("SELECT * FROM vets WHERE CONCAT('name', 'doctor') LIKE '%?%'"); // SQL Query to Only show listings that were searched for
	$query->bind_param('s', $searchValue);
	
	$query->execute();
	$query->bind_result($search_result);
	$query->fetch();
}
else { // If nothing in search box
    $query = "SELECT * FROM vets"; // If nothing in search box, show all vets

    $search_result = $conn->query($query); // Run query on database
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Search | FindAVet PBC</title>
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
                    <!--For the hamburger menu-->
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <input type="checkbox" id="menu"> <!--Hamburger menu button for mobile (used only for css)-->
            <nav>
                <!--Actual Links for Navigation-->
                <a href="index.php">Home</a>
                <a href="#">Search</a> <!--Makes Navigation Faster to Same Page-->
                <a href="about.php">About</a>
            </nav>
        </header>
        <article>
            <h2 class="header">Find A Vet!</h2> <!--Header Tag for Search Page-->
            <form action="search.php" method="post" id="search"> <!-- Creates Search Form -->
                <input type="text" placeholder="Search" id="searchValue" class="formt"> <!-- Textbox for Search -->
                <input type="submit" value="Submit" id="submit" class="formb"> <!-- Submit Button -->
            </form>
            <table class="searchtable"> <!-- Table for Search Function -->
                <tr> <!-- Header Row -->
                    <th>Practice Name</th>
                    <th>Doctor Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?> <!-- Provides results from database -->
                <tr> <!-- Data Rows -->
                <td><?php echo $row['name'];?></td> <!-- Get all results for practice name and put them in the table -->
                <td><?php echo $row['doctor'];?></td> <!-- Get all results for doctor's name and put them in the table -->
                <td><a href="tel:<?php echo $row['phone'];?>"><?php echo $row['phone'];?></a></td> <!-- Get all results for phone number and put them in the table -->
                <td><a href="https://www.google.com/maps/search/?api=1&query=<?php echo $row['namemaps'];?>&query_place_id=<?php echo $row['placeid'];?>" target="_blank"><?php echo $row['address'];?></a></td> <!-- Get all results for address and put them in the table -->
                </tr>
                <?php endwhile;?>
            </table>
        </article>
        <footer>
            <p class="footerp">
                © Michael Castiglia 2019. All Rights Reserved. This site is for the sole use of education (IB MYP Personal Project). Google Maps is a Registered Trademark of Google, Inc. Used under fair use for the purposes of education. <!--Copyright Information-->
            </br>
                <a href="index.php">Home</a> - <a href="#">Search</a> - <a href="about.php">About</a> <!--Links for Footer (In Case Something Breaks in Header)-->
                                            <!--Makes Navigation Faster to Same Page-->
            </p>
        </footer>
    </body>
</html>

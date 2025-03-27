<?php 
include_once 'header.php';
?>

        <section class="index-intro">

        <?php
                if (isset($_SESSION["userid"])) {
                    echo "<p>Hello ". $_SESSION["userid"] ."</p>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                }

            ?>
    

            <h1>McQuin Tech School</h1>
            <p>Welcome to McQuin School, the one-time online school of all things Technology! Explore the rich diversity of McQuin School as you dive
                into the world of Tech!
            </p>
        </section>

        <section class="index-categories">
            <h2>Our Recognized Categories</h2>
            <div class="index-categories-list">
                <div>
                    <h3>Learning Centre</h3>
                </div>
                <div>
                    <h3>Freemium Courses</h3>
                </div>
                <div>
                    <h3>Premium Courses</h3>  
                </div>
                <div>
                    <h3>Kid's Courses</h3>
                </div>
            </div>

        </section>
<?php 
include_once 'footer.php';
?>

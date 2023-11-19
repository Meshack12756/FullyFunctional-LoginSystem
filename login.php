<?php 
 include_once 'header.php';
?>

        <section class="signup-form">
            <h2>Log In</h2>
            <form action="Includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username/Email...">
                <input type="text" name="password" placeholder="Password...">
                <button type="submit" name="submit">Log In</button>
            </form>

            <?php

if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyinput") {
        echo"<p>Fill in all fields!</p>";
    }

    elseif ($_GET["error"] == "wronglogin") {
        echo"<p>Incorrect login information!</p>";
    }

}

?>

        </section>

        
<?php 
 include_once 'footer.php';
?>
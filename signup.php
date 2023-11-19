<?php 
 include_once 'header.php';
?>

        <section class="signup-form">
            <h2>Sign Up</h2>
            <form action="Includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full name...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="text" name="password" placeholder="Password...">
                <input type="text" name="passwordrepeat" placeholder="Repeat Password...">
                <button type="submit" name="submit">Sign Up</button>
            </form>

            <?php

            if (isset($_GET["error"])) {

                if ($_GET["error"] == "emptyinput") {
                    echo"<p>Fill in all fields!</p>";
                }

                elseif ($_GET["error"] == "invaliduid") {
                    echo"<p>Choose a proper username!</p>";
                }

                elseif ($_GET["error"] == "invalidemail") {
                    echo"<p>Choose a proper email!</p>";
                }

                elseif ($_GET["error"] == "passworddontmatch") {
                    echo"<p>Passwords doesn't match!</p>";
                }

                elseif ($_GET["error"] == "stdmfailed") {
                    echo"<p>Something went wrong...try again!</p>";
                }

                elseif ($_GET["error"] == "usernametaken") {
                    echo"<p>This username is  already taken!</p>";
                }

                elseif ($_GET["error"] == "none") {
                    echo"<p>You have signed up!</p>";
                }
            }

            ?>


        </section>

        
<?php 
 include_once 'footer.php';
?>
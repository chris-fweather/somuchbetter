<?php
require_once './header.php'
?>

<section id="login">
        <div class="container">
            <div class="login">
                <div class="login__wrapper">
                    <div class="login__header">
                        <h1 class="login__header--header">SIGN UP</h1>
                    </div>
                    <div class="login__details">
                        <form class="login__details" action="../includes/signup.inc.php" method="post">
                            <input class="login__details--input" type="text" name="username" placeholder="Username">
                            <input class="login__details--input" type="password" name="pwd" placeholder="Password">
                            <input class="login__details--input" type="password" name="pwdrepeat" placeholder="Repeat Password">
                            <button class="login__details--button click" type="submit" name="submit">REGISTER</button>
                        </form>
                    </div>
                    <div class="login__disclaimer">
                        <p class="login__disclaimer--text">Please <a class="purple" href="">contact</a> an administrator for access.</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
require_once './footer.php'
?>
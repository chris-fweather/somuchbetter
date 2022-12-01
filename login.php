<?php
require_once './header.php'
?>

<section id="login">
        <div class="container">
            <div class="login">
                <div class="login__wrapper">
                    <div class="login__header">
                        <h1 class="login__header--header">LOGIN</h1>
                    </div>
                    <div class="login__details">
                        <input class="login__details--input" type="text" placeholder="Username">
                        <input class="login__details--input" type="password" placeholder="Password">
                        <button class="login__details--button click" type="submit">LOGIN</button>
                    </div>
                    <div class="login__disclaimer">
                        <h3 class="login__disclaimer--text">Please <a class="purple" href="">contact</a> an administrator for access.</h3>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
require_once './footer.php'
?>
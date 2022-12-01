<?php
require_once './header.php'
?>

<section id="landing">
        <div class="container">
            <div class="row">
                <div class="landing">
                    <div class="landing__image">
                        <figure>
                            <img class="landing__image--pic" src="./assets/FINAL_RENDER.gif">
                        </figure>
                    </div>
                    <div class="landing__content">
                        <h1 class="landing__content--header">SO MUCH BETTER</h1>
                        <h3 class="landing__content--subheader">Lorem ipsum dolor sit amet, <span class="highlight">consectetur</span> adipisicing elit. Doloremque alias voluptates animi, <span class="highlight">molestiae</span> voluptatum laboriosam?</h3>
                        <button class="landing__content--button click">ROSTER</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="info-box__wrapper">
                    <div class="info-box">
                        <h1 class="info-box__header">SUBSCRIBE</h1>
                        <h3 class="info-box__subheader">Subscribe for future tournaments and announcements.</h3>
                        <ul class="info-box__ul">
                            <li class="info-box__li">
                                <input class="info-box__li--input" type="text" placeholder="Email address">
                                <button type="submit" class="info-box__li--buttn click"><i class="fa-solid fa-check"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="info-box breaker">
                        <h1 class="info-box__header">SOCIALS</h1>
                        <ul class="info-box__ul">
                            <li class="info-box__li">
                                <a href="#"><i class="fa-brands fa-twitter click"></i></a>
                            </li>
                            <li class="info-box__li">
                                <a href="#"><i class="fa-brands fa-discord click"></i></a>
                            </li>
                            <li class="info-box__li">
                                <a href="#"><i class="fa-brands fa-youtube click"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once './footer.php'
?>
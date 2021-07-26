<!DOCTYPE html>
<html lang="sr">
    <head>
        <title>Layout grid-flex</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="style.css" rel="stylesheet"/>
        <meta name="description" content="Layout web page combination grid-flex teh"/>
    </head>
    <body class="layout">
        <header class="header">
            <div class="header-ban">
           
                <img class="logo" src="izrada-sajta--dizajn--seo-optimizacija-i-programiranje-.png" alt="logo" title="logo" itemprop="image" width="70" height="70">
            </div>
            <nav id="main-nav" class="main-nav">
                <a class="main-nav-mob-btn" href="#" onclick="openmenu()">Menu</a>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Kontackt</a>
                <a class="push-right" href="#">Login</a>                
            </nav>
        </header>   

        <main class="main">
            <h1>Layout grid-flex </h1>
            <article class="article-flex">
                <h2 class="article-flex-h2">Krf Beba i drugari</h2>
                <figure class="article-flex-figure">
                    <img class="auto-img"  width="320" height="214" src="output.webp" alt="Vegani na letovanju">               
                </figure>
                <div class="article-flex-text">
                    <p>
                        Primer pravog ljubitelja životinja. Vreme od deset dana odvojeno samo za svoje letovanje, rado će podeliti sa napuštenim drugarima, nema veze u kom delu sveta se nalaze.
                    </p>
                    <a  class="article-flex-btn" target="_blank" href="https://vegani-beograd.org/mapsub/view?id=8" rel="noreferrer">
                        Vegani na letovanju
                    </a>    
                </div> 
            </article>
            <article class="article-flex">
                <h2 class="article-flex-h2">Krf Beba i drugari</h2>
                <figure class="article-flex-figure">
                    <img class="auto-img"  width="320" height="214" src="parga.webp" alt="Vegani na letovanju">               
                </figure>
                <div class="article-flex-text">
                    
                    <p>
                        Primer pravog ljubitelja životinja. Vreme od deset dana odvojeno samo za svoje letovanje, rado će podeliti sa napuštenim drugarima, nema veze u kom delu sveta se nalaze.
                    </p>
                    <a  class="article-flex-btn" target="_blank" href="https://vegani-beograd.org/mapsub/view?id=8" rel="noreferrer">
                        Vegani na letovanju
                    </a>    
                </div> 
            </article>
        </main>
        <aside class="aside">
            <h2>H2 Aside</h2>
            <p>In this part of web page we will put everthing what is relevant for main element.</p>
        </aside>
        <footer class="footer">
            <p>
                PiSi © 2021
            </p>
        </footer>
        <script>
            window.onscroll = function () {
                var doc = document.documentElement;
                var top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
                var x = document.getElementById('top-');
                var mainnav = document.getElementById('main-nav');

                if (top <= 199) {
                    
                     mainnav.classList.remove("nav-fixed");
                    
                } else  {
                    mainnav.classList.add("nav-fixed");
                    
                }
            }
            /*
             const currentLocation = location.href;
            const menuItem = document.querySelectorAll('a');
            const menuLength = menuItem.length
            for (let i = 0; i < menuLength; i++) {
                if (menuItem[i].href === currentLocation) {
                    menuItem[i].className = "active"
                }
            }
    */
        </script>         
        <script>
            function openmenu() {
                var menu = document.getElementById('main-nav');
                if (menu.classList.contains('main-nav-opened')) {
                    menu.classList.remove('main-nav-opened');
                } else {
                    menu.classList.add('main-nav-opened');
                }
            }
        </script>        
    </body>
    <script>
        /*
window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
     var elements = document.getElementsByClassName('auto-img');
    //alert('Page is loaded');
                for (let i = 0; i < elements.length; i++) {
                  elements[i].style.visibility = "visible"; 
                    //console.log(elements[i]);
                }
});       
     * 
         */ 
 
        </script>
</html>



<?php
/*
$file = 'krf-ja-i-beba-800w.jpg';
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = 'output.webp';
imagewebp($content,$output);
imagedestroy($content);
echo '<h4>Output Image Saved as '.$output.'</h4>';
 * 
 */
?>
<?php
return "<!DOCTYPE html>
<html>
    <head>
        <title>$pageData->title</title>
        <meta charset=\"utf-8\">
        <meta name=\"description\" content=\"Strona internetowa o kangurach\">
        <meta name=\"keywords\" content=\"Kangur, zwierzęta\">
        <meta name=\"author\" content=\"Michał Głowaczewski\">
        <meta http-equiv=\"refresh\" content=\"300\">
        $pageData->css
        $pageData->embeddedCss
        $pageData->script
        $pageData->embeddedScript
    </head>
    <body>
        <header>
            <div class=\"main\">
                <a href=\"index.php\"><img src=\"images/logo.png\" alt=\"\"></a>
                <div class=\"social-icons\">
                    <span>Sledz nas:</span>
                    <div>
                        <a href=\"https://google.com/\" class=\"icon-3\"></a>
                        <a href=\"https://facebook.com/\" class=\"icon-2\"></a>
                        <a href=\"https://twitter.com/\" class=\"icon-1\"></a>
                    </div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </header>
        <nav>
            <script>
            var num = 50; //number of pixels before modifying styles

            $(window).bind('scroll', function () {
                if ($(window).scrollTop() > num) {
                    $('.menu').addClass('fixed');
                } else {
                    $('.menu').removeClass('fixed');
                }
            });
            </script>
            <ul class=\"menu\">
                <li class=$pageData->currentIndex><a href=\"index.php\">Home</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\">Rodzaje kangurow</a>
                    <span class=\"dropdown-content\">
                        <a href=\"KangurOlbrzymi.php\">Olbrzymi</a>
                        <a href=\"KangurRudy.php\">Rudy</a>
                        <a href=\"KangurSzary.php\">Szary</a>
                    </span>
                </li>
                <li><a href=\"FakeLogin.php\">Humor</a></li>
                <li class=$pageData->currentCiekawostki><a href=\"Ciekawostki.php\">Ciekawostki</a></li>
                <li class=$pageData->currentGaleria><a href=\"Galeria.php\">Galeria</a></li>
                <li class=$pageData->currentKontakt><a href=\"Kontakt.php\">Kontakt</a></li>
                <li class=$pageData->currentAplikacjaPHP><a href=\"AplikacjaPHP.php\">Aplikacja PHP</a></li>
            </ul>
            <div class=\"clear\"></div>
        </nav>
        $pageData->slider
        <section id=\"content\">
        <div class=\"container top4\">
          <div class=\"grid_2\">
              <div class=\"left1\">
                <ul class=\"menu2\">
                    <li class=$pageData->currentKlient><a href = \"AplikacjaPHP.php?page=klient\"> Klient</a ></li >
                    <li class=$pageData->currentPracownik><a href = \"Pracownik.php\"> Pracownik</a ></li >
                </ul >
              </div>
              <div class='line'></div>
              <div class=\"left1\" style='padding-bottom: 20px;'>
                $pageData->section
              </div>
          </div>
       </div>
        </section>
        <footer>
   	        <div class=\"footer-col-1\">
        	    <h3>Co nas wyroznia:</h3>
                <ul class=\"list-1\">
            	    <li>Konkretna historia</li>
                    <li>Interesujace ciekawostki</li>
                    <li>Dużo humoru</li>
                </ul>
            </div>
            <div class=\"footer-col-2\">
        	    <h3>Adres</h3>
                <dl class=\"adrss\">
                    <dd><span>Kraj:</span>Polska</dd>
                    <dd><span>Miasto:</span>Opole</dd>
                    <dd><span>Email:</span><a href=\"#\" class=\"link\">klubkangurow@mail.com</a></dd>
                </dl>
            </div>
            <div class=\"footer-col-3\">
        	    <h3>Newsletter</h3>
        	    <form id=\"form-search\" method=\"post\">
                    <input type=\"text\" value=\"\" onBlur=\"if(this.value=='') this.value=''\" onFocus=\"if(this.value =='' ) this.value=''\"  /><a href=\"#\" onClick=\"document.getElementById('form-search').submit()\"></a>
                </form>
            </div>
            <div class=\"footer-col-4\">
        	    <p>© 2016 Klub kangurow<br>
     		    Strona stworzona przez <a class=\"link\" href=\"#\" target=\"_blank\" rel=\"nofollow\">Michala Glowaczewskiego</a></p>
            </div>
        </footer>
        <script>
	        Cufon.now();
        </script>
    </body>
</html>";
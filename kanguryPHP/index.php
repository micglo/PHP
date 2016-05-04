<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Klub Kangurów";
$pageData->embeddedCss = "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/slider.css\">";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->AddScript('js/tms-0.4.1.js');
$pageData->embeddedScript = "
<script>
		$(document).ready(function(){
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:10000,
				preset:'zoomer',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:'fade',
				waitBannerAnimation:false,
				progressBar:false
			})
		});
	</script>";
$pageData->currentIndex = "current";
$pageData->slider = "
<div id=\"slide\">
        <div class=\"slider\">
            <ul class=\"items\">
                <li>
                    <img src=\"images/slider-1.jpg\" alt=\"\" />
                    <div class=\"banner\">
                        <p class=\"extra-wrap\">
                        <strong>Najlepszy opis kangurow!</strong>
                        <span>Ciekawa i dokladna historia tego gatunku. </span>
                        </p>
                        <a href=\"KangurOlbrzymi.html\">Czytaj!</a></div></li>
                <li>
                    <img src=\"images/slider-2.jpg\" alt=\"\" />
                    <div class=\"banner\">
                        <p class=\"extra-wrap\">
                            <strong>Najzabawniejszy humor o kangurach!</strong>
                            <span>Jeszcze nigdy sie tak nie ubawiles.</span>
                        </p>
                        <a href=\"humor.html\">Czytaj!</a>
                    </div>
                </li>
                <li>
                    <img src=\"images/slider-3.jpg\" alt=\"\" />
                    <div class=\"banner\">
                        <p class=\"extra-wrap\">
                            <strong>Najbardziej interesujące ciekawostki!</strong>
                            <span>Dowiesz sie wiele interesujących rzeczy.</span>
                        </p>
                        <a href=\"ciekawostki.html\">Czytaj!</a>
                    </div>
                </li>
                <li>
                    <img src=\"images/slider-4.jpg\" alt=\"\" />
                    <div class=\"banner\">
                        <p class=\"extra-wrap\">
                            <strong>Najbardziej interesujące ciekawostki!</strong>
                            <span>Dowiesz sie wiele interesujących rzeczy.</span>
                        </p>
                        <a href=\"ciekawostki.html\">Czytaj!</a>
                    </div>
                </li>
                <li>
                    <img src=\"images/slider-5.jpg\" alt=\"\" />
                    <div class=\"banner\">
                        <p class=\"extra-wrap\">
                            <strong>Najbardziej interesujące ciekawostki!</strong>
                            <span>Dowiesz sie wiele interesujących rzeczy.</span>
                        </p>
                        <a href=\"ciekawostki.html\">Czytaj!</a>
                    </div>
                </li>
            </ul>
        </div>
        <a href=\"#\" class=\"prev\"></a>
         <a href=\"#\" class=\"next\"></a>
     </div>
";
$pageData->section = "
<div class=\"container top1\">
       	<div class=\"grid_1 box-1\">
        	<img src=\"images/page1-img1.jpg\" alt=\"\">
            <a href=\"KangurOlbrzymi.html\"><span class=\"clr\">Rodzaje</span> kangurow</a>
        </div>
        <div class=\"grid_1 box-1\">
        	<img src=\"images/page1-img2.jpg\" alt=\"\">
            <a href=\"#\"><span class=\"clr\">Kangurzy</span> humor</a>
        </div>
        <div class=\"grid_1 box-1\">
        	<img src=\"images/page1-img3.jpg\" alt=\"\">
            <a href=\"ciekawostki.html\"><span class=\"clr\">Kangurze</span> ciekawostki</a>
        </div>
        <div class=\"grid_2\">
        	<div class=\"line pad1\"></div>
        </div>
        <div class=\"grid_1\">
        	<h2 class=\"p2\">Witamy!</h2>
            <img src=\"images/page1-img4.jpg\" alt=\"\">
            <p class=\"text top2 p3\">Klub kangurów</p>
            <p>Strona poswięcona kangurom. Znajdziesz tu szczegółowy opis różnorodności kangurów oraz dokładną historię tego gatunku zwierząt. Interesujące ciekawostki oraz masę humoru!</p>
            <p>Zapraszamy!</p>
        </div>
        <div class=\"grid_1\">
        	<div class=\"left1\">
                <h2 class=\"p4\">Rodzaje kangurow</h2>
                <div class=\"wrap\">
                    <div class=\"number\">1</div>
                    <p class=\"extra-wrap border-bot-1\"><span class=\"clr\">Kangur olbrzymi</span><br>
                    <a class=\"link\" href=\"https://pl.wikipedia.org/wiki/Kangur_olbrzymi\" target=\"_blank\">Kangur olbrzymi</a> <def>(Macropus giganteus) – duży torbacz z rodziny kangurowatych, endemit kontynentu australijskiego, jeden z najbardziej popularnych kangurów. </def></p>
                </div>
                <div class=\"wrap\">
                    <div class=\"number\">2</div>
                    <p class=\"extra-wrap border-bot-1\"><span class=\"clr\">Kangur rudy</span><br>
                        <a class=\"link\" href=\"https://pl.wikipedia.org/wiki/Kangur_rudy\" target=\"_blank\">Kangur rudy</a> <def>(Macropus rufus) – torbacz z rodziny kangurowatych. Duży ssak roślinożerny, największy z torbaczy.</def>
                    </p>
                </div>
                <div class=\"wrap\">
                    <div class=\"number\">3</div>
                    <p class=\"extra-wrap\"><span class=\"clr\">Kangur szary</span><br>
                    <a class=\"link\" href=\"https://pl.wikipedia.org/wiki/Kangur_szary\" rel=\"nofollow\">Kangur szary</a> <def>(Macropus fuliginosis, czasami pisane Macropus fuliginosus) – duży torbacz z rodziny kangurowatych. Dorosłe samce osiągają wysokość w pozycji stojącej około dwóch metrów i wagę 65 kg.</def></p>
                </div>
            </div>
        </div>
        <div class=\"grid_1\">
        	<div class=\"left2\">
                <h2 class=\"p4\">Kangurze dowcipy</h2>
                <div class=\"wrap border-bot-1\">
                    <img src=\"images/page1-img5.jpg\" alt=\"\" class=\"img-indent\">
                    <p class=\"extra-wrap\">
                        <q>Co powstanie po skrzyżowaniu kangura ze słoniem ?<br>
                        - Wielkie dziury w całej Australii!</q>
                    </p>
                </div>
                <div class=\"wrap border-bot-1\">
                    <img src=\"images/page1-img6.jpg\" alt=\"\" class=\"img-indent\">
                    <p class=\"extra-wrap\">
                        <blockquote>Kangurzyca nosi dziecko w torebce.</blockquote>
                    </p>
                </div>
            </div>
        </div>
       </div>
";

$page = include_once "views/MainPageTemplate.php";
echo $page;

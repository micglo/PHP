<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 19:58
 */
include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Kangur Szary";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->section = "
<div class=\"container top4\">
        <div class=\"grid_2\">
        	<h2 class=\"p2\">Podstawy karmienia</h2>
            <div class=\"wrap box-2\">
                <div>
                    <img src=\"images/page1-img1.jpg\" alt=\"\">
                    <p class=\"text top2 p3\">Kangur olbrzymi</p>
                    <p>Duży torbacz z rodziny kangurowatych, endemit kontynentu australijskiego, jeden z najbardziej popularnych kangurów. </p>
                    <a href=\"KangurOlbrzymi.html\" class=\"button top3\">Czytaj</a>
                </div>
                <div>
                    <img src=\"images/page1-img2.jpg\" alt=\"\">
                    <p class=\"text top2 p3\">Kangur rudy</p>
                    <p>Torbacz z rodziny kangurowatych. Duży ssak roślinożerny, największy z torbaczy.</p>
                    <a href=\"KangurRudy.html\" class=\"button top3\">Czytaj</a>
                </div>
                <div class=\"last\">
                    <img src=\"images/page1-img3.jpg\" alt=\"\">
                    <p class=\"text top2 p3\">Kangur szary</p>
                    <p>Macropus fuliginosis, czasami pisane Macropus fuliginosus – duży torbacz z rodziny kangurowatych. Dorosłe samce osiągają wysokość w pozycji stojącej około dwóch metrów i wagę 65 kg.</p>
                    <a href=\"KangurSzary.html\" class=\"button top3\">Czytaj</a>
                </div>
            </div>
        </div>
        <div class=\"grid_2\">
        	<div class=\"line pad2\"></div>
        </div>
        <div class=\"grid_2\">
        	<div class=\"left1 \">
                <h1 class=\"p5\">Kangur szary</h1>
                <div class=\"wrap\">
                    <img src=\"images/page2-img6.jpg\" alt=\"\" class=\"img-indent-2\">
                    <div class=\"trzeciStyl\">
                    <p class=\"p3 first-line\">
                        Duży torbacz z rodziny kangurowatych. Dorosłe samce osiągają wysokość w pozycji stojącej około dwóch metrów i wagę 65 kg. Zamieszkuje suche zarośla i lasy. Odżywia się głównie trawą i innymi roślinami zielnymi. Ciąża trwa zaledwie 36 dni, a młode pozostają w torbie przez 9 miesięcy. Żyje w dużych grupach, w których przeważają samice i młode. Wciąż jeszcze bardzo liczny w Australii, lecz rzadko eksponowany w europejskich kolekcjach.
                     </p>
                    </div>
                </div>
                <h3 class=\"top3 p3\">Charakterystyka</h3>
                <ol>
                    <li class=\"p3\">
                        <b>Masa:</b>
                        <ul style=\"list-style-image: url('images/kangarooicon.png'); margin-left: 40px;\">
                            <li>samiec: 53 kg</li>
                            <li>samica: 27,5 kg</li>
                        </ul>
                    </li>
                    <li class=\"p3\">
                        <b>Długość ciała:</b>
                        <ul style=\"list-style-image: url('images/kangarooicon.png'); margin-left: 40px;\">
                            <li>od 95 cm do 220 cm</li>
                        </ul>
                    </li>
                    <li class=\"p3\">
                        <b>Ubarwienie:</b>
                        <ul style=\"list-style-image: url('images/kangarooicon.png'); margin-left: 40px;\">
                            <li>Pokryty sierścią szarobrązową</li>
                        </ul>
                    </li>
                </ol>
                <h3 class=\"top3 p3\">Status i liczebnosc</h3>
                <div class=\"trzeciStyl\">
                <p class=\"p3\">
                    Chroniony od 1983 roku. Zezwolenia na eksport dopuszczalne jest tylko w stanach Australii Południowej i Nowej Południowej Walii. W 1978 roku gatunek liczył 295000 osobników.
                </p>
                </div>
            </div>
        </div>
       </div>
";
$page = include_once "views/MainPageTemplate.php";
echo $page;
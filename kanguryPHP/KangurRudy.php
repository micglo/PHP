<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 19:55
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Kangur Rudy";
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
        	<div class=\"left1\">
                <h1 class=\"p5\">Kangur rudy</h1>
                <div class=\"wrap drugiStyl\">
                    <img src=\"images/page2-img5.jpg\" alt=\"\" class=\"img-indent-2\">
                    <p class=\"p3 first-letter\">
                        Torbacz z rodziny kangurowatych. Duży ssak roślinożerny, największy z torbaczy. Występuje pospolicie w całej Australii z wyjątkiem części południowego i wschodniego wybrzeża oraz północnych lasów równikowych.
                    </p>
                    <div class=\"drugiStyl\">
                    <p class=\"first-letter\">
                        Duży lub bardzo duży kangur o sierści od brązowo-rudawej barwy na grzbiecie do płowej na brzuchu i kończynach. Długie, spiczasto zakończone uszy, tępo zakończony pysk. Samice wyraźnie mniejsze, o sierści z większym udziałem koloru szarego.
                    </p>
                    </div>
                </div>
                <h3 class=\"top3 p3\">Cechy gatunku</h3>

                <ul style=\"list-style-image: url('images/kangarooicon.png'); margin-left:40px;\">
                    <li>wysokość: 1.20 m (samce) do 60 cm (samice), ogon do 1,2 m</li>
                    <li>masa: samce do 90 kg, samice wyraźnie lżejsze</li>
                    <li>ciąża: 35 dni w macicy, po zakończeniu ciąży młode przebywa jeszcze 235 dni w torbie</li>
                    <li>liczba młodych w miocie: 1</li>
                    <li>dojrzałość płciowa: samiec 24 miesiące, samice 14–22 miesiące</li>
                    <li>pożywienie: roślinożerny</li>
                    <li>długość życia: do 20 lat (średnio 6–7 lat)</li>
                    <li>potrafi skoczyć na odległość 8 metrów, ale większość skoków mierzy 1,2–1,8 m[4]</li>
                    <li>temperatura ciała: około 35,5°C.[5]</li>
                </ul>


            </div>
        </div>
       </div>
";
$page = include_once "views/MainPageTemplate.php";
echo $page;
<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 19:38
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Kangur Olbrzymi";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->section = "
<div class=\"container top4\">
        <div class=\"grid_2\">
        	<h2 class=\"p2\">Rodzaje kangurow</h2>
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
                <h1 class=\"p5\">Kangur olbrzymi</h1>
                <div class=\"wrap\">
                    <img src=\"images/page2-img4.jpg\" alt=\"\" class=\"img-indent-2\">
                    <p class=\"p3 change_hide tooltip-1\" title=\"Kliknij aby zmienić tekst\">Duży torbacz z rodziny kangurowatych, endemit kontynentu australijskiego, jeden z najbardziej popularnych kangurów, często mylony z kangurem szarym, łapanym dla skór i mięsa już przez Aborygenów. Przez Europejczyków widziany po raz pierwszy w 1770 r. Obok kangura rudego i szarego należy do największych współcześnie żyjących torbaczy.</p>
                    <p class=\"p3 change_show tooltip-2\" title=\"Kliknij aby zmienić styl\" >Jakis zmieniony tekst.</p>
                    <p class=\"p3 change_style\">Jakis zmieniony tekst.</p>
                    <script>
                        $( \"p.change_show\" ).hide();
                        $( \"p.change_style\" ).hide();
                        $(function() {
                            $(\"#tooltip-1\").tooltip();
                        });
                        $( \"p.change_hide\" ).click(function( event ) {
                            event.preventDefault();
                            $( this ).hide();
                            $( \"p.change_show\" ).show();
                            $(function() {
                                $(\"#tooltip-2\").tooltip();
                            });
                            $( \"p.change_show\").click(function(event2){
                                event2.preventDefault();
                                $(this).hide();
                                $(\"p.change_style\").show().css('color', 'red');
                            });
                        });
                    </script>
                    <p>
                    Zasięg występowania kangura olbrzymiego jest ograniczony do kontynentu australijskiego i wysp wchodzących w skład stanu Tasmania. Na kontynencie można go spotkać wzdłuż wschodnich wybrzeży – Queensland, oprócz zachodniej części Półwyspu Jork, Nowa Południowa Walia, Wiktoria i nielicznie na obszarach Australii Południowej.
                        Typowe siedlisko kangura olbrzymiego to otwarte tereny lesiste i trawiaste, ze stosunkowo dużymi opadami deszczów, ale coraz częściej spotykany jest na terenach półpustynnych [2], gdzie został zepchnięty na skutek rozwoju gospodarki człowieka[3].
                    </p>
                </div>
                <h3 class=\"top3 p3\">Charakterystyka</h3>
                <div class=\"pierwszyStyl\">
                <p class=\"p3 \">
                    Z typową dla kangurowatych sylwetką – mała głowa, duże uszy, krótkie przednie i długie tylne kończyny – całkowicie wyprostowany osiąga ponad 2 m, przy wadze ponad 60 kg, maksymalnie do 90 kg. Przeciętna długość ciała wynosi 1,5-1,8 m[2], ogona 95-120 cm. Samica jest zwykle mniejsza – 40 kg masy ciała i 85-120 cm długości, ogon 75 cm[4]
                </p>
                <p class=\"p3\">
                    Ciało pokrywa gładka, miękka i gęsta sierść koloru szarobrunatnego, część brzuszna, nogi i spodnia część ogona są jaśniejsze, na części twarzowej mogą miejscami występować siwe włosy. Kangury olbrzymie z terenów położonych bliżej wybrzeży mają jaśniejsze futro niż w głębi lądu, natomiast na południu kontynentu i w Tasmanii mają futro dłuższe.
                </p>
                <p class=\"p3\">
                    Dymorfizm płciowy jest wyraźnie widoczny w różnicy wielkości. Przeciętna masa ciała samców jest 2-3 razy większa niż samic.
                </p>
                <p class=\"p3\">
                    Bardzo mocny ogon pomaga w balansowaniu ciałem w szybkim biegu i stanowi podporę, kiedy kangur stoi. Tylne kończyny są silnie umięśnione, przystosowane do skakania, zakończone szerokimi stopami dorastającymi do 56 cm długości. Nogi zbudowane są w taki sposób, że poruszając się szybciej kangur zużywa mniej energii, potrafi wykonywać skoki do 9 m, a na krótkich odcinkach może osiągać prędkość do 48 km/h.[5]
                </p>
                <p class=\"p3\">
                    Przednie kończyny są krótkie, ruchliwe, zakończone pięciopalczastą dłonią. Służą do zbierania pokarmu i podawania go do pyska oraz do drapania się. Chód kangura olbrzymiego robi wrażenie niezgrabnego, ciężkiego i utykającego.
                </p>
                <p class=\"p3\">
                    Mają dobrze rozwinięty wzrok, węch i słuch. Budowa uszu umożliwia ich obracanie w pożądanym kierunku. Każdy podejrzany szelest wywołuje niepokój i ucieczkę. Uciekają ogromnymi susami o długości do 9 m i wysokości 3 m. W normalnym biegu wykonują 3-metrowe skoki[4]. Poruszając się powoli podpierają się przednimi łapami.
                </p>
                <h3 class=\"top3 p3\">Tryb zycia</h3>
                <p class=\"p3\">
                    Kangury olbrzymie są zwierzętami wyłącznie roślinożernymi. Żywią się liśćmi, pędami traw z rodzaju Spinifex, ziołami, nierzadko pasąc się razem ze zwierzętami hodowlanymi (owce, bydło). W niewoli zjadają również owoce. Żerują od zmierzchu do świtu, a w ciągu dnia śpią lub odpoczywają chowając się w cieniu drzew lub wykopując zagłębienia w ziemi. Pasący się kangur skubie trawę w pozycji siedzącej podpierając się ogonem. Po oskubaniu trawy podnosi się i zjada ją w pozycji wyprostowanej. Po jedzeniu kładzie się na ziemi, wyciągając tylne nogi na bok, co ma znaczenie obronne – pozwala natychmiast zerwać się i uciec.
                </p>
                <h3 class=\"top3 p3\">Zachowania socjalne</h3>
                <p class=\"p3\">
                    Kangury olbrzymie tworzą małe grupy, w skład których wchodzi dorosły samiec – lider stada, czasem 2-3 młodsze samce i 2-3 samice z młodymi. Na bogatych w pokarm pastwiskach spotykane są większe stada[4]. Grupy kilku stad często pasą się razem. Po wyczerpaniu się pokarmu większe stado ponownie dzieli się na grupki poszukujące pokarmu oddzielnie,
                </p>
                <p class=\"p3\">
                    Samce wykazują agresję przy ustalaniu hierarchii w stadzie. Dominujący samiec ma pierwszeństwo w pokrywaniu samicy wchodzącej w okres rui. Wyczuwając gotowość samicy do rozrodu zbliża się do niej i obwąchuje, wydając przy tym dźwięki przypominające gdakanie i przytrzymując jej głowę i ogon w sposób charakterystyczny dla wielu kangurowatych[2].
                </p>
                <p class=\"p3\">
                    Porozumiewają się emitując różnorodne dźwięki przypominające gdakanie, kwiczenie i gardłowy kaszel (takie odgłosy wydają również samce w czasie konfrontacji z rywalami). Wyczuwając zagrożenie tupią tylnymi nogami o ziemię. Jest to kierowany do współplemieńców sygnał ostrzegawczy roznoszący się na znaczną odległość.
                </p>
                </div>
            </div>
        </div>
       </div>
";

$page = include_once "views/MainPageTemplate.php";
echo $page;
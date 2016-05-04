<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 20:04
 */
include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Ciekawostki";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->section = "
<div class=\"container top4\">
          <div class=\"grid_2\">
              <div class=\"left1\">
                  <h1 class=\"p5\">Wyspa Kangura</h1>
                  <p class=\"p1\">
                      Jest trzecią co do wielkości australijską wyspą (po Tasmanii i Melville Island). Położona jest 112 km na południowy- wschód od Adelajdy, przy wejściu do zatoki St. Vincent, 13 km od przylądka Jervis, przy samym końcu półwyspu Fleurie w Australii Południowej.
                  </p>
                  <h1 class=\"p5\">Kangur Matematyczny</h1>
                  <p class=\"p1\">
                      Międzynarodowy konkurs adresowany do uczniów szkół podstawowych, gimnazjalnych i średnich, od klasy trzeciej szkoły podstawowej do klas maturalnych w liceach i technikach. Rozgrywany jest w pięciu kategoriach, które obejmują następujące klasy:
                  </p>
                  <table class=\"table1-border\">
                      <tr class=\"table1 pokolorowanyWiersz\">
                          <th class=\"table1 naglowek1\">Nazwa</th>
                          <th class=\"table1 naglowek1\">Dla kogo</th>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\">Maluch</td>
                          <td class=\"table1\">klasy 3 i 4 szkół podstawowych</td>
                      </tr>
                      <tr class=\"table1 pokolorowanyWiersz\">
                          <td class=\"table1\">Beniamin</td>
                          <td class=\"table1\">	klasy 5 i 6 szkół podstawowych</td>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\">Kadet</td>
                          <td class=\"table1\">klasy I i II gimnazjów</td>
                      </tr>
                      <tr class=\"table1 pokolorowanyWiersz\">
                          <td class=\"table1\">Junior</td>
                          <td class=\"table1\">klasy III gimnazjów, I liceów i techników<br>I, II, III zasadniczych szkół zawodowych</td>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\">Student</td>
                          <td class=\"table1\">klasy II i III liceów i techników oraz IV techników.</td>
                      </tr>
                  </table>
                  <h1 class=\"p5 top5\">Wyspa Kangura</h1>
                  <p class=\"p1\">
                      Jest trzecią co do wielkości australijską wyspą (po Tasmanii i Melville Island). Położona jest 112 km na południowy- wschód od Adelajdy, przy wejściu do zatoki St. Vincent, 13 km od przylądka Jervis, przy samym końcu półwyspu Fleurie w Australii Południowej.
                  </p>
                  <table class=\"table1-border\">
                      <tr class=\"table1\">
                          <th class=\"table1\" colspan=\"3\">Systematyka rodziny</th>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\">Podrodzina</td>
                          <td class=\"table1\">Rodzaj</td>
                          <td class=\"table1\"  style=\"width: 200px;\">Gatunki</td>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\" style=\"text-align: left;\">filnderki</td>
                          <td class=\"table1\" style=\"text-align: left;\">filanderek</td>
                          <td class=\"table1\" style=\"text-align: left; width: 200px;\">filanderek pręgowany</td>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\" rowspan=\"3\" style=\"text-align: center; vertical-align: middle;\">kangury</td>
                          <td class=\"table1\" style=\"text-align: right;\">drzewiak</td>
                          <td class=\"table1\" style=\"text-align: right; width: 200px;\">drzewiak czarnostopy</td>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\" style=\"text-align: end;\">kangurowiec</td>
                          <td class=\"table1\" style=\"text-align: end; width: 200px;\">kangurowiec czarny</td>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\" style=\"text-align: center; vertical-align: bottom;height: 50px\">kangurnik</td>
                          <td class=\"table1\" style=\"text-align: center; vertical-align: bottom;width: 200px;height: 50px\">kangurnik papuaski</td>
                      </tr>
                      <tr class=\"table1\">
                          <td class=\"table1\" colspan=\"3\" style=\"background-color: plum\">
                              <table class=\"table1\">
                                  <tr class=\"table1\"><th class=\"table1\"></th><th class=\"table1\"></th></tr>
                                  <tr class=\"table1\"><td class=\"table1\"></td><td class=\"table1\"></td></tr>
                                  <tr class=\"table1\"><td class=\"table1\"></td><td class=\"table1\"></td></tr>
                              </table>
                          </td>
                      </tr>
                  </table>
                  <p class=\"p1\"></p>
              </div>
          </div>
       </div>
";
$page = include_once "views/MainPageTemplate.php";
echo $page;
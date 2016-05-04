<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 20:05
 */
include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Kontakt";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->section = "
<div class=\"container top4\">
          <div class=\"grid_2\">
              <div class=\"left1\">
                  <div style=\"width:500px; height:500px; position:relative; top: 30px;\">
                      <div style=\"position: absolute; top: 50px; left: 50px; width:500px; height:500px;\">
                          <div style=\"position: absolute; top: 50px; left: 50px; width:500px; height:500px;\">
                              <div class=\"napisNaObrazku\">
                                  <span style=\"color: red\">Jakis napis na obrazku. Jakis napis na obrazku. Jakis napis na obrazku. Jakis napis na obrazku. Jakis napis na obrazku.  </span>
                              </div>
                              <img src=\"images/img4.jpg\" alt=\"\" style=\"height: 100%; width: auto\"/>
                          </div>
                          <img src=\"images/img3.jpg\" alt=\"\" style=\"height: 100%; width: auto\"/>
                      </div>
                      <img src=\"images/img2.jpg\" alt=\"\" style=\"height: 100%; width: auto\"/>
                  </div>

                  <div class=\"line pad1\" style=\"position: relative; top: 120px;\"></div>

                  <div style=\"width:500px; height:500px; position:relative; top: 120px;padding-bottom:50px;\">
                      <img style=\"border:0px; margin-left:50px;\"src=\"images/mapa.gif\" usemap=\"#polska\">
                      <map name=\"polska\" id=\"polska\">
                          <area shape=\"poly\" coords=\"5,134,6,142,21,155,28,151,36,139,45,137,63,128,71,128,80,119,88,125,110,109,102,99,111,95,119,83,130,71,124,59,123,47,125,39,121,26,112,22,93,39,78,45,63,49,48,53,33,59,12,66,6,80,10,88,14,98,17,111,13,124,5,133\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"zachodniopomorskie\">
                          <area shape=\"poly\" coords=\"120,18,135,10,161,5,187,3,205,16,222,26,242,28,227,41,224,54,231,65,235,69,219,88,201,84,180,79,163,76,157,84,155,87,143,94,127,86,133,71,131,57,129,45,131,37,125,26\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"pomorskie\">
                          <area shape=\"poly\" coords=\"248,28,258,30,304,35,355,34,377,35,361,45,368,62,374,69,351,88,337,98,323,99,299,107,290,109,274,115,260,120,253,116,245,117,240,106,229,102,221,91,235,77,239,71,233,60,228,49,235,41\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"warmi?sko-mazurskie\">
                          <area shape=\"poly\" coords=\"382,34,397,40,407,55,409,81,426,116,427,137,425,153,400,170,394,179,388,179,381,174,367,172,363,159,361,144,351,138,341,129,330,117,330,100,346,99,361,82,378,70,375,63,366,45,372,41\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"podlaskie\">
                          <area shape=\"poly\" coords=\"326,101,326,116,329,124,353,142,357,153,361,169,368,175,383,180,379,192,371,187,367,195,354,196,343,196,334,203,335,214,329,224,323,223,328,233,331,237,330,266,322,263,313,263,305,254,297,254,290,257,276,245,284,235,279,229,288,221,283,210,278,203,269,200,268,192,261,184,251,176,244,178,232,175,228,171,233,157,237,147,237,137,243,128,246,122,258,124,280,117\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"mazowieckie\">
                          <area shape=\"poly\" coords=\"158,89,166,79,216,92,220,96,234,108,244,120,233,144,227,167,217,175,206,174,192,163,180,162,169,155,158,151,152,145,150,132,146,128,148,108,147,95\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"kujawsko-pomorskie\">
                          <area shape=\"poly\" coords=\"120,86,142,98,144,109,141,119,144,134,149,144,148,153,165,158,193,171,207,179,214,182,205,190,200,197,200,206,190,211,185,224,184,237,173,242,176,255,166,259,160,248,162,239,156,238,153,229,141,222,129,230,113,221,105,212,94,205,85,191,79,152,85,131,98,122,115,108,112,100\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"wielkopolskie\">
                          <area shape=\"poly\" coords=\"217,177,227,175,238,180,255,180,265,194,272,208,282,214,277,222,276,230,276,240,270,249,259,257,254,266,245,275,232,268,226,262,214,263,201,263,195,258,182,255,181,244,186,240,190,234,190,215,197,213,204,207,204,196,213,193,216,186,218,181\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"��dzkie\">
                          <area shape=\"poly\" coords=\"392,183,409,190,416,198,414,221,416,240,421,256,434,278,434,292,432,309,417,308,410,319,397,310,387,313,380,318,366,311,367,299,359,293,351,278,339,283,335,267,335,250,336,242,337,232,334,227,339,219,340,210,343,201,357,201,366,201,373,195,380,198,388,190,390,182\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"lubelskie\">
                          <area shape=\"poly\" coords=\"276,250,289,258,302,259,314,266,330,269,336,276,335,288,327,298,308,311,297,318,279,323,271,312,267,303,255,302,254,291,249,281,252,273,260,275,261,263,263,258\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"�wi�tokrzyskie\">
                          <area shape=\"poly\" coords=\"341,285,351,289,361,302,362,313,372,319,383,320,394,313,404,321,409,325,375,372,378,397,383,404,379,410,344,397,337,386,319,379,316,361,309,348,311,313,336,293,340,284\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"podkarpackie\">
                          <area shape=\"poly\" coords=\"81,123,83,130,79,142,76,160,81,193,101,215,97,220,85,213,68,234,60,232,53,237,38,242,28,235,29,224,24,209,25,190,23,157,41,142,62,131,72,131\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"lubuskie\">
                          <area shape=\"poly\" coords=\"45,242,33,279,37,285,48,278,57,287,61,293,87,301,100,299,94,311,111,336,120,334,129,326,132,320,123,310,137,294,138,281,147,268,150,256,157,254,157,239,144,226,132,233,114,225,105,219,99,224,85,217,71,236,60,237\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"dolno�l�skie\">
                          <area shape=\"poly\" coords=\"128,312,136,301,141,294,144,277,152,265,154,259,172,262,189,261,196,266,194,281,191,294,185,310,183,321,172,329,171,337,167,343,152,328\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"opolskie\">
                          <area shape=\"poly\" coords=\"194,349,204,368,213,381,221,381,234,370,232,360,221,344,217,340,228,324,236,310,253,305,244,281,226,266,200,266,196,284,187,312,185,323,176,331,175,338\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\" alt=\"�l�skie\">
                          <area shape=\"poly\" coords=\"259,307,265,309,277,328,306,319,306,347,308,359,314,369,315,380,302,386,294,389,284,383,271,386,263,397,245,395,244,383,234,376,238,367,235,356,221,340,238,314,252,310\" href=\"http://www.cygnus.info.pl/photo/kangury/DSC07438.html\"alt=\"ma�opolskie\">
                      </map>
                  </div>
              </div>
          </div>
      </div>
";
$page = include_once "views/MainPageTemplate.php";
echo $page;
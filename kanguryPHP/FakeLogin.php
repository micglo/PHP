<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 20:01
 */
include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Ciekawostki";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->section = "
<div class=\"container top4\">
          <div class=\"grid_2\">
              <div class=\"left1\">
                  <div id=\"broInfo\"></div>
                  <script type = \"text/javascript\">
                      var count = 2;
                      function validate() {
                          var un = document.myform.username.value;
                          var pw = document.myform.pword.value;
                          var valid = false;
                          var x = \" Przegladarka z ktorej korzystasz to: \" + navigator.appName;

                          var unArray = [\"michal\", \"admin\"];
                          var pwArray = [\"michal\", \"admin\"];

                          for (var i=0; i <unArray.length; i++) {
                              if ((un == unArray[i]) && (pw == pwArray[i])) {
                                  valid = true;
                                  break;
                              }
                          }

                          if (valid) {
                              alert (\"Logowanie udane!\" + x);
                              window.location = Humor.php;
                              return false;
                          }

                          var t = \" prob\";
                          if (count == 1) {t = \" prob\"}

                          if (count >= 1) {
                              alert (\"Nie poprawny login lub haslo. Pozostalo Ci \" + count + t + \".\");
                              document.myform.username.value = \"\";
                              document.myform.pword.value = \"\";
                              setTimeout(\"document.myform.username.focus()\", 25);
                              setTimeout(\"document.myform.username.select()\", 25);
                              count --;
                          }

                          else {
                              alert (\"Nadal niepoprawne! Nie masz wiecej prob.\");
                              document.myform.username.value = \"Dalsze proby sa niedozwolone\";
                              document.myform.pword.value = \"\";
                              document.myform.username.disabled = true;
                              document.myform.pword.disabled = true;
                              return false;
                          }

                      }
                  </script>

                  <form name = \"myform\">
                      <p>LOGIN <input type=\"text\" name=\"username\"> HASLO <input type=\"password\" name=\"pword\">
                          <input type=\"button\" value=\"ZALOGUJ\" name=\"Submit\" onclick= \"validate()\" class=\"button\">
                      </p>
                  </form>
              </div>
          </div>
      </div>
";
$page = include_once "views/MainPageTemplate.php";
echo $page;
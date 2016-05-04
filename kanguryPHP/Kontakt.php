<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 19:59
 */
include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Kontakt";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->embeddedScript = "
<script>
        function validateForm() {
            var lastnameExp = /^[A-Z]+\w/;
            var emailExp = /^\w+([\.-_]?\w+)*@\w+([\.-_]?\w+)*(\.\w{2,3})+$/;
            var kodExp = /^[0-9]+\w/;
            if (lastnameExp.test(document.getElementById(\"form\").nazwisko.value) == false) {
                alert(\"Niepoprawna nazwa NAZWISKA\");
                return false;
            }
            if (emailExp.test(document.getElementById(\"form\").email.value) == false) {
                alert(\"Niepoprawna nazwa Email\");
                return false;
            }
            if (kodExp.test(document.getElementById(\"form\").kod1.value) == false) {
                alert(\"Niepoprawny kod pocztowy\");
                return false;
            }
            if (kodExp.test(document.getElementById(\"form\").kod2.value) == false) {
                alert(\"Niepoprawny kod pocztowy\");
                return false;
            }
        }
    </script>
";
$pageData->section = "
<div class=\"container top4\">
        <div class=\"grid_1\">
            <h2>Skontaktuj sie z nami!</h2>
            <div class=\"map\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2529.549601638473!2d17.90283821584036!3d50.65405538055404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4710532075442083%3A0xd203bfb96b821f74!2sPr%C3%B3szkowska+76%2C+46-020+Opole!5e0!3m2!1spl!2spl!4v1460472113117\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            <dl class=\"adr\">
                <dt> Puzaka 30A / 2,<br>Opole, 45-273.</dt>
                <dd><span>Telefon: </span>+48 530 540 992<div class=\"\"></div></dd>
                <dd><span>E-mail: </span><a href=\"#\" class=\"link\">klubkangurow@mail.com</a></dd>
            </dl>
        </div>
        <div class=\"grid_3\">
            <div class=\"left1\">
                <h2>Wypelnij formularz!</h2>
                <form id=\"form\" onsubmit=\"return validateForm()\" >
                    <fieldset>
                        <label>
                            <strong>Nazwisko:</strong>
                            <input type=\"text\" name=\"nazwisko\" value=\"\"  maxlength=\"30\" class=\"inputForm\">
                        </label>
                        <label>
                            <strong>Email:</strong>
                            <input type=\"text\" name=\"email\" value=\"\" class=\"inputForm\">
                        </label>
                        <label>
                            <strong>Kod Pocztowy:</strong>
                            <input type=\"text\" id=\"kodForm\" name=\"kod1\" value=\"\" maxlength=\"2\"/>
                            <strong id=\"myslnik\">-</strong>
                            <input type=\"text\" id=\"kodForm2\" name=\"kod2\" value=\"\" maxlength=\"3\"/>
                        </label>
                        <label>
                            <strong>Wybierz:</strong>
                            <select name=\"kangury\" class=\"inputForm2\">
                                <option value=\"kangur1\">Kangur 1</option>
                                <option value=\"kangur2\">Kangur 2</option>
                                <option value=\"kangur3\">Kangur 3</option>
                                <option value=\"kangur4\">Kangur 4</option>
                            </select>
                        </label>
                        <div class=\"btns\">
                            <a href=\"#\" class=\"button\" onClick=\"document.getElementById('form').reset()\">Wyczysc</a>
                            <input type=\"submit\" value=\"Wyslij\" class =\"buttonSubmit\">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
";
$page = include_once "views/MainPageTemplate.php";
echo $page;
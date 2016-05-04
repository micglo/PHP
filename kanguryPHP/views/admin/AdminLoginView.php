<?php
/**
 * Created by PhpStorm.
 * User: Kamil
 * Date: 2016-04-16
 * Time: 12:01
 */
return "
 <form method='post' action='Pracownik.php'  id=\"form\">
    <p>Zaloguj sie jako pracownik</p>
    <label>
        <strong>E-Mail:</strong>
        <input type=\"email\" name=\"email\" value=\"\"  class=\"inputForm\" required>
    </label>
    <label>
        <strong>Password:</strong>
        <input type=\"password\" name=\"password\" value=\"\"  class=\"inputForm\" required>
    </label>
    <fieldset class=\"btns\">
            <input type='submit' value='login' class=\"buttonSubmit\"  name='log-in'/>
    </fieldset>
</form>";
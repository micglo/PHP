<?php
/**
 * Created by PhpStorm.
 * User: Kamil
 * Date: 2016-04-16
 * Time: 11:57
 */
if (isset($adminFormMessage) === false) {
    $adminFormMessage = "";
}
return "
<form method='post' action='Pracownik.php?page=pracownik' id=\"form\">
    <fieldset>
        <legend><h1>Dodaj nowe konto administratora</h1></legend>
        <div style='margin-bottom: 20px;'></div>
        <label>
            <strong>E-mail</strong>
            <input type='email' name='email' class=\"inputForm\" required/>
        </label>
        <label>
            <strong>Haslo</strong>
            <input type='password' name='password' class=\"inputForm\" required/>
        </label>
        <input type='submit' value='Wyslij' name='new-admin' class=\"buttonSubmit\"/>
    </fieldset>
    <p id='admin-form-message'>$adminFormMessage</p>
</form>
";
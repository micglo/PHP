<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-02
 * Time: 17:25
 */
if (isset($adminFormMessage) === false) {
    $adminFormMessage = "";
}
$entriesFound = isset( $getRodzajLista );
if ( $entriesFound === false ) {
    trigger_error( 'views/admin/NowyKangurView.php needs $entries' );
}

$entriesHTML = "<select name='klatka' class='inputForm2' required>";
while ( $entry = $getRodzajLista->fetchObject() ) {
    $href  = "Pracownik.php?page=&amp;id=$entry->IdKlatka";
     $entriesHTML .= "<option value='$entry->IdKlatka'>$entry->Klatka</option>";
}
$entriesHTML .= "</select>";
return "
<form method='post' action='Pracownik.php?page=kangur' id=\"form\">
    <fieldset>
        <legend><h1>Dodaj nowego Kangura</h1></legend>
        <div style='margin-bottom: 20px;'></div>
        <label>
            <strong>Data urodzenia</strong>
            <input type='date' name='urodziny' required class=\"inputForm\"/>
        </label>
        <label>
            <strong>Klatka</strong>
            <!--<input type='number' name='klatka' class=\"inputForm\" required/>-->
            $entriesHTML
        </label>
        <label>
            <strong>Rodzaj</strong>
            <select name=\"rodzaj\" class=\"inputForm2\" required >
                <option value=\"1\">Olbrzymi</option>
                <option value=\"2\">Szary</option>
                <option value=\"3\">Rudy</option>
            </select>
        </label>
        <input type='submit' value='Dodaj' name='new-kangur' class=\"buttonSubmit\"/>
    </fieldset>
    <p id='admin-form-message'>$adminFormMessage</p>
</form>
";
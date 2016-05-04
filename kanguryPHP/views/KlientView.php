<?php
if (isset($endMsg) === false) {
    $endMsg = "";
}
$entriesFound = isset( $dostepneKangury );
if ( $entriesFound === false ) {
    trigger_error( 'views/KlientView.php needs $entries' );
}
$data = new PageData();

$entriesHTML = "<select name='kangur' class='inputForm2' required>";
while ( $entry = $dostepneKangury->fetchObject() ) {
    //$href  = "AplikacjaPHP.php?page=&amp;id=$entry->IdKangur";
    $nazwijRodzaj = $data->nazwijRodzaj($entry->RodzajId);
    $wiekKangura = $data->wiek($entry->DataUrodzenia);
    $entriesHTML .= "<option value='$entry->IdKangur'>Wiek: $wiekKangura , rodzaj: $nazwijRodzaj</option>";
}
$entriesHTML .= "</select>";
return "
<form method='post' action='AplikacjaPHP.php?page=klient' id=\"form\">
    <fieldset>
        <label>
            <strong>Imie:</strong>
            <input type=\"text\" name=\"imie\" value=\"\"  maxlength=\"30\" class=\"inputForm\" required>
        </label>
        <label>
            <strong>Nazwisko:</strong>
            <input type=\"text\" name=\"nazwisko\" value=\"\"  maxlength=\"30\" class=\"inputForm\" required>
        </label>
        <label>
            <strong>Pesel:</strong>
            <input type=\"text\" name=\"pesel\" value=\"\"  maxlength=\"11\" class=\"inputForm\" required>
        </label>
        <label>
            <strong>Kangur:</strong>
            $entriesHTML
        </label>
        <fieldset class=\"btns\">
            <input type='submit' name='action' value='Wyslij' class=\"buttonSubmit\"/>
        </fieldset>
    </fieldset>
    <p id='admin-form-message'>$endMsg</p>
</form>
";


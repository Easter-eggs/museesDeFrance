<?php
    $vs_object_idno = $this->getVar('object_idno');
?>
<h1>Régie : enregistrement de localisation d'objet à la douchette</h1>

<p><b>Objets à localiser</b> : nom de l'objet (<?php print $vs_object_idno; ?>)</p>

<p>Scanner le code barre correspondant à l'emplacement (code-barres du rayonnage)</p>
<form action="<?php print __CA_URL_ROOT__ . "/index.php/museesDeFrance/Recolement/Localisation_resultats/"; ?>" method="post">
    <input type="hidden" name="idno" value="<?php print $vs_object_idno; ?>"/>
    <input type="text" name="storage_location_idno" />
    <input type="submit" value="OK">
</form>



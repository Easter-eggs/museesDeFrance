<?php
$joconde_available = $this->getVar('joconde_available');
?>
<h1>Installation du plugin Musées de France</h1>

<?php if ($joconde_available == "false") : ?>
<h2>Installation du profil</h2>
<p><a href="<?php print __CA_URL_ROOT__; ?>/index.php/museesDeFrance/InstallProfileThesaurus/Profile">installer le profil XML</a>.</p>
<?php endif; ?>

<h2>Installation des thésaurus du Service des Musées de France</h2>
<p><a href="<?php print __CA_URL_ROOT__; ?>/index.php/museesDeFrance/InstallProfileThesaurus/Thesaurus">installer les thésaurus</a>.</p>

<h2>Alignement des thésaurus du Service des Musées de France</h2>
<p>Permet la mise à jour d'un thésaurus en déplaçant les termes employés dans une branche spécifique</p>
<p><b>Attention</b> <i>Ce traitement n'est à utiliser que si vous n'avez utilisé le thésaurus que dans les objets (aucun lien avec les collections, entités, etc.).</i></p>
<p>Les anciens termes du thésaurus vont être déplacés dans une nouvelle branche, puis raccrochés en se basant sur leur dénomination sur les nouvelles branches du thésaurus. Les thésaurus des Musées de France n'exploitant pas d'identifiant unique, ce traitement est basé uniquement sur les libellés des termes.</p>
<p><a href="<?php print __CA_URL_ROOT__; ?>/index.php/museesDeFrance/InstallProfileThesaurus/Align">aligner les thésaurus</a>.</p>

<h2>Installation des tables de données pour l'inventaire</h2>
<p>CollectiveAccess a besoin d'un stockage spécifique pour l'inventaire : une fois les biens ajoutés à l'inventaire, leur fiche est figée.
    Vous pouvez continuer à modifier les informations de l'objet dans l'interface de CollectiveAccess mais la fiche Inventaire de l'objet
    (18 colonnes) est figée à sa date d'ajout.</p>
<p><a href="<?php print __CA_URL_ROOT__; ?>/index.php/museesDeFrance/InstallProfileThesaurus/Database">installer les tables de données</a>.</p>
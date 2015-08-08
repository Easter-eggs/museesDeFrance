<?php
/**
 * Created by PhpStorm.
 * User: gautier
 * Date: 07/08/15
 * Time: 09:16
 */

require_once("BaseObjectInventaire.php");
require_once("helpers/mapping_biensaffectes.php");

class BienAffecte extends BaseObjectInventaire {
    function __construct($num = null)
    {
        $this->tablename = "inventaire_inventaire";
        $this->fields = array("ca_id", "numinv","numinv_sort","numinv_display", "designation", "designation_display", "mode_acquisition", "donateur", "date_acquisition", "avis", "prix", "date_inscription", "date_inscription_display", "observations", "inscription", "materiaux", "techniques", "mesures", "etat", "auteur", "auteur_display", "epoque", "utilisation","provenance");

        $this->mapping = getMappingBiensAffectes();

        parent::__construct($num);
    }

    function getHtmlTableHeaderRow() {
        return "<thead><tr><th>Numéro d'inventaire</th><th>Désignation</th><th>Auteur</th><th>Date d'inscription</th><th>Fonctions</th></tr></thead>";
    }

    function getHtmlTableRow() {
        return "<tr><td>".$this->numinv_display."</td><td>".$this->designation_display."</td><td>".$this->auteur_display."</td><td>".$this->date_inscription_display."</td><td></td></tr>";
    }
}
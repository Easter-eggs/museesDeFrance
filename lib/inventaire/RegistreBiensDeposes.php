<?php
/**
 * Created by PhpStorm.
 * User: gautier
 * Date: 08/08/15
 * Time: 09:33
 */

require_once("BaseRegistre.php");

class RegistreBiensDeposes extends BaseRegistre {
    function __construct($num = null)
    {
        $this->tablename = "inventaire_depot";
        $this->fields = array("numinv","designation","materiaux","techniques","mesures","etat","epoque","utilisation","provenance");
        $this->numtype = "numdep";
        $this->objectmodel = "BienDepose";

        parent::__construct($num);
    }

}
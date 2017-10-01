<?php

class Model_Agent extends CI_Model
{
    function GetAllAgents($numFormation)
    {
        
        // Il faut mettre le numéro de formation comme une chaine de caractères dasn la requete car il y a des lettres dedans
    $sql = $this->db->query("select prenom,nom from agent, inscription where Agent.code = inscription.codeAgent and numeroFormation='".$numFormation."'");
    return $sql->result();
        
    }
    
}


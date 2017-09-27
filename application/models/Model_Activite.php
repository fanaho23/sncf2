<?php

class Model_Activite extends CI_Controller{
    
    public function GetAllActivites()    
            {
                $sql = $this->db->query("Select* from activite");
                return $sql->result();
            }
}
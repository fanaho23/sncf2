<?php

class Model_Activite extends CI_Model{
    
    public function GetAllActivites()    
            {
                $sql = $this->db->query("select * from activite");
                return $sql->result();
            }
}
?>
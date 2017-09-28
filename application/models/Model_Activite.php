<?php

class Model_Activite extends CI_Model{
    
    public function GetAllActivites()    
            {
                $sql = $this->db->query("select * from activite");
                return $sql->result();
            }
    public function GetIdActivites()
            {
                $sql = $this->db->query("SELECT numero FROM activite");
                return $sql->result();
            }
}
?>
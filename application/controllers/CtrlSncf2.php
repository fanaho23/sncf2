<?php

class CtrlSncf2 extends CI_Controller
{
    public function index()
            {
                $data['activite']="Les Activités:";
                $this->load->model("Model_Activite");
                $data['lesActivites']= $this->Model_Activite->GetAllActivites() ;
                $this->load->view("v_Activite",$data);
            }
    public function AfficherLesFormations()
            {
                $this->load->model("Model_Activite");
                
                $this->load->model("Model_Formation");
//Je n'arrive pas a récuperer l'id de la categorie j'ai donc du crée une fonction GetIdActivites qui recupere le numero et je charge la function de mon model en parametre de la function GetAllFormations
                $data['lesFormations'] = $this->load->GetAllFormations($data['activite']= $this->Model_Activite->GetIdActivites());
                $this->load->view("v_Activite",$data);
        
            }
}

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
                //$this->load->model("Model_Activite");
                
        // On récupère le numéro de l'activité grace à l'appel eAJAX en GET ==> voir dans le fichier lesFonctions.js
                $numActivite = $_GET['numActivite'];
        
                $this->load->model("Model_Formation");
//Je n'arrive pas a récuperer l'id de la categorie j'ai donc du crée une fonction GetIdActivites qui recupere le numero des activites et je charge la function de mon model en parametre de la function GetAllFormations
                //$data['lesFormations'] = $this->load->GetAllFormations($data['activite']= $this->Model_Activite->GetIdActivites());
                
                $data['lesFormations'] = $this->Model_Formation->GetAllFormations($numActivite);
                
                $this->load->view("v_Formation",$data);
        
            }
    public function AfficherLesAgents()
            {
                $numFormation = $_GET['numFormation'];
                $this->load->model("Model_Agent");
                $data['lesAgents'] = $this->Model_Agent->GetAllAgents($numFormation);
                $this->load->view("v_Agent",$data);
            }
}

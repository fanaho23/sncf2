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
                $activite = $_GET['activite'];
                $this->load->model("Model_Formation");
                $data['lesFormations'] = $this->load->GetAllFormations($activite);
                $this->load->view("v_Activite",$data);
        
            }
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Proposition extends CI_Controller {

        public function proposer_phase1() {
            $alefa['idobj'] = $this->input->get('idobjet');
            $alefa['iddestinateur'] = $this->input->get('idpersonne');
            $this->load->model('Object_model');
            $id = $this->session->userdata('idpersonne');
            $alefa['obj'] = $this->Object_model->get_Object_byid($id);

            $this->load->view('mineobject',$alefa);
        }

        public function proposer() {
            $proposeur = $this->session->userdata('idpersonne');
            $idmine = $this->input->get('mine');
            $idyours = $this->input->get('yours');
            $destinateur = $this->input->get('destinateur');
            $req = "insert into proposition values(default,%s,%s,%s,%s,default)";

            $requete = sprintf($req,$proposeur,$destinateur,$idmine,$idyours);

            $this->db->query($requete);
            
            $this->load->view('effectuer');
        }

    }
?>
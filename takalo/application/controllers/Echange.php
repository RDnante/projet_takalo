<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Echange extends CI_Controller {
        
        public function getlist() {
            $id = $this->session->userdata('idpersonne');
            $this->load->model('Echange_model');
            
            $propostion["prop"] = $this->Echange_model->get_proposition_nom($id);

            $this->load->view('listproposition',$propostion);

        }

        public function accept($id) {
            $this->load->model('Echange_model');

            $this->Echange_model->accepter_proposition($id);

            $this->load->view('effectuer');
        }

        
    }
?>
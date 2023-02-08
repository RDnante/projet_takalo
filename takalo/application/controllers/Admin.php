<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {
        public function index() {
            $this->load->model('Admin_model');

            $alefa['inscrit'] = $this->Admin_model->get_inscrit();
            $alefa['echange'] = $this->Admin_model->get_nombre_echange();

            $this->load->view('acceuilAdmin',$alefa);
        }
    }

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Acceuil extends CI_Controller {
    public function index() {

        $this->load->model('Login_model');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $id = $this->Login_model->verification($email,$mdp);

        $this->red($id[0]['idpersonne'],$id[0]['est_admin']);
    }

    public function revenir() {
        $this->load->view('acceuilClient');
    }

    public function red($id,$admin) {
        if ($id != null && $admin == 1) {
            $this->session->set_userdata('idpersonne',$id);

            redirect('Admin');            
        }
        else if($id != null && $admin == 0) {
            $this->session->set_userdata('idpersonne',$id);
            $est['ad'] = 'client';
            $this->load->view('acceuilClient',$est);
        }
        else {
            redirect('Welcome');
        }
    }

    public function inscription() {
        $this->load->model('Login_model');
        $email = $this->input->post('email');
        $nom = $this->input->post('nom');
        $mdp = $this->input->post('mdp');
        $date = $this->input->post('date');

        $this->Login_model->inscription($email,$nom,$mdp,$date);

        redirect('Welcome');
    }
}
?>
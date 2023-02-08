<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class List_object extends CI_Controller {

        public function getlistbyid() {
            $this->load->model('Object_model');
            $id = $this->session->userdata('idpersonne');

            $obj['obj'] = $this->Object_model->get_Object_byid($id);

            $this->load->view('listobject2',$obj);
        }

        public function getlist() {
            $this->load->model('Object_model');
            $id = $this->session->userdata('idpersonne');

            $obje['obj'] = $this->Object_model->get_Object_dispo($id);

            $this->load->view('listobject',$obje);

        }

        public function send_input() {
            $this->load->model('Object_model');
            $cat['categorie'] = $this->Object_model->get_categorie();

            $this->load->view('inserer',$cat);
        }

        public function traitement_objets()
        {
            if (isset($_FILES['photo'])) {
                $dossier = 'assets/img/products/';
                $fichier = basename($_FILES['photo']['name']);

                $extensions = array('.png', '.gif', '.jpg', '.jpeg');

                $extension = strrchr($_FILES['photo']['name'], '.');

                if (!in_array($extension, $extensions)) {
                    $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
                }

                $taille_maxi = 1000000;

                $taille = filesize($_FILES['photo']['tmp_name']);
                if ($taille > $taille_maxi) {
                    $erreur = 'Le fichier est trop gros...';
                    //echo $erreur;
                } else {
                    //echo "mety";
                }

                $fichier = strtr($fichier,     'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',     'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier)) //si
                {
                    //echo 'Upload effectué avec succès !';
                } else {
                    //echo "Echec de l'upload !";
                }
                $idpersonne = $this->session->userdata('idpersonne');
                $this->load->model('Object_model');
                $this->Object_model->inserer($idpersonne,$_POST['categorie'], $_POST['nom'], $_POST['description'],$fichier, $_POST['prix']);
                
                $this->load->view('effectuer');
            }
        }

        public function upload_file() {
            $config['upload_path'] = base_url()."assets/img/products/";
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 100;
            $config['max_width'] = 1824;
            $config['max_height'] = 1608;
          
            $this->load->library('upload', $config);
          
            if (!$this->upload->do_upload('userfile')) {
              $error = array('error' => $this->upload->display_errors());
              echo $error;
            } else {
                echo "nety";
              $data = array('upload_data' => $this->upload->data());
              $fichier = $data['upload_data']['file_name'];
              $idpersonne = $this->session->userdata('idpersonne');
              $this->load->model('Object_model');
              $this->Object_model->inserer($idpersonne,$_POST['categorie'], $_POST['nom'], $_POST['description'],$fichier, $_POST['prix']);
            }
        }
    }

?>
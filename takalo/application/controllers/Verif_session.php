<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Verif_session extends CI_Controller {
         
        public __construct() {
            if (!$this->session->userdata('idpersonne')) {
                Redirect('Welcome');
            }
        }
    }

?>
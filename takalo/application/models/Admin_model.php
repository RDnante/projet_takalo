<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin_model extends CI_Model {

        public function get_inscrit() {
            $requete = "select count(*)-1 as nombre from personne";

            $query = $this->db->query($requete);

            $result = $query->row_array();

            return $result['nombre'];
        }

        public function get_nombre_echange() {
            $requete = "select count(*) as nombre from actions";

            $query = $this->db->query($requete);

            $result = $query->row_array();

            return $result['nombre'];
        }
    }

?>
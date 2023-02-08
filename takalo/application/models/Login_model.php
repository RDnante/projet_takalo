<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Login_model extends CI_Model {
        
        
        
        public function verification($email,$mdp) {
            $req = "select * from personne where email = '%s' and mdp = '%s'";
            $requete = sprintf($req,$email,$mdp);

        
            $query = $this->db->query($requete);

            $result = $query->result_array();

            $valiny = array();

            foreach ($result as $row) {
                $valiny = $row;
            }

            return $result;
        }

        public function get_admin() {
            $req = "select * from personne where est_admin = 1";
            $query = $this->db->query($req);

            $result = $query->result_array();

            $valiny = array(
                'email' => '',
                'mdp' => ''
            );

            foreach ($result as $row) {
                $valiny['email'] = $row['email'];
                $valiny['mdp'] = $row['mdp'];
            }

            return $valiny;
        }

        public function inscription($email,$nom,$mdp,$date) {
            $req = "insert into personne values(default, '%s', '%s', '%s', '%s', default)";
            $requete = sprintf($req,$email,$mdp,$nom,$date);

            echo $requete;
            $this->db->query($requete);
        }
    }
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Object_model extends CI_Model {

        public function get_Object_byid($id) {
            $req = "select * from objects where idpersonne = '%s'";
            $requete = sprintf($req,$id);

            $query = $this->db->query($requete);

            // echo $requete;
            $result = $query->result_array();

            return $result;
        }

        public function get_object_dispo($id) {
            $req = "select * from objects where idpersonne != '%s'";
            $requete = sprintf($req, $id);

            $query = $this->db->query($requete);

            // echo $requete;
            $result = $query->result_array();

            return $result;
        }

        public function get_categorie() {
            $req = "select * from categorie";
            $query = $this->db->query($req);

            $result = $query->result_array();

            return $result;
        }

        public function inserer($idpersonne,$idcat,$nom,$describ,$photos,$prix) {
            $req = "insert into objects values (default,%s,%s,'%s','%s','%s',%s)";

            $requete = sprintf($req,$idpersonne,$idcat,$nom,$describ,$photos,$prix);

            // echo $requete;
            $this->db->query($requete);
        }

    }

?>  
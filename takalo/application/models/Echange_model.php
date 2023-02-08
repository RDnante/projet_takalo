<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Echange_model extends CI_Model {

        public function get_proposition($id) {
            $req = "select * from proposition where iddestinateur = %s and accepter = false";
            $requete = sprintf($req,$id);

            $query = $this->db->query($requete);

            $result = $query->result_array();

            return $result;
        }

        public function get_proposition_nom($id) {
            $proposition = $this->get_proposition($id);

            // $valiny = array(
            //     'proposition' => array(),
            //     'proposeur' => array(),
            //     'nom_obj_prop' => array(),
            //     'nom_obj_desti' => array()
            // );

            $valiny = array();

            foreach ($proposition as $prop) {
                $valiny[] = $prop['idproposition'];
                $valiny[]= $this->get_nom_personne($prop['idproposeur']);
                $valiny[] = $this->get_nom_object($prop['obj_proposeur']);
                $valiny[] = $this->get_nom_object($prop['obj_destinateur']);
            }

            return $valiny;
        }

        public function accepter_proposition($id) {
            $details = $this->get_object_echanger($id);
            $this->load->model('Actions_model');

            $iddestinataire = $this->session->userdata('idpersonne');

            $this->modifier_titulaire($details['obj_proposeur'],$iddestinataire);
            $this->modifier_titulaire($details['obj_destinateur'],$details['idproposeur']);



            $req1 = "update proposition set accepter = 'true' where idproposition = %s";
            $requete = sprintf($req1,$id);
            $this->db->query($requete);

            $this->Actions_model->inserer_actions($details['idproposeur'],$iddestinataire,$details['obj_proposeur'],$details['obj_destinateur']);
            $this->delete_proposition($details['obj_proposeur'],$details['obj_destinateur']);
        }

        public function delete_proposition($idprop,$iddesti) {
            $req = "delete from proposition where obj_destinateur = %s or obj_proposeur = %s";
            $req1 = sprintf($req,$idprop,$iddesti);
            $req2 = sprintf($req, $iddesti,$idprop);

            $this->db->query($req1);
            $this->db->query($req2);
        }   

        public function modifier_titulaire($idobjet,$idpersonne) {
            $req = "update objects set idpersonne = %s where idobject = %s";
            $requete = sprintf($req,$idpersonne,$idobjet);

            $this->db->query($requete);
        }

        public function get_object_echanger($id) {
            $req = "select * from proposition where idproposition = %s";
            $requete = sprintf($req,$id);

            $query = $this->db->query($requete);
            $result = $query->row_array();

            return $result;
        }

        public function get_nom_object($id) {
            $req = "select nom from objects where idobject = %s";
            $requete = sprintf($req,$id);

            $query = $this->db->query($requete);

            $result = $query->row_array();

            return $result['nom'];
        }

        public function get_nom_personne($id) {
            $req = "select nom from personne where idpersonne = %s";
            $requete = sprintf($req,$id);

            $query = $this->db->query($requete);

            $result = $query->row_array();

            return $result['nom'];
        }
    }
?>
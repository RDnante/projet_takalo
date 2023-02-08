<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Actions_model extends CI_Model {

        public function inserer_actions($proposeur,$destinateur,$obj_prop,$obj_dest) {
            $req = "insert into actions values (default,'ECHANGE',%s,%s,%s,%s,default)";
            $request = sprintf($req,$proposeur,$destinateur,$obj_prop,$obj_dest);

            $this->db->query($request);
        }
    }

?>
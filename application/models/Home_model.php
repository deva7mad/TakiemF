<?php
class Home_model extends CI_Model {
    function getAll() {
        
        $q = $this->db->get('site_mainpage');
        if($q->num_rows() > 0) {
         foreach ($q->result() as $row) {
            $data[] = $row;
        }
        return $data;   
        }
    }
    
    function updateHome($data) {
        
        $this->db->where('id', 1);
        $this->db->update("site_mainpage", $data);
    }
      /** Insert User */ 
         function insertuser($data) {
            $this->db->insert("newsletter_persons", $data);
        }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


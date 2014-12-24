<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of member
 *
 * @author root
 */
class member extends CI_Model {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function validateLogin($username) {
        $query =  $this->db->get_where('member_studio_musik', array('username_member' => $username));
        
        return $query->row_array();
    }
}

?>

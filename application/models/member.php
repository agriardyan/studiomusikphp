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

    public function validate_login($username, $password) {
        $query = $this->db->get_where('member_studio_musik', array('USERNAME_MEMBER' => $username));

        $row = $query->row();

        if(!is_null($row)) {
            if ($row->USERNAME_MEMBER === $username && $row->PASSWORD_MEMBER === $password) {
                return 2;
            } else {
                return 1;
            }
        } else {
            return 0;
        }


        return $query->row_array();
    }

}

?>

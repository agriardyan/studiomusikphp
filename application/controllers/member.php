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
class member extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function halamanutamamember() {
        $this->load->view('halaman-utama-member');
    }
    
}

?>

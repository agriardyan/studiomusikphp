<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author root
 */
class home extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function welcome() {
        $this->load->view('menubar-home');
        $this->load->view('halaman-welcome-home');
    }
    
    public function help() {
        $this->load->view('menubar-home');
        $this->load->view('halaman-help-home');
        
    }
    
}

?>

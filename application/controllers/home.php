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
    
    public function member() {
        $this->load->view('menubar-home');
        $this->load->view('halaman-signin-member');
    }
    
    public function help() {
        $this->load->view('menubar-home');
        $this->load->view('halaman-help-home');
    }
    
    public function validatemember() {
        
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        
        $this->load->model('member');
        $result = $this->member->validate_login($username, $password);
        
        switch ($result) {
            case 0:
                $this->login_error('Unregistered username');
                break;
            case 1:
                $this->login_error('Invalid password');
                break;
            case 2:
                redirect('member/halamanutamamember');
                break;
            default:
                break;
        }
        
    }
    
    public function login_error($error) {
        $data['error'] = $error;
        $this->load->view('menubar-home');
        $this->load->view('halaman-signin-member', $data);
    }
    
    
}

?>

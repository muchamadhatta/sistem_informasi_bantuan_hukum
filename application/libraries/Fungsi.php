<?php

Class Fungsi {
    protected $ci;
    function __construct (){
        $this->ci =& get_instance();
    }
    function user_login(){
        $this->ci->load->model('M_user');
        $id_user = $this->ci->session->userdata('iduser');
        $user_data = $this->ci->M_user->get($id_user)->row();
        return $user_data;
        
    }
}
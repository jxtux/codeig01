<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['contenido'] = 'home/inicio';
        $this->load->view('template',$data);
    }

    public function otro() {
        $data['contenido'] = 'home/otro';
        $this->load->view('template',$data);
    }

}

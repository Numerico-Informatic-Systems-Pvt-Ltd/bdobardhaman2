<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class test extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
    }

    public function index() {
        $this->load->view('test/index');
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index() {
        $data["page_title"] = "Admin Portal";
        $this->load->view('frontend/index', $data);
    }
}
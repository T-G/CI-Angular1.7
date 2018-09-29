<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Logiin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
    {
       $this->load->view('partials/login');
        
    }

}

/* End of file Logiin.php */

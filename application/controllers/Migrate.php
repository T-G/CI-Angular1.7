<?php
class Migrate extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

        public function index()
        {
                $this->load->library('migration');

                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                } else 
                {
                        echo "Migration Successfull!!";
                }
        }

}
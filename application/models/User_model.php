<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function insert_user($user_data){
        return $this->db->insert('users', $user_data);
    }
    

}

/* End of file User_model.php */

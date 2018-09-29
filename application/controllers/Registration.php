<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function index()
    {
        $this->load->view('partials/registration');
        
    }

    public function create_user(){
        // Modify data as you wish
        // Server side validation can be placed here too
        $user_data = $this->input->post();
        $user_data['user_password'] = sha1($user_data['user_password']);

        $this->load->model('user_model');
        // JSON Response is just encoded PHP array
        // without JSON response NG couldn't recognise Data Properly
        if($this->user_model->insert_user($user_data) === true){
            echo json_encode(array(
                    'success' => true,
                    'message'  =>   'Registration Successfull!'
            ));
        } else {
            echo json_encode(array(
                'success' => false,
                'message'  =>   'Registration Failed!'
            ));
        }
    }

}

/* End of file Registration.php */

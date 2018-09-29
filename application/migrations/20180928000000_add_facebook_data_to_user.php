<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_facebook_data_to_user extends CI_Migration {

    // Adding firlds to an existing users table
    public function up() {
        $fields = array(
            'user_social_id' => array(
                'type'  =>  'INT',
                'null'  => TRUE,
            ),
            'user_profile_pic' => array(
                'type'  => 'text',
                'null'  =>  TRUE,
            ),
            'user_timezone' => array(
                'type'  => 'INT',
                'null'  => TRUE
            ),
            'user_language' => array(
                'type'  =>  'varchar',
                'constraint'    => '10',
                'null'  =>  TRUE,
            ),
            'user_grnder'   => array(
                'type'  =>  'ENUM("male","female")',
                'null'  =>  TRUE,
            ),
        );

        $this->dbforge->add_column('users', $fields);
    }

    public function down() {
        $this->dbforge->drop_column('users', $fields);
    }

}

/* End of file add_facebook_data_to_user.php */

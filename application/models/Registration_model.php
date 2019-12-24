<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $_table = "tb_user";

    public $id;
    public $name;
    public $email;
    public $password;
    public $image = "default.jpg";
    public $role_id;
    public $is_active;
    public $date_created;


    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'password',
                'label' => 'Password1',
                'rules' => 'required|max_length[3]|trim|matches[password-confirm]'
            ],
            [
                'field' => 'password-confirm',
                'label' => 'Password-Confirm',
                'rules' => 'required|matches[password1]'
            ]
        ];
    }

    public function regist()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->image = "default.jpg";
        $this->role_id = 2;
        $this->is_active = 1;
        $this->date_created = time();

        $this->db->insert($this->_table, $this);
    }
}

/* End of file: Registration_model.php */

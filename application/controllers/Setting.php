<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        # code...
    }

    public function user_profile()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('setting/user_profile', $data);
    }
}

/* End of file: Setting.php */

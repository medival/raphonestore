<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Dashboard Overview | RAPHONESTORE ";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('dashboard/dashboard', $data);
    }
}

/* End of file: Overview.php */

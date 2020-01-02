<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_model");
        $this->load->model("Brand_model");
    }

    public function index($data = NULL)
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data["product"] = $this->Product_model->getAll();
        $data["brand"] = $this->Brand_model->getAll();
        $this->load->view('visit/stock', $data);
    }

    public function order()
    {
        $post = $this->input->post();
        $data['title'] = "Edit Stock | RAPHONESTORE ";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $product = $this->Product_model;

        $this->id_product = $post["id_product"];
        $data["qty"] = $post["qty"];
        $data["stok"] = $post["stok"];
        $product = $this->Product_model;
        $data["product"] = $product->getById($this->id_product);
        $product->update_stok();

        if (!$data["product"]) show_404();

        $this->load->view("visit/order", $data);
    }

    public function details($id)
    {
        $data['title'] = "Details Item | RAPHONESTORE ";

        $product = $this->Product_model;

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();

        $this->load->view("visit/details", $data);
    }
}

/* End of file: Site.php */

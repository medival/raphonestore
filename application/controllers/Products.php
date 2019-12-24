<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_model");
        // $this->load->helper("is_loggin");
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect('products/stock');
    }

    public function stock()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }
        $data['title'] = "Stok Tersedia | RAPHONESTORE";
        $data["product"] = $this->Product_model->getAll();

        $this->load->view('product/stock', $data);
    }

    public function add()
    {
        $data['title'] = "Tambah Product Baru | RAPHONESTORE ";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }

        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('products/stock');
        }
        $this->load->view('product/add', $data);
    }

    public function save_form()
    {

        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }
        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('products/stock');
        }

        $this->load->view('product/add', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Product_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data dihapus');
            redirect(site_url('products/stock'));
        }
    }

    public function edit($id = null)
    {

        $data['title'] = "Edit Stock | RAPHONESTORE ";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }
        if (!isset($id)) redirect('products/stock');

        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();

        $this->load->view("product/edit", $data);
    }

    public function update_form($id = NULL)
    {

        $this->load->library('form_validation');
        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules_update());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect("products/stock ");
        } else {
            $product->update();
            // print_r($validation->run())->display_error();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect("products/stock ");
        }
        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
    }

    // public function order()
    // {
    //     $post = $this->input->post();
    //     $data['title'] = "Edit Stock | RAPHONESTORE ";
    //     $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    //     $product = $this->Product_model;

    //     $this->id_product = $post["id_product"];
    //     $data["qty"] = $post["qty"];
    //     $data["product"] = $product->getById($this->id_product);

    //     if (!$data["product"]) show_404();

    //     $this->load->view("product/order", $data);
    // }
}

/* End of file: Products.php */

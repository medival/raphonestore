<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_model");
        $this->load->model("Brand_model");
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


    // Add Brand
    public function add_brand()
    {
        $data['title'] = "Tambah Brand Baru | RAPHONESTORE ";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }

        $brand = $this->Brand_model;
        $validation = $this->form_validation;
        $validation->set_rules($brand->rules());

        if ($validation->run()) {
            $brand->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('products/stock');
        }
        $this->load->view('brand/add', $data);
    }


    public function brand_save_form()
    {

        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }
        $brand = $this->Brand_model;
        $validation = $this->form_validation;
        $validation->set_rules($brand->rules());

        if ($validation->run()) {
            if ($brand->save()) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            } else {
                $this->session->set_flashdata('success', 'Data sudah ada');
            }
            // redirect('products/stock');
        }

        $this->load->view('brand/add', $data);
    }

    public function stock_brand()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }
        $data['title'] = "Stok Tersedia | RAPHONESTORE";
        $data["brand"] = $this->Brand_model->getAll();

        $this->load->view('brand/stock', $data);
    }

    public function delete_brand($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Brand_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data dihapus');
            redirect(site_url('products/stock_brand'));
        }
    }

    public function edit_brand($id = null)
    {

        $data['title'] = "Edit Brand | RAPHONESTORE ";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }
        if (!isset($id)) redirect('products/stock_brand');

        $brand = $this->Brand_model;
        $validation = $this->form_validation;
        $validation->set_rules($brand->rules());

        if ($validation->run()) {
            $brand->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["brand"] = $brand->getById($id);
        if (!$data["brand"]) show_404();

        $this->load->view("brand/edit", $data);
    }

    public function update_brand($id = NULL)
    {

        $this->load->library('form_validation');
        $brand = $this->Brand_model;
        $validation = $this->form_validation;
        $validation->set_rules($brand->rules());

        if ($validation->run()) {
            $brand->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect("products/stock_brand ");
        } else {
            $brand->update();
            // print_r($validation->run())->display_error();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect("products/stock_brand ");
        }
        $data["brand"] = $brand->getById($id);
        if (!$data["brand"]) show_404();
    }
}

/* End of file: Products.php */

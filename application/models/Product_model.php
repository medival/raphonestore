<?php defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "tb_product";

    public $id_product;
    public $nama_product;
    public $harga_product;
    public $spesifikasi_product;
    public $varian_product;
    public $stok_product;
    // public $image = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'nama_product',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'spesifikasi_product',
                'label' => 'Spesifikasi',
                'rules' => 'required'
            ],

            [
                'field' => 'harga_product',
                'label' => 'Harga',
                'rules' => 'numeric'
            ],

            [
                'field' => 'varian_product',
                'label' => 'Varian',
                'rules' => 'required'
            ],

            [
                'field' => 'stok_product',
                'label' => 'Stok',
                'rules' => 'required'
            ]
        ];
    }

    public function rules_update()
    {
        return [
            [
                'field' => 'nama_product',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'spesifikasi_product',
                'label' => 'Spesifikasi',
                'rules' => 'required'
            ],

            [
                'field' => 'harga_product',
                'label' => 'Harga',
                'rules' => 'numeric'
            ],

            [
                'field' => 'varian_product',
                'label' => 'varian',
                'rules' => 'required'
            ],

            [
                'field' => 'stok_product',
                'label' => 'stok',
                'rules' => ''
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_product" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_product = uniqid(rand(1, 9999));
        $this->nama_product = $post["nama_product"];
        $this->spesifikasi_product = $post["spesifikasi_product"];
        $this->harga_product = $post["harga_product"];
        $this->varian_product = $post["varian_product"];
        $this->stok_product = $post["stok_product"];
        $this->image_product = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_product = $post["id_product"];
        $this->nama_product = $post["nama_product"];
        $this->spesifikasi_product = $post["spesifikasi_product"];
        $this->harga_product = $post["harga_product"];
        $this->varian_product = $post["variasi_product"];
        $this->stok_product = $post["stok_product"];

        if (!empty($_FILES["image_product"]["name"])) {
            $this->image_product = $this->_uploadImage();
        } else {
            $this->image_product = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id_product' => $post['id_product']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_product' => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_product;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image_product')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->image_product != "default.jpg") {
            $filename = explode(".", $product->image_product)[0];
            return array_map('unlink', glob(FCPATH . "upload/product/$filename.*"));
        }
    }

    public function update_stok()
    {
        $post = $this->input->post();
        $this->id_product = $post["id_product"];
        $this->nama_product = $post["nama_product"];
        $this->spesifikasi_product = $post["spesifikasi_product"];
        $this->harga_product = $post["harga_product"];
        $this->varian_product = $post["varian_product"];
        $qty = $post["qty"];
        $stok = $post["stok"];
        $this->stok_product  = $stok - $qty;

        $this->db->update($this->_table, $this, array('id_product' => $post['id_product']));
    }
}

<?php defined('BASEPATH') or exit('No direct script access allowed');

class Brand_model extends CI_Model
{
    private $_table = "tb_brand";

    public $id_brand;
    public $nama_brand;
    // public $image = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'nama_brand',
                'label' => 'Nama',
                'rules' => 'required|is_unique[tb_brand.nama_brand]'
            ]
        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_brand" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_brand = random_int(0, 9999);
        $this->nama_brand = $post["nama_brand"];
        $this->image_brand = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_brand = $post["id_brand"];
        $this->nama_brand = $post["nama_brand"];

        if (!empty($_FILES["image_brand"]["name"])) {
            $this->image_brand = $this->_uploadImage();
        } else {
            $this->image_brand = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id_brand' => $post['id_brand']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_brand' => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/brand/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_brand;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image_brand')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $brand = $this->getById($id);
        if ($brand->brand_image != "default.jpg") {
            $filename = explode(".", $brand->brand_image)[0];
            return array_map('unlink', glob(FCPATH . "upload/brand/$filename.*"));
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

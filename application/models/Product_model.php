<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "tbl_barang";

    public $product_id;
    public $name;
    public $price_buy;
    public $price_sell;
    public $image = "default.jpg";
    public $stock;

    public function rules(){
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'price_buy',
                'label' => 'Buy',
                'rules' => 'numeric'
            ],
            [
                'field' => 'price_sell',
                'label' => 'Sell',
                'rules' => 'numeric'
            ],
            [
                'field' => 'stock',
                'label' => 'Stock',
                'rules' => 'numeric'
            ]
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table,["product_id" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name =$post["name"];
        $this->price_buy =$post["price_buy"];
        $this->price_sell =$post["price_sell"];
        $this->image =$this->_uploadImage();
        $this->stock =$post["stock"];

        // check if data exist
        $check = $this->db->get_where($this->_table,array('name'=>$post['name']));
        if($check->num_rows() == 0) {
            return $this->db->insert($this->_table,$this);
        } else {
            return false;
        }

    }
    
    public function update(){
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name =$post["name"];
        $this->price_buy =$post["price_buy"];
        $this->price_sell =$post["price_sell"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        $this->stock =$post["stock"];
        return $this->db->update($this->_table,$this,array('product_id'=>$post["id"]));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table,array("product_id"=>$id));
    }

    private function _uploadImage(){
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $this->product_id;
        $config['overwrite']			= true;
        $config['max_size']             = 100; // 100KB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id){
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
        }
    }

}
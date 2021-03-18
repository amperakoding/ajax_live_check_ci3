<?php defined('BASEPATH') or exit('No Direct script access allowed');

class Product_model extends CI_Model
{

  public function get_by_product_code($product_code)
  {
    $this->db->where('product_code', $product_code);

    $this->db->limit(1);

    return $this->db->get('product')->row();
  }
}

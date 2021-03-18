<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	public function tambah()
	{
    $data['page_title']       = 'Tambah Data';

		$this->load->view('backend/product/tambah', $data);
	}

	public function check_product_code()
	{
		$this->load->model('Product_model');
		
		$product_code 			= $this->input->post('product_code');

		$check_product_code = $this->Product_model->get_by_product_code($product_code);

		if($product_code != NULL)
		{
			if($check_product_code)
			{
				echo "<div class='text-red'>Kode Produk sudah ada, silahkan ganti dengan yang lain</div>";
			}
			else{
				echo "<div class='text-green'>Kode Produk tersedia</div>";
			}
		}
	}
}

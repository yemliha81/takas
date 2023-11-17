<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        if(empty($_SESSION['lang'])){
            $_SESSION['lang'] = 'tr';
        }
        if(empty($_SESSION['lang_array'])){
            $_SESSION['lang_array'] = array('tr', 'en');
        }
    }
    
	public function detail($id)
	{
		
		$data['product'] = $this->db->select('*')
		    //->join('category_table', 'products_table.cat_id = category_table.id', 'left')
    		->where('products_table.id', $id)
    		->get('products_table')->row_array();
    	    
    	$this->load->view('product_view', $data);

	}

	public function product_list()
	{
		
		$data['products'] = $this->db->select('*')
			->where('is_deleted', 0)
    		->get('products_table')->result_array();
    	
    	    
    	$this->load->view('product_list_view', $data);

	}
	
	public function search(){
	    $post = $this->input->post();
	    
	    $text = $post['txt'];
	    
	    
	    $data['results'] = $this->db->select('*')
	        ->like('product_name_'.$_SESSION['lang'], $text, 'both')
	        ->get('products_table')->result_array();
	        
	        
	   $this->load->view('search_view', $data);
	    
	}
	
	
}

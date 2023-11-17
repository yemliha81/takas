<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public $data = array();
    
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
    
	public function index()
	{
	    
		//$data['banners'] = $this->db->select('*')->order_by('sort', 'ASC')->get('banner_table')->result_array();
		
		$data['products'] = $this->db->select('*')
		//->join('category_table', 'products_table.cat_id = category_table.id', 'left')
		->where('is_deleted', 0)
	    ->get('products_table')->result_array();
	    
	    //debug($data);
		
		
		$this->load->view('home_view', $data);
	}
	
	public function change_lang()
	{
		if($_POST['lang']){
		    $_SESSION['lang'] = $_POST['lang'];
		    echo 'ok';
		}
	}
	
}

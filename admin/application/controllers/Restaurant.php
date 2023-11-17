<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        if(empty($_SESSION['admin_logged_in'])){
            redirect();
        }
        if(empty($_SESSION['lang'])){
            $_SESSION['lang'] = 'tr';
        }
        
        if(empty($_SESSION['lang_array'])){
            $_SESSION['lang_array'] = array('tr', 'en');
        }
    }
    
	public function restaurant_list()
	{
	    
	    $data['page'] = $_GET['page'] ?? 1;
	    
		$count = $this->db->count_all_results('restaurants_table');
		
		$data['total']= round(($count/20), 0) + 1;
		
		//debug($data);
	    
		$data['restaurants'] = $this->db->select('*')
		    ->where('is_deleted', '0')
		    ->limit(20, (($data['page']-1)*20))
			->get('restaurants_table')->result_array();
			
		
		$data['menu'] = '2';
		$this->load->view('restaurant/restaurant_list_view', $data);
	}
	
	public function add_restaurant()
	{
		$data['menu'] = '21';
		$this->load->view('restaurant/add_restaurant_view', $data);
	}
	
	public function add_restaurant_post()
	{
		require DOC_ROOT . 'simpleImage/SimpleImage.php';
		$post = $this->input->post();
		//debug($post);
		
		
		if(!empty($_FILES['restaurant_image'])){
			$file = $_FILES['restaurant_image'];
			$img_name = img_seo_name(time().'-'.$post['restaurant_name']).'.jpg';
			if( ( $file['type'] == 'image/jpeg' ) OR ( $file['type'] == 'image/png' ) ){
				
				if( ( $file['size'] > 0 ) AND ( $file['size'] < 3000000 ) ){
					
				//File Upload
					$from_file = $file['tmp_name'];
					$to_file = DOC_ROOT . '/files/restaurant/img/100/' .$img_name;
					$to_file2 = DOC_ROOT . '/files/restaurant/img/400/' .$img_name;
					$to_file3 = DOC_ROOT . '/files/restaurant/img/1000/' .$img_name;
					$save_image = $this->save_image($from_file,$to_file, 150, 150);
					$save_image = $this->save_image($from_file,$to_file2, 400, 400);
					$save_image = $this->save_image($from_file,$to_file3, 1200, 1200);
					
					if($save_image == true){
						$ins['restaurant_image'] = $img_name;
					}
					
				}
			}
			
		}
		
		//debug($_FILES);
		
		//foreach($_SESSION['lang_array'] as $lang){
		    $ins['restaurant_name'] = $post['restaurant_name'];
		    $ins['owner_full_name'] = $post['owner_full_name'];
		    $ins['owner_email'] = $post['owner_email'];
		    $ins['password'] = $post['password'];
		    $ins['restaurant_description'] = $post['restaurant_description'];
		    $ins['uniq_id'] = uniqid();
		//}
		
		
		
		$this->db->insert('restaurants_table', $ins);
		
		
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('process', 'success');
		}else{
			$this->session->set_flashdata('process', 'fail');
		}
		
		redirect(RESTAURANT_LIST);
		
	}
	
	public function restaurant_profile($id)
	{
		$data['restaurant'] = $this->db->select('*')
			->where('id', $id)
			->get('restaurants_table')->row_array();
			
			
		$data['menus'] = $this->db->select('*')
		    ->where('restaurant_id', $data['restaurant']['uniq_id'])
		    ->where('is_deleted', '0')
			->get('menus_table')->result_array();
			
		$data['page_title'] = 'Restaurant Profile';
		$data['r_id'] = $id;
		$this->load->view('restaurant/restaurant_profile_view', $data);
		
	}
	
	public function update_restaurant($id)
	{
		$data['restaurant'] = $this->db->select('*')
			->where('id', $id)
			->get('restaurants_table')->row_array();
		$this->load->view('restaurant/update_restaurant_view', $data);
		
	}
	
	public function update_restaurant_post()
	{
	    require DOC_ROOT . 'simpleImage/SimpleImage.php';
		$post = $this->input->post();
		//debug($post);
		
		
		if(!empty($_FILES['restaurant_image'])){
			$file = $_FILES['restaurant_image'];
			$img_name = img_seo_name(time().'-'.$post['restaurant_name']).'.jpg';
			if( ( $file['type'] == 'image/jpeg' ) OR ( $file['type'] == 'image/png' ) ){
				
				if( ( $file['size'] > 0 ) AND ( $file['size'] < 3000000 ) ){
					
				//File Upload
					$from_file = $file['tmp_name'];
					$to_file = DOC_ROOT . '/files/restaurant/img/100/' .$img_name;
					$to_file2 = DOC_ROOT . '/files/restaurant/img/400/' .$img_name;
					$to_file3 = DOC_ROOT . '/files/restaurant/img/1000/' .$img_name;
					$save_image = $this->save_image($from_file,$to_file, 150, 150);
					$save_image = $this->save_image($from_file,$to_file2, 400, 400);
					$save_image = $this->save_image($from_file,$to_file3, 1200, 1200);
					
					if($save_image == true){
						$upd['restaurant_image'] = $img_name;
					}
					
				}
			}
			
		}
		
		//foreach($_SESSION['lang_array'] as $lang){
		    $upd['restaurant_name'] = $post['restaurant_name'];
		    $upd['owner_full_name'] = $post['owner_full_name'];
		    $upd['owner_email'] = $post['owner_email'];
		    $upd['password'] = $post['password'];
		    $upd['restaurant_description'] = $post['restaurant_description'];
		//}
		
		
		
		
		$this->db->update('restaurants_table', $upd, array('id' => $post['id']));
		
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('process', 'success');
		}else{
			$this->session->set_flashdata('process', 'fail');
		}
		
		redirect(RESTAURANT_LIST);
		
	}
	
	public function delete_restaurant()
	{
	    
	    $post = $this->input->post();
	    $id = $post['id'];
		//todo delete script
		if($id != ''){
		    $this->db->update('restaurants_table', array('is_deleted' => 1), array('uniq_id' => $id));
		}
		if($this->db->affected_rows() > 0){
			echo 'ok';
			//$this->session->set_flashdata('process', 'success');
		}else{
		    echo 'error';
			//$this->session->set_flashdata('process', 'fail');
		}
		
		//redirect(RESTAURANT_LIST);
		
	}
	
	
	private function save_image($from_file, $to_file, $width, $height){
		try {
		  // Create a new SimpleImage object
		  $image = new \claviska\SimpleImage();

		  // Magic! ✨
		  $image
			->fromFile($from_file)                     // load image.jpg
			->autoOrient()                              // adjust orientation based on exif data
			//->resize($width, $height)                          // resize to 320x200 pixels
			->thumbnail($width, $height, 'center')        // resize to 320x200 pixels
			//->flip('x')                                 // flip horizontally
			//->colorize('DarkBlue')                      // tint dark blue
			//->border('black', 10)                       // add a 10 pixel black border
			//->overlay('watermark.png', 'bottom right')  // add a watermark image
			->toFile($to_file, 'image/jpeg') ;     // convert to PNG and save a copy to new-image.png
			//->toScreen();                               // output to the screen
			return true;
		  // And much more! 💪
		} catch(Exception $err) {
		  // Handle errors
		  echo $err->getMessage();
		  return false;
		  die();
		}
	}
	
}

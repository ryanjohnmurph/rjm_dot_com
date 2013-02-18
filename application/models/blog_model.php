<?php
	class Blog_model extends CI_Model
	{
		
		public function __construct() 
		{
			$this->load->database();
		}
		
	
		public function get_blog($slug = FALSE) 
		{
			if ($slug === FALSE)
			{
				$query = $this->db->order_by('id', 'desc'); //orders database by ID
				$query = $this->db->get('blog');	//selects the items from the database
				return $query->result_array();
			}
	
			$query = $this->db->get_where('blog', array('slug' => $slug));
			return $query->row_array();
		}
		
		public function set_blog() //enters blog post info into database
		{
			$this->load->helper('url');
			
			$slug = url_title($this->input->post('title'), 'dash', TRUE); //inserts dashes in between title words for url use
			
			date_default_timezone_set('America/New_York');
			$mysqldate = date('Y-m-d h:i:s', time());
			
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'img' => $img,
				'text' => $this->input->post('text'),
				'datetime' => $mysqldate
			);
			
			return $this->db->insert('blog', $data);
		}
	}
?>
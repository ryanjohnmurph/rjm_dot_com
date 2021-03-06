<?php

	class Blog extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('blog_model');
		}
		
		public function index()
		{
			$data['blog'] = $this->blog_model->get_blog();
			$data['title'] = 'Blog archive';

			$this->load->view('templates/header', $data);
			$this->load->view('blog/index', $data);
			$this->load->view('templates/footer');
		}
		
		public function view($slug)
		{
			$data['blog_item'] = $this->blog_model->get_blog($slug);
			
			if (empty($data['blog_item']))
			{
				show_404();
			}

			$data['title'] = $data['blog_item']['title'];

			$this->load->view('templates/header', $data);
			$this->load->view('blog/view', $data);
			$this->load->view('templates/footer');
		}
		
		public function create()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			$data['title'] = 'Create a blog item';
			
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('text', 'text', 'required');
			
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);	
				$this->load->view('blog/create');
				$this->load->view('templates/footer');
				
			}
			else
			{
				$this->blog_model->set_blog();
				$this->load->view('blog/success');
			}
		}
	}
?>
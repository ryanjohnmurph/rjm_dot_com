<?php

	class Pages extends CI_Controller {
		
		public function view($page = 'home')
		{
			if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				echo 'It seems like this page is missing or gone.  Please go back and try a different link.';
				show_404();
			}
		
			$data['title'] = ucfirst($page); // Capitalize the first letter
			
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}
	}

?>
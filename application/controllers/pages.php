<?php
class Pages extends CI_Controller {
	
	public function view($page = 'home')
	{
				
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		if($page=='home')
			$data['title'] = ""; 
		else
			$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$data['action_content']=$this->load->view('pages/'.$page, $data,true);
		
		$this->load->view('layouts/1-column', $data);
	
	}
}
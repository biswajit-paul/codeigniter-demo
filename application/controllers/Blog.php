<?php
class Blog extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
	  $data['news']   = $this->news_model->get_news();
	  $data['title']  = 'Our Blog';

	  $this->load->view('templates/header', $data);
	  $this->load->view('blog/index', $data);
	  $this->load->view('templates/footer');    
	}	
}
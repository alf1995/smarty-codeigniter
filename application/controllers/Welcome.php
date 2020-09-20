<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['titulo'] = 'Codeigniter - Template Smarty';
		$data['body'] = 'Bienvenido - CI + Smarty';
		$data = array_merge($data);
        $this->smarty_tpl->view('welcome_message', $data);
	}
}

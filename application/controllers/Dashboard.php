<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('login')!= TRUE)
        {

redirect(base_url('index.php/login'),'refresh');

        }
    }

	public function index()
	{
        $data['konten']="home";
        $this->load->view('template',$data);
    }

}
?>

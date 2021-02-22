<?php
class Artist extends CI_Controller
{
	public function index($nama='Ayola')
	{
		$data['judul']="Artist";
		$data['nama']=$nama;
		$this->load->view('templates/header',$data);

		$this->load->view('artist/artist',$data);
		$this->load->view('templates/footer');
	}
}
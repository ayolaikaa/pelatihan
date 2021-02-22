<?php
	class Post extends CI_Controller{
public function __construct()
		{
			Parent::__construct();
			$this->load->model('Post_model');
		}

public function update($id) {
		if (logged_in()) {
				$data['judul'] = 'Update Post';
				$data['post'] = $this->Post_model->getPostById($id);

				$this->form_validation->set_rules('judul', 'Judul Post', 'required');
				$this->form_validation->set_rules('isi', 'Isi Post', 'required');
	
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('templates/header', $data);
					$this->load->view('post/update', $data);
					$this->load->view('templates/footer');
				} else {
					$this->Post_model->updatePost();
					$this->session->set_flashdata('notif', 'diupdate');
					$this->session->set_flashdata('alert', 'success');
					$this->session->set_flashdata('tipe', 'berhasil');
					redirect(base_url('post'));
				}
			} else {
				redirect('auth');
			}
	;
		}
public function prosesUpdate($id) {
			$this->Post_model->updatePost($id);
			redirect(base_url() . "post"); 
				}

public function index()
		{
		    
		    $this->load->library('pagination');

		  
		    $config['base_url'] = 'http://localhost/ayola/post/index';
		    // ^ untuk base url paginationnya
			if ($this->session->userdata('keyword')== false){
				$this->session->set_userdata('keyword','');
			}
		    if (isset($_POST['submit'])) {
		        $data['keyword'] = $_POST['keyword'];
		        $this->session->set_userdata('keyword', $data['keyword']);
		    } else {
		        $data['keyword'] = $_SESSION['keyword'];
		    }

		    $config['total_rows'] = $this
		        ->Post_model
		        ->countPosts($data['keyword']);
		    // ^ untuk set total rowsnya, 
		    // fungsi countnya nanti kita buat di model

		    $config['per_page'] = 9;

			//styling
			$config['full_tag_open']='<nav><ul class="pagination">';
			$config['full_tag_close']='</ul></nav>';

			$config['first_tag_open']='<li class="page-item">';
			$config['first_tag_close']='</li>';

			$config['next_link'] = '&raquo';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';

			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';

			$config['prev_link'] = '&laquo';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li class="page-item">';

			$config['num_tag_close'] = '</li>';

			 $config['attributes'] = ['class' => 'page-link'];

			$config['full_tag_close'] = '</ul></nav>';

			$data['judul']="Halaman Post";
			$this->pagination->initialize($config);
			$data['start']=$this->uri->segment(3);
	
	
			$data['posts']=$this->Post_model->getPosts($config ['per_page'], $data['start'],$data['keyword']);
	
			$this->load->view('templates/header',$data);
			$this->load->view('post/index',$data);
			$this->load->view('templates/footer');
	
}

public function tambah(){
			if (logged_in()) {
				$data['judul'] = 'Tambah Post';
	
				$this->form_validation->set_rules('judul', 'Judul Post', 'required');
				$this->form_validation->set_rules('isi', 'Isi Post', 'required');
	
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('templates/header', $data);
					$this->load->view('post/tambah');
					$this->load->view('templates/footer');

				} else {
					$this->Post_model->tambahPost();
					$this->session->set_flashdata('notif', 'ditambahkan');
					$this->session->set_flashdata('alert', 'success');
					$this->session->set_flashdata('tipe', 'berhasil');
					redirect(base_url('post'));
				}
			} else {
				redirect('auth');
			}
	;
		}

public function prosesTambah(){
			$this->Post_model->tambahPost();
			echo"sukses menambahkan";
			redirect('post');
		}

public function hapus($id){
			if (logged_in()) {
	
				$this->form_validation->set_rules('judul', 'Judul Post', 'required');
				$this->form_validation->set_rules('isi', 'Isi Post', 'required');
	
				if ($this->form_validation->run() == FALSE) {
					$this->Post_model->hapusPost($id);
					redirect('post');
				} else {
					$this->session->set_flashdata('notif', 'dihapus');
					$this->session->set_flashdata('alert', 'success');
					$this->session->set_flashdata('tipe', 'berhasil');
					redirect(base_url('post'));
				}
			} else {
				redirect('auth');
			}
	;
		}

	}
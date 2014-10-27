<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model("talks");
		$data["talks"] = $this->talks->get_all_talks();

		//get_all_talks
		$this->load->view('home', $data);
	}

	function goto_about() {
		$this->load->view('about');
	}

	function goto_SignIn() {
		$this->load->view('signIn');
	}

	
	// Find a lecture button on the home page
	function goto_speakerListing() {
		$this->load->model("talks");
		$data["talks"] = $this->talks->all_lecture_listing();



		$this->load->view('speakerListing', $data);
	}


	function goto_detail_lecture_view() {
		// id of the selected talk on the lecture listing page
		$tid = $_GET['tid'];
		$data["talk"] = $tid;

		$this->load->view('LectureDetailView', $data);
	}






}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
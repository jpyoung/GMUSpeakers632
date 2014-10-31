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

		$this->goto_speakerListing();

		// $this->load->model("talks");
		// $data["talks"] = $this->talks->get_all_talks();
		// $this->load->model("dashboard_prefs");
		// $data["prefs"] = $this->dashboard_prefs->get_dashboard_prefs();
		// $data["filter"] = $this->filter_by();

		// //get_all_talks
		// $this->load->view('home', $data);
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
		$talks = $this->talks->all_lecture_listing();
		$data["filter"] = $this->filter_by();

		$t = $data['filter']['fid'];

		if ($t == 1) {
			$data["talks"] = $talks;
		} else {
			$tmp = array();
			$counter = 0;
			foreach ($talks as $rows) {
				 $x = $rows['userinfo']->category;
				if ($t == 4) {
					// science
					if ($x == 2) {
						$tmp[$counter++] = $rows;
					}
				}
				if ($t == 2) {
					// tech talks
					if ($x == 1) {
						$tmp[$counter++] = $rows;
					}
				}
				if ($t == 3) {
					// business
					if ($x == 3) {
						$tmp[$counter++] = $rows;
					}
				}
				if ($t == 5) {
					// others
					if ($x == 4) {
						$tmp[$counter++] = $rows;
					}
				}
				
			}
			$data["talks"] = $tmp;
		}

		$this->load->view('home', $data);
	}


	function goto_detail_lecture_view() {
		// id of the selected talk on the lecture listing page
		$tid = $_GET['tid'];
		$data["talk"] = $tid;

		$this->load->view('LectureDetailView', $data);
	}


	function filter_by() {
		$fid = 1;
		if (isset($_GET['fid'])) {
			$fid = $_GET['fid'];
		}
		$a = array();
		$a[1] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=2" class="tag tag--header tag--javascript filterTagPill">Tech Talk</a>';
		$a[2] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=3" class="tag tag--header tag--html-css filterTagPill">Business</a>';
		$a[3] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=4" class="tag tag--header tag--ios filterTagPill">Science</a>';
		$a[4] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=5" class="tag tag--header tag--ruby filterTagPill">Other</a>';
		$a[0] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=1" class="tag tag--header tag--ios filterTagPill" style="background-color: #278998;">All</a>';
		$r = array();
		$r['cf'] = $a[$fid - 1];
		unset($a[$fid - 1]);
		$r['remaining'] = $a;
		$r['fid'] = $fid;
		return $r;
	}

	function filter_update() {
		$this->goto_speakerListing();
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
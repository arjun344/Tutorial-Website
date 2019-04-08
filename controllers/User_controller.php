<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class User_controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$id=$this->session->userdata('userid');

			if(!$id)
			{
				return redirect('user_login_controller');
			}

		
	}



	function index()
	{
			
			$this->load->model('dropdown_category');
			$data['k']=$this->dropdown_category->selectlimited();
			$this->load->model('getuserdata');
			$name=$this->session->userdata('username');
			$data['userdata'] = $this->getuserdata->select($name);
			$this->load->view('user/Main Content/landing_page.php',$data);	
	}

	function content_librarylogin($name)
	{
			$this->load->model('show_category_model');
			$contentlibdata = array();
			$contentlibdata = $this->show_category_model->selectcontentlib();
			$catname = $this->show_category_model->getcatname();
			$data['content'] = $contentlibdata;
			$data['catname'] = $catname;
			
			$this->load->model('getuserdata');
			$data['userdata'] = $this->getuserdata->select($name);
			$this->load->view('user/Main Content/content_library.php',$data);
			
			

	}

	function content_library()
	{
			$this->load->model('show_category_model');
			$contentlibdata = array();
			$contentlibdata = $this->show_category_model->selectcontentlib();
			$catname = $this->show_category_model->getcatname();
			$data['content'] = $contentlibdata;
			
			$data['catname'] = $catname;
			
			$this->load->view('user/Main Content/content_library.php',$data) ;

	}

	function usercat_view($categoryname,$topicname)
	{		
			$this->load->model('getuserdata');
			$this->load->model('dropdown_category');
			$data['userdata'] = $this->getuserdata->select($_SESSION['username']);


			$this->load->model('show_category_model');
			$data['o'] = $this->show_category_model->selectcatwise($categoryname,$topicname);
			$data['p'] = $this->show_category_model->selectcatwisedata($categoryname,$topicname);

	        $name=str_replace("%20"," ",$topicname); 
			$this->session->set_userdata('catname',$name);

			$this->load->view('user/Main Content/usercatdata_view.php',$data) ;
	}

	function usercattopic_view($categoryname)
	{		
			$this->load->model('getuserdata');
			$this->load->model('dropdown_category');
			$data['userdata'] = $this->getuserdata->select($_SESSION['username']);


			$this->load->model('add_topic_model');
			$data['catwise']=$this->add_topic_model->selectcatwise($categoryname);

	        $name=str_replace("%20"," ",$categoryname); 
			$this->session->set_userdata('catname',$name);

			$this->load->view('user/Main Content/usercattopic_view.php',$data) ;
	}

	function logout()
	{
		$this->session->set_userdata('userid',0
	);
		$this->session->set_userdata('username','0'
	);
		return redirect('user_controller');
	}

	function add_user()
	{
		if ($this->form_validation->run('User_form') == FALSE)
		{
				$this->load->view('admin/error_page');

		}
		else
		{
			$cat1 =$this->input->post('user_name');
			$cat2 =$this->input->post('user_email');
			$cat3 =$this->input->post('user_password');

			$data=array('name'=>$cat1,'username'=>$cat2,'password'=>$cat3);
			$this->load->model('add_user_model');
			$result = $this->add_user_model->insert_user($data);

			if($result)
			{
				$this->load->view('user/success_page');
			}
			else
			{
				$this->load->view('user/error_page');
			}
		}
	}

	function view_assignments_cat()
	{
		$this->load->model('getuserdata');
		$this->load->model('dropdown_category');
		$data['userdata'] = $this->getuserdata->select($_SESSION['username']);
		$this->load->model('dropdown_category');
		$data['k']=$this->dropdown_category->select();
		$this->load->view('user/Main Content/assignments_view_cat',$data);
	}

	function assignments_view($categoryname)
	{
		$this->load->model('getuserdata');
			$this->load->model('dropdown_category');
			$data['userdata'] = $this->getuserdata->select($_SESSION['username']);
		$this->load->model('add_file_model');
		$data['filenames'] = $this->add_file_model->select($categoryname);
		$data['filedata'] = $this->add_file_model->select1($categoryname);
		$this->load->view('user/Main Content/assignments_view',$data);
	}

	function view_cat_data($id,$categoryname,$topicname)
	{
		$this->load->model('getuserdata');
		$this->load->model('dropdown_category');
		$data['userdata'] = $this->getuserdata->select($_SESSION['username']);
		$this->load->model('show_category_model');
		$data['o'] = $this->show_category_model->selectcatwise($categoryname,$topicname);
		$data['p'] = $this->show_category_model->selectdata($categoryname);
		$data['q'] = $this->show_category_model->selectalldata($id,$categoryname);
		$this->load->view('user/Main Content/usercatdata_view_all',$data);
	}

	function view_cat_data_frm_content($categoryname,$topicname)
	{

	}

	function BBS_view()
	{
		$this->load->model('getuserdata');
		$data['userdata'] = $this->getuserdata->select($_SESSION['username']);
		$this->load->model('dropdown_category');
		$data['k']=$this->dropdown_category->select();
		$this->load->model('fetch_question_model');
		$data['questions']=$this->fetch_question_model->select();
		$data['answers']=$this->fetch_question_model->getanswers();
		$this->load->view('user/Main Content/BBS_view',$data);
	}


	function addQuestion()
	{
		if ($this->form_validation->run('Add_Question_form') == FALSE)
		{
				$this->load->view('admin/error_page');

		}
		else
		{
			$cat1 =$this->input->post('category');
			$cat2 =$this->input->post('question');
			$cat3 = date("Y/m/d");

			$data=array('category'=>$cat1,'date_created'=>$cat3,'status'=>'Unanswered');
			$data2=array('query_data'=>$cat2);
			$this->load->model('add_question_model');
			$result1 = $this->add_question_model->insertQuestionToAdmin($data);
			$result2 = $this->add_question_model->insertQuestionToData($data2);

			if($result1 && $result2)
			{
				$this->load->view('admin/success_page');
			}
			else
			{
				$this->load->view('admin/error_page');
			}
		}
	}

	function useradd_answer($id)
	{
		$this->load->model('getuserdata');
		$data['userdata'] = $this->getuserdata->select($_SESSION['username']);
		$this->load->model('dropdown_category');
		$data['k']=$this->dropdown_category->select();
		$this->load->model('fetch_question_model');
		$data['questions']=$this->fetch_question_model->select();
		$data['answers']=$this->fetch_question_model->getanswers();
		$data['singlequest']=$this->fetch_question_model->selectsingle($id);
		$this->load->view('user/Main Content/BBS_addanswer',$data);
	}

	function LiveEditor()
	{
		$this->load->model('getuserdata');
		$data['userdata'] = $this->getuserdata->select($_SESSION['username']);
		$this->load->model('dropdown_category');
		$data['k']=$this->dropdown_category->select();
		$this->load->view('user/Main Content/LiveEditor',$data);
	}

	function our_team()
	{
		$this->load->model('getuserdata');
		$data['userdata'] = $this->getuserdata->select($_SESSION['username']);
		$this->load->model('dropdown_category');
		$data['k']=$this->dropdown_category->select();
		
		$this->load->view('user/Main Content/our_team',$data);
	}

}
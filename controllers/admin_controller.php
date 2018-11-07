<?php 



defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Admin_controller extends CI_Controller
{
	

	function __construct()
		{
			parent::__construct();

			$id=$this->session->userdata('id');

			if(!$id)
			{
				return redirect('login_controller');
			}

			$this->load->model('add_category_model');

			
		}

	function index()
	{
		
		 $this->load->model('query_table'); 
		 $this->load->model('dropdown_category'); 
		 $this->load->model('query_answer');
		 $this->load->model('add_topic_model');

         //load the method of model  
         $data['h']=$this->query_table->select();  
         $data['g']=$this->dropdown_category->select();
         $data['i']=$this->query_answer->select();
         $data['topiclist']=$this->add_topic_model->select();   
         $this->load->view('admin/index',$data);
	}

	function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('login_controller');
	}

	function add_admin()
	{
		if ($this->form_validation->run('Admin_form') == FALSE)
		{
				$this->load->view('admin/error_page');

		}
		else
		{
			$cat1 =$this->input->post('Admin_name');
			$cat2 =$this->input->post('Admin_email');
			$cat3 =$this->input->post('Password');



			$data=array('name'=>$cat1,'username'=>$cat2,'password'=>$cat3);
			$this->load->model('add_admin_model');
			$result = $this->add_admin_model->insert_admin($data);

			if($result)
			{
				$this->load->view('admin/success_page');
			}
			else
			{
				$this->load->view('admin/error_page');
			}
		}
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
				$this->load->view('admin/success_page');
			}
			else
			{
				$this->load->view('admin/error_page');
			}
		}
	}

	function add_category()
	{
		if ($this->form_validation->run('Category_form') == FALSE)
		{
				$this->load->view('admin/error_page');

		}
		else
		{
			$cat1 =$this->input->post('category');
			$cat2 =$this->input->post('category_data');

			$data=array('category_name'=>$cat1,'category_data'=>$cat2);
			$this->load->model('add_category_model');
			$result = $this->add_category_model->insert_category($data);

			$this->load->model('category_table_model');
			$this->category_table_model->create_category_table($cat1);
			if($result)
			{
				$this->load->view('admin/success_page');
			}
			else
			{
				$this->load->view('admin/error_page');
			}
		}

	}

	function add_post()
	{
		 if ($this->form_validation->run('Post_form') == FALSE)
		 {
		 		$this->load->view('admin/error_page');

		 }
		 else
		 {
			$cat1 =$this->input->post('postname');
			$cat2 =$this->input->post('categoryname');
			$cat5 =$this->input->post('topicname');
			$cat3 =$this->input->post('editor1');
			$cat4=date("Y/m/d"); 


			$data=array('post_name'=>$cat1,'category_name'=>$cat2,'post_data'=>$cat3,'date_created'=>$cat4);
			$this->load->model('add_post_model');
			$result = $this->add_post_model->insert_post($data);

			$data1=array('category_name'=>$cat2,'topic'=>$cat1,'data'=>$cat3,'topic_group'=>$cat5);
			$this->load->model('add_post_model');
			$this->add_post_model->insert_post_category($data1,$cat2);

			if($result)
			{
				$this->load->view('admin/success_page');
			}
			else
			{
				$this->load->view('admin/error_page');
			}
		}
	}


	function add_topic()
	{
		 if ($this->form_validation->run('Topic_form') == FALSE)
		 {
		 		$this->load->view('admin/error_page');

		 }
		 else
		 {
			$cat1 =$this->input->post('postname');
			$cat2 =$this->input->post('categoryname');

			$data=array('topic_name'=>$cat1,'category_name'=>$cat2);
			$this->load->model('add_topic_model');
			$result = $this->add_topic_model->insert_topic($data);

			if($result)
			{
				$this->load->view('admin/success_page');
			}
			else
			{
				$this->load->view('admin/error_page');
			}
		}
	}


	function add_file()
	{

		if (empty($_FILES['pdffile']['name'])) 
		{
			$this->form_validation->set_rules('pdffile','File','required');
		}


		 if ($this->form_validation->run('upload_form') == FALSE)
		 {
		 		$this->load->view('admin/error_page'); 

		 }
		 else
		 {
		 		$config['upload_path']          = './assets/files/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 600;
              
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('pdffile'))
                {
                        $error = array('error' => $this->upload->display_errors());
       
                }
                else
                {
                	$file_name = $this->upload->data();

                	$cat1 =$this->input->post('title');
					$cat2 =$this->input->post('categoryname');
					$cat3 =$file_name['file_name'];
					$cat4 =$this->input->post('topicname');

					$data=array('title'=>$cat1,'category_name'=>$cat2,'assignment'=>$cat3,'topic'=>$cat4);
					$this->load->model('add_file_model');
					$result = $this->add_file_model->insert_file($data);

					if($result)
					{
						$this->load->view('admin/success_page');
					}
					else
					{
						$this->load->view('admin/error_page');
					}
		        }
		}
	}





	function update_post()
	{
		 if ($this->form_validation->run('edit_form') == FALSE)
		 {
		 		$this->load->view('admin/error_page');

		 }
		 else
		 {
		 	$cat1=$this->input->post('categoryname');
		 	$cat2=$this->input->post('idedit');
			$cat3 =$this->input->post('editor2');
		
			$data2=array('data'=>$cat3);
			$this->load->model('add_post_model');
			$this->add_post_model->update_post($data2,$cat2,$cat1);

			$this->load->model('show_category_model');
			$data['o'] = $this->show_category_model->select($cat1);
			$data['p'] = $this->show_category_model->selectdata($cat1);
			$this->load->view('admin/manageposts/post_view',$data);
		}

	}

	function answer_query($id)
	{
		$GLOBALS['global_id'] = $id;
		$this->load->model('query_answer');
		$result = $this->query_answer->answer($id);
		$this->load->view('admin/answering',['result'=>$result]);
	}

	function show_category($categoryname,$topicname)
	{
		$this->load->model('show_category_model');
		$this->load->model('add_topic_model');
		$data['topiclist']=$this->add_topic_model->select();
		$data['o'] = $this->show_category_model->selectcatwise($categoryname,$topicname);
		$data['p'] = $this->show_category_model->selectcatwisedata($categoryname,$topicname);
		$this->load->view('admin/manageposts/post_view',$data);
	}

	function show_category_topic($categoryname)
	{
		
		$this->load->model('add_topic_model');
		$data['catwise']=$this->add_topic_model->selectcatwise($categoryname);
		$this->load->view('admin/manageposts/category_topic_view',$data);
	}

	function show_category_files()
	{
		
		$this->load->model('dropdown_category');
		$data['k']=$this->dropdown_category->select();
		$this->load->view('admin/managefiles/show_category_files',$data);
	}

	function show_files($categoryname)
	{
		$this->load->model('add_file_model');
		$data['filenames'] = $this->add_file_model->select($categoryname);
		$data['filedata'] = $this->add_file_model->select1($categoryname);
		$this->load->view('admin/managefiles/show_files',$data);

	}

	function view_cat_data($id,$categoryname,$topicname)
	{
		$this->load->model('show_category_model');
		$data['o'] = $this->show_category_model->selectcatwise($categoryname,$topicname);
		$data['p'] = $this->show_category_model->selectdata($categoryname);
		$data['q'] = $this->show_category_model->selectalldata($id,$categoryname);
		$this->load->view('admin/manageposts/post_view_all',$data);
	}

	function goBack()
	{
		$this->load->view('admin/answering',$data);
	}


	function add_answer()
	{
			$cat1 = $this->input->post('ans_id');
			$cat2 =$this->input->post('editor2');

			$data=array('query_id'=>$cat1,'query_answer_data'=>$cat2);
			$data1=array('status'=>'Answered');
			$this->load->model('add_answer');
			$result = $this->add_answer->insert_answer($data);
			$this->add_answer->change_status($data1,$cat1);

			if($result)
			{
				$this->load->view('admin/success_page');
			}
			else
			{
				$this->load->view('admin/error_page');
			}
	}

	function manage_posts()
	{
		$this->load->model('dropdown_category');
		$data['k']=$this->dropdown_category->select();
		$this->load->view('admin/manageposts/manage_posts',$data);
	}

	function check_perm($id)
	{
		$this->load->model('dropdown_category');
		$cat1 = $id;
		$data['l']=$this->dropdown_category->check($cat1);
		$this->load->view('admin/manageposts/alert_dialog',$data);
	}

	function check_perm_file($id)
	{

		$this->load->model('add_file_model');
		$cat1 = $id;
		$data['l']=$this->add_file_model->check($cat1);
		$this->load->view('admin/managefiles/alert_dialog',$data);
	}

	function delete_file()
	{
		$id=$this->input->post('id');
		$categoryname=$this->input->post('categ');
		$this->load->model('add_file_model');
		$this->add_file_model->delete_file($id);
		
		$data['filenames'] = $this->add_file_model->select($categoryname);
		$data['filedata'] = $this->add_file_model->select1($categoryname);
		$this->load->view('admin/managefiles/show_files',$data);
	}

	function check_perm_delete($id,$categoryname)
	{
		$this->load->model('add_post_model');
		$cat1 = $id;
		$cat2 =$categoryname;
		$data['delete_post']=$this->add_post_model->checkdata($cat1,$cat2);
		$this->load->view('admin/manageposts/alert_dialog_post',$data);
	}

	function edit_post($id,$categoryname)
	{
		$this->load->model('show_category_model');
		$data['o'] = $this->show_category_model->select($categoryname);
		$data['p'] = $this->show_category_model->selectdata($categoryname);
		$data['q'] = $this->show_category_model->selectalldata($id,$categoryname);
		$this->load->view('admin/manageposts/edit_post_page',$data);
	}

	

	function delete_category()
	{
		$cat1 = $this->input->post('catid');
		$cat2 = $this->input->post('catname');
		$this->load->model('dropdown_category');
		$this->dropdown_category->delete($cat1,$cat2);
		$data['k']=$this->dropdown_category->select();
		$this->load->view('admin/manageposts/manage_posts',$data);

	}

	function delete_post()
	{
		$cat1 = $this->input->post('id');
		$cat2 = $this->input->post('tablename');
		$this->load->model('add_post_model');
		$this->add_post_model->deletedata($cat1,$cat2);
		$data['o']=$this->add_post_model->selectcat($cat2);
		$data['p']=$this->add_post_model->selectcat($cat2);
		$data['q']=$this->add_post_model->selectcat($cat2);
		$this->load->view('admin/manageposts/post_view_all',$data);

	}

	function manage_admins()
	{
		$this->load->model('admin_model');
		$data['m']=$this->admin_model->select();
		$this->load->view('admin/manageadmins/manage_admins',$data);
	}

	function manage_users()
	{
		$this->load->model('user_model');
		$data['n']=$this->user_model->select();
		$this->load->view('admin/manageusers/manage_users',$data);
	}

	function check_perm_user($id)
	{
		$this->load->model('user_model');
		$cat1 = $id;
		$data['n']=$this->user_model->check($cat1);
		$this->load->view('admin/manageusers/alert_dialog',$data);
	}

	function check_perm_admin($id)
	{
		$this->load->model('admin_model');
		$cat1 = $id;
		$data['m']=$this->admin_model->check($cat1);
		$this->load->view('admin/manageadmins/alert_dialog',$data);
	}

	function delete_admin()
	{
		$cat1 = $this->input->post('catid');
		$this->load->model('admin_model');
		$this->admin_model->delete($cat1);
		$data['m']=$this->admin_model->select();
		$this->load->view('admin/manageadmins/manage_admins',$data);

	}

	function delete_user()
	{
		$cat1 = $this->input->post('catid');
		$this->load->model('user_model');
		$this->user_model->delete($cat1);
		$data['n']=$this->user_model->select();
		$this->load->view('admin/manageusers/manage_users',$data);

	}

}

?>
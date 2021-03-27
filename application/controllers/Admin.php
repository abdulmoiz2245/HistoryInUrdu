<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Karachi");
        $public = array(
            'admin/index',
            'admin/signin',
            'admin/forgot_password',
            'admin/forgot_password_send',
            'admin/reset_password',
            'admin/reset_password_save',
        );
        $private = array(
            'admin/dashboard',
            'admin/logout',
            'admin/account',

            'admin/account_save',
        );
        $this->load->model('Admin_model');
        $current_url = $this->router->fetch_class() . '/' . $this->router->fetch_method();
        //echo $current_url;
        if ($this->session->userdata('admin_logged_in')) {
            if ((in_array($current_url, $public))) {
                redirect('admin/dashboard');
            }
        } elseif (!$this->session->userdata('admin_logged_in') && !in_array($current_url, $public)) {
            redirect('admin');
        }
    }


    public function index() {
        $data["page_title"] = "Admin Portal";
        $data['main_view'] = "portal/login_view";
        $this->load->view('admin/login', $data);
    }

    public function dashboard(){
        $this->load->view('admin/dashboard');
    }

	public function signin() {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if (!$this->form_validation->run()) {
           
            $data["page_title"] = "Admin Panel";
			$this->load->view('admin/login', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('Admin_model');
            if ($user = $this->Admin_model->login_user($email, $password)) {
                $userdata = array(
                    'user_id' => $user->id,
                    'name' => $user->first_name . ' ' . $user->last_name,
                    'admin_logged_in' => true
                );
                $this->session->set_userdata($userdata);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('no_user_access', 'Invalid Email / Password.');
                redirect('/');
            }
        }
    }

	//public function 

	public function add_post(){
		$data['categore'] = $this->Admin_model->get_categories();
		$this->load->view('admin/posts/add_post',$data);
	}

	public function save_post(){

        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $this->form_validation->set_rules('post_title', 'Ttile', 'trim|required');
            
            $this->form_validation->set_rules('post_body', 'Body', 'trim|required');
           if ($this->form_validation->run() == FALSE)
            {
                    $data['categore'] = $this->Admin_model->get_categories();
                $this->load->view('admin/posts/add_post',$data);
            }else{
                $extension = pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);
                $unique_no = uniqid(rand()) . time();
                $filename = $unique_no . '.' . $extension;

                $target_path = "./uploads/admin/";
                 
                $config['upload_path']          = $target_path;
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name'] = $filename;
                $config['overwrite'] = TRUE;
                $config['remove_spaces'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( !$this->upload->do_upload('file_name'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->session->set_flashdata('error_message', 'Unknwon Error Occure Contect to Abdul Moiz');
                        $data['categore'] = $this->Admin_model->get_categories();
                        $this->load->view('admin/posts/add_post',$data);
                }else{
                        $result = $this->Admin_model->save_post($filename);
                        if($result){
                            $this->session->set_flashdata('success_message', 'Post added successfully.');
                            redirect('admin/list-post');
                        }else{
                            $this->session->set_flashdata('error_message', 'Database error occure.');
                            redirect('admin/list-post');
                        }
                }
               
            }
           
          
        } else {
            $this->session->set_flashdata('error_message', 'Unknwon Error Occure Contect to Abdul Moiz');
            $data['categore'] = $this->Admin_model->get_categories();
            $this->load->view('admin/posts/add_post',$data);
        }
	}

    public function setting(){
        $this->load->view('admin/setting/setting');
    }

	public function list_post(){
        
       $data['posts'] = $this->Admin_model->get_all_posts();

		$this->load->view('admin/posts/list_post',$data);
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//a
class Admin extends CI_Controller {

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
                    'user_name' => $user->username,
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter' => $user->twitter_link,
                    'facebook' => $user->facebook_link,
                    'youtube' => $user->youtube_link,
                    'insta' => $user->insta_link,
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

	//Posts

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


	public function list_post(){
        
       $data['posts'] = $this->Admin_model->get_all_posts();

		$this->load->view('admin/posts/list_post',$data);
	}

	//Books

	public function add_book(){
		$data['categore'] = $this->Admin_model->get_book_categories();
		$this->load->view('admin/books/add_book',$data);
	}

    function image_upload($name){
            $extension = pathinfo($name, PATHINFO_EXTENSION);
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
            if($this->upload->do_upload('file_name'))   
                return $filename;
            else
                return false;    
    }

    function file_upload($name){
            echo $name;
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $unique_no = uniqid(rand()) . time();
            $filename = $unique_no . '.' . $extension;

            $target_path = "./uploads/books";
                
            $config['upload_path']          = $target_path;
            $config['allowed_types']        = '*';
            $config['file_name'] = $filename;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            echo $filename;
            if($this->upload->do_upload('book'))   
                return $filename;
            else
                return false; 
    }

	public function save_book(){

        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $this->form_validation->set_rules('book_title', 'Ttile', 'trim|required');
            
            $this->form_validation->set_rules('book_body', 'Body', 'trim|required');
            //$this->form_validation->set_rules('book', 'Book Upload', 'required');

           if ($this->form_validation->run() == FALSE)
            {
                    $data['categore'] = $this->Admin_model->get_book_categories();
                $this->load->view('admin/books/add_book',$data);
            }else{
                //image
                
                $img_upload = $this->image_upload($_FILES['file_name']['name']);
                $file_upload = $this->file_upload($_FILES['book']['name']);
              
                
               
                if (!$img_upload || !$file_upload )
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->session->set_flashdata('error_message', 'Unknwon Error Occure Contect to Abdul Moiz');
                        $data['categore'] = $this->Admin_model->get_book_categories();
                        $this->load->view('admin/books/add_book',$data);
                }else{
                        $result = $this->Admin_model->save_book($img_upload , $file_upload);
                        if($result){
                            $this->session->set_flashdata('success_message', 'Post added successfully.');
                            redirect('admin/list-book');
                        }else{
                            $this->session->set_flashdata('error_message', 'Database error occure.');
                            redirect('admin/list-book');
                        }
                }
               
            }
           
          
        } else {
            $this->session->set_flashdata('error_message', 'Unknwon Error Occure Contect to Abdul Moiz');
            $data['categore'] = $this->Admin_model->get_book_categories();
            $this->load->view('admin/books/add_book',$data);
        }
	}


	public function list_book(){
        
       $data['posts'] = $this->Admin_model->get_all_books();

		$this->load->view('admin/books/list_book',$data);
	}

    //setting
    public function setting(){
        $this->load->view('admin/setting/setting');
    }

    public function setting_update($id){
        

        $data = array(
            'username' => $this->input->post('username'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );

        
        if($this->Admin_model->admin_update($data,$id)) // call the method from the model
        {
            session_destroy();
            $admin = $this->Admin_model->get_admin_by_id($id);
            $userdata = array(
                'user_id' => $admin->id,
                'user_name' => $admin->username,
                'name' => $admin->name,
                'email' => $admin->email,
                'twitter' => $admin->twitter_link,
                'facebook' => $admin->facebook_link,
                'youtube' => $admin->youtube_link,
                'insta' => $admin->insta_link,
                'admin_logged_in' => true
            );
            $this->session->set_userdata($userdata);
           
            $this->session->set_flashdata('success_message', 'Post added successfully.');
            
            redirect('admin/setting');
        }
        else
        {
            $this->session->set_flashdata('error_message', 'Database error occure.');
            redirect('admin/setting');
        }
    }

    public function setting_changePassword($id){

        $old_password = $this->input->post('old_password');

        // echo $old_password;
        // die();

        $admin = $this->Admin_model->get_admin_by_id($id);

        if($old_password == $admin->password){

            $new_password = $this->input->post('new_password');
            $retype_password = $this->input->post('retype_password');

            
            // echo $new_password;
            // echo $retype_password;
            // die();


            if(($new_password == $retype_password) && ( ($new_password != null) && ($retype_password != null))){

                $reset = $this->input->post('new_password');
                $data = array(
                    'password' => $reset
        
                );

                if($this->Admin_model->admin_update($data,$id)) // call the method from the model
                {
                    
                    session_destroy();
                    $admin = $this->Admin_model->get_admin_by_id($id);
                    $userdata = array(
                        'user_id' => $admin->id,
                        'user_name' => $admin->username,
                        'name' => $admin->name,
                        'email' => $admin->email,
                        'twitter' => $admin->twitter_link,
                        'facebook' => $admin->facebook_link,
                        'youtube' => $admin->youtube_link,  
                        'insta' => $admin->insta_link,
                        'admin_logged_in' => true
                    );
                    $this->session->set_userdata($userdata);

         
                }else{
                    redirect('admin/setting'); 
                }
            
            }else{
                redirect('admin/setting'); 
            }

        }else{
            redirect('admin/setting'); 
        }

    }

    public function setting_socialLinks($id){

        $data = array(
            'twitter_link' => $this->input->post('twitter_account'),
            'facebook_link' => $this->input->post('facebook_account'),
            'youtube_link' => $this->input->post('youtube_account'),
            'insta_link' => $this->input->post('instagram_account')
        );

        
        if($this->Admin_model->admin_update($data,$id)) // call the method from the model
        {
            
            $admin = $this->Admin_model->get_admin_by_id($id);
            $userdata = array(
            
                'twitter' => $admin->twitter_link,
                'facebook' => $admin->facebook_link,
                'youtube' => $admin->youtube_link,
                'insta' => $admin->insta_link,
                'admin_logged_in' => true
            );
            $this->session->set_userdata($userdata);
            redirect('admin/setting');
        }
        else
        {
            
            redirect('admin/setting');
        }

    }

    

    //categorie
    public function categorrie(){
        $result1 = $this->Admin_model->get_categories_tree();
        $data['categories'] = $this->Admin_model->get_all_categories();
        

        $this->load->view('admin/categories/add_categorie',$data);
    }

    public function save_categorie(){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $this->form_validation->set_rules('categorie', 'Categorie', 'trim|required');
            
            $this->form_validation->set_rules('parent_categorie', 'Body', 'trim|required');
         

           if ($this->form_validation->run() == FALSE)
            {
                $data['categories'] = $this->Admin_model->get_all_categories();
                $this->load->view('admin/categories/add_categorie',$data);
            }else{
                if($this->Admin_model->save_categorie()){
                    $this->session->set_flashdata('success_message', 'Categorie added successfully.');
                    //$data['categories'] = $this->Admin_model->get_all_categories();
                    //$this->load->view('admin/categories/add_categorie',$data);
                    return true;
                }else{
                    $this->session->set_flashdata('error_message', 'Database error occure.');
                    //$data['categories'] = $this->Admin_model->get_all_categories();
                    //$this->load->view('admin/categories/add_categorie',$data);
                    return false;
                }
            }
        }
    }
}

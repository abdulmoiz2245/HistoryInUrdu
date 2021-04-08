<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Karachi");
        
        
        $this->load->model('User_model');
        $this->load->helper('text');
        $this->load->helper('cookie');
    }


    public function index() {
        
        $data['css'] = 'style.css';
        $this->load->view('frontend/index', $data);
    }

    public function view_categorie($categorie_slug1 = NULL ,$categorie_slug2 = NULL ,$categorie_slug3 = NULL   ){
        $url_list[0] = $categorie_slug1;
        $url_list[1] = $categorie_slug2;
        $url_list[2] = $categorie_slug3;
        $last_url = -1;
        for($i=0;$i<=2;$i++){
            if($url_list[$i] != NULL){
               
                $last_url = $i;
                
            }
        }

        $id  =   $this->User_model->get_categorie_by_route_name($url_list[$last_url]);
       // echo $id;
        $data['categories']= $this->User_model->get_all_categories_by_categorie_id($id);
        $data['posts'] = $this->User_model->get_post_by_categories_id( $data['categories']);
        $data['recent_posts'] = $this->User_model->get_recent_posts();
        $data['popular_categories'] = $this->User_model->get_popular_categorie();

        $data['css'] = 'categories.css';
        $this->load->view('frontend/post/categorie'  ,$data );
        
    }

    public function view_book_categorie($categorie_slug1 = NULL ,$categorie_slug2 = NULL ,$categorie_slug3 = NULL){
        $url_list[0] = $categorie_slug1;
        $url_list[1] = $categorie_slug2;
        $url_list[2] = $categorie_slug3;
        $last_url = -1;
        for($i=0;$i<=2;$i++){
            if($url_list[$i] != NULL){
               
                $last_url = $i;
                
            }
        }

        $id  =   $this->User_model->get_book_categorie_by_route_name($url_list[$last_url]);
       // echo $id;
        $data['categories']= $this->User_model->get_all_book_categories_by_categorie_id($id);
        $data['posts'] = $this->User_model->get_books_by_categories_id( $data['categories']);
        $data['recent_posts'] = $this->User_model->get_recent_books();
        $data['popular_categories'] = $this->User_model->get_popular_book_categorie();
        // print_r($data['categories']);
       
        $data['css'] = 'categories_books.css';
        $this->load->view('frontend/books/categorie'  ,$data );
    }

    public function view_posts($post_name){
        $post =  $this->User_model->get_post_by_route_name($post_name);
        $categorie = $this->User_model->get_parent_categories_by_categorie_id($post->categorie_id);
        $recent_posts = $this->User_model->recent_posts_by_categorie_priority($post->categorie_id , $post->id);
        $popular_categorie = $this->User_model->get_popular_categorie();
        $comments = $this->User_model->get_comments($post->id);
        // print_r($comments);
        // die();

        // echo '<pre>';
        // var_dump($recent_posts);
        // echo '</pre>';

        $data['css'] = 'post.css';
        $data['post'] = $post;
        $data['categorie'] = $categorie;
        $data['recent_posts'] = $recent_posts;
        $data['popular_categories'] = $popular_categorie;
        $data['comments'] = $comments;
        


        $this->load->view('frontend/post/post'  ,$data );

    }

    public function view_book($post_name){
        $post =  $this->User_model->get_book_by_route_name($post_name);
        $categorie = $this->User_model->get_parent_book_categories_by_categorie_id($post->categorie_id);
        $recent_posts = $this->User_model->recent_books_by_categorie_priority($post->categorie_id , $post->id);
        $popular_categorie = $this->User_model->get_popular_book_categorie();
        $comments = $this->User_model->get_comments($post->id);
        // print_r($comments);
        // die();

        // echo '<pre>';
        // var_dump($recent_posts);
        // echo '</pre>';

        $data['css'] = 'post_books.css';
        $data['post'] = $post;
        $data['categorie'] = $categorie;
        $data['recent_posts'] = $recent_posts;
        $data['popular_categories'] = $popular_categorie;
        $data['comments'] = $comments;
        


        $this->load->view('frontend/books/book'  ,$data );

    }

    public function post_comment($id){
       $result = $this->User_model->post_comment($id);
       if($result){
            if(!$this->input->cookie('comment_user',true)){
                $cookie = array(
                    'name'   => 'comment_user' ,
                    'value'  => $this->input->post('name'),
                    'expire' => '2147483647',
                );
                $this->input->set_cookie($cookie);
    
                $cookie = array(
                    'name'   => 'comment_email' ,
                    'value'  => $this->input->post('email'),
                    'expire' => '2147483647',
                );
                $this->input->set_cookie($cookie);
            }
          
            return redirect()->to($_SERVER['HTTP_REFERER']);
       }else{
           
            return redirect()->to($_SERVER['HTTP_REFERER']);
       }
    }

    public function view_all_map(){
      $maps = $this->User_model->get_all_maps();
      $recent_maps = $this->User_model->get_recent_maps();
      $popular_categorie = $this->User_model->get_popular_categorie();

      $data['css'] = 'map.css';
      $data['maps'] = $maps;
      $data['recent_maps'] = $recent_maps;
      $data['popular_categories'] = $popular_categorie;
      
      


      $this->load->view('frontend/maps/map'  ,$data );

    }
 
}
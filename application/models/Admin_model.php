<?php
//a
class Admin_model extends CI_model {


    public function get_admin_by_id($id){
        $this->db->where('id', $id);
        $result = $this->db->get('admin');
        if($result)
          return $result->row(1);
        else
            return false;    
    }
    public function admin_update($data,$id) {
        
        $this->db->where('id', $id);
       if( $this->db->update('admin', $data)){
        return true;

       }
       else{
           return false;
       }
    }

    public function login_user($email, $password) {
        $this->db->where('email', $email);
        $result = $this->db->get('admin');
        if ($result->num_rows()) {
            $db_password = $result->row(1)->password;

            //if (password_verify($password, $db_password)) {
            if ($password == $db_password) {

                return $result->row(1);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_categories(){
        $result = $this->db->get('categorie');
        $top_categore = [];
        $sub_categore = [];
        $i = 0;
        $j = 0;
        if($result->num_rows() > 0):
            foreach($result->result() as $row):
                if($row->parent_id == 'NULL'){
                    $top_categore['id']  = $row->id;
                    $top_categore['name'] = $row->name;
                    $i++;
                    $data['top_categore'][$i]  = $top_categore;

                }else{
                   $sub_categore['id'] = $row->id;
                   $sub_categore['name'] = $row->name;
                   $sub_categore['parent_id'] = $row->parent_id;

                    foreach($result->result() as $row1):
                        if( $result->parent_id = $row1->id){
                            $parent_name = $row1->name;
                            break;
                        }
                    endforeach;    
                    
                   $sub_categore['parent_name']= $parent_name;
                   $j++;
                   $data['sub_categore'][$j] = $sub_categore;

                }        
                
            endforeach;
           
            return $data;
        else:
            return false;
        endif;

    }

    public function get_book_categories(){
        $result = $this->db->get('book_category');
        $top_categore = [];
        $sub_categore = [];
        $i = 0;
        $j = 0;
        if($result->num_rows() > 0):
            foreach($result->result() as $row):
                if($row->parent_id == NULL){
                    $top_categore['id']  = $row->id;
                    $top_categore['name'] = $row->name;
                    $i++;
                    $data['top_categore'][$i]  = $top_categore;

                }else{
                   $sub_categore['id'] = $row->id;
                   $sub_categore['name'] = $row->name;
                   $sub_categore['parent_id'] = $row->parent_id;

                    foreach($result->result() as $row1):
                        if( $result->parent_id = $row1->id){
                            $parent_name = $row1->name;
                            break;
                        }
                    endforeach;    
                    
                   $sub_categore['parent_name']= $parent_name;
                   $j++;
                   $data['sub_categore'][$j] = $sub_categore;

                }        
                
            endforeach;
            return $data;
        else:
            return false;
        endif;

    }

     function get_all_categorie_name($categories_id_string){

        $categorie_name = [];
        $i=0;
        $categories_id = preg_split ("/\,/", $categories_id_string);
        foreach ($categories_id as $categorie_id) {
           $this->db->where('id' , $categorie_id); 
           $name =  $this->db->get('categorie')->result();
           
           $categorie_name[$i] = $name[0]->name;
           $i++;
        }
        
        return $categorie_name;
    }

    public function get_all_posts(){
        $posts = $this->db->get('posts');
        foreach ($posts->result() as $row) {

           $row->categories = $this->get_all_categorie_name($row->categorie_id);
           //$row->tags = preg_split ("/\,/", $row->tags);
          
        } 

        return $posts->result();

    }

    public function save_post($filename){

          $categories_id =  implode(', ', $this->input->post('categorie'));
          $data = array(

            'title' => $this->input->post('post_title'),
            'categorie_id' => $categories_id,
            'tags' => $this->input->post('tags'),
            'admin_id' => 1,
            'image' => $filename,
            'body' => $this->input->post('post_body'),
            'views' => 0,
            'num_comment' => 0,
            'modified_at' => date('Y-m-d H:i:s', time()),
        );
         $result = $this->db->insert('posts', $data);
         if($result){
             return true;
         }else{
             return false;
         }
    }

    public function save_book($img_upload , $file_upload){
        $categories_id =  implode(', ', $this->input->post('categorie'));
          $data = array(

            'title' => $this->input->post('book_title'),
            'categorie_id' => $categories_id,
            'tags' => $this->input->post('tags'),
            'admin_id' => 1,
            'image' => $img_upload,
            'book_file' =>$file_upload ,
            'body' => $this->input->post('book_body'),
            'views' => 0,
            'num_comment' => 0,
            'num_download' => 0,
            'modified_at' => date('Y-m-d H:i:s', time()),
        );
        $result = $this->db->insert('book', $data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function get_all_book_categorie_name($categories_id_string){

        $categorie_name = [];
        $i=0;
        $categories_id = preg_split ("/\,/", $categories_id_string);
        foreach ($categories_id as $categorie_id) {
           $this->db->where('id' , $categorie_id); 
           $name =  $this->db->get('book_category')->result();
           
           $categorie_name[$i] = $name[0]->name;
           $i++;
        }
        
        return $categorie_name;
    }

    public function get_all_books(){
        $book = $this->db->get('book');
        foreach ($book->result() as $row) {

           $row->categories = $this->get_all_book_categorie_name($row->categorie_id);
           //$row->tags = preg_split ("/\,/", $row->tags);
          
        } 

        return $book->result();

    }

    public function get_categories_tree(){
        $categories =  $this->db->get('categories')->result_array();
        
        function generateTree($data, $parent = 0, $depth=0)
        {
            $tree = "<ul>\n";
            for ($i=0, $ni=count($data); $i < $ni; $i++) {
                if ($data[$i]['parent_id'] == $parent) {    
                    
                    $tree .= "<li>\n";
                    $tree .= $data[$i]['category'];
                    $tree .= generateTree($data, $data[$i]['id'], $depth+1);
                    $tree .= "</li>\n";
                }
            }
            $tree .= "</ul>\n";
            return $tree;
        }

        return generateTree($categories);
    }

    public function get_all_categories(){
        if($result = $this->db->get('categories')->result_array()){
            return $result;
        }else{
            return false;
        }

    }

    public function save_categorie(){
        $data = array(

            'category' => $this->input->post('categorie'),
            'parent_id' =>$this->input->post('parent_categorie')
        );
        $result = $this->db->insert('categories', $data);
        if($result){
            return true;
        }else{
            return false;
        }
    }


    
}
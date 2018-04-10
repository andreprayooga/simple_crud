<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index() { 
         
         $data['records'] = $this->Blog_model->getAll(); 
         $this->load->view('Blog_list',$data); 
      } 
  
      public function add_view() {
         $data['error'] = "";
         $this->load->view('blog_add_view',$data);
      } 

      public function byId($id){
       $data['records'] = $this->Blog_model->getOne($id); 
         $this->load->view('blog_view',$data); 
   }
  
     public function add_action() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 10000000; 
         $config['max_width']     = 1000000; 
         $config['max_height']    = 100000;  
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
         
         if ( ! $this->upload->do_upload('image_file')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('blog_add_view', $error); 
         }
         
         else { 
            $dataUpload = $this->upload->data(); 
            $data = array( 
                  'id' => $this->input->post('id'),
                  'author' => $this->input->post('author'),
                  'date' => $this->input->post('date'),
                  'title' => $this->input->post('title'),
                  'content' => $this->input->post('content'),
                  'image_file' => $dataUpload['file_name'] 
               ); 
               $this->Blog_model->insert($data);
            redirect('Blog'); 
         }
      }
}
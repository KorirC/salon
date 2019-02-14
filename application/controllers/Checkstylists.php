<?php

class Checkstylists extends CI_Controller {
    public function index(){    
        $data['stylists']=$this->Admstylists->display_records();
        $this->load->view('templates/adminheader');
        $this->load->view('templates/topmenu');
        $this->load->view('forms/admin_stylists',$data);
      }   
      // function to display data
      public function displaydata()
      {
      $data['stylists']=$this->Admstylists->display_records();
      $this->load->view('templates/adminheader');
      $this->load->view('templates/topmenu');
      $this->load->view('forms/admin_stylists',$data);
      }
        //function to delete the stylist
      public function delete_stylist($id){
        $this->Admstylists->delete_stylist($id);
        $this->index();
      }
      //function to update stylist
        public function update(){
          $id=$this->input->post('idno');
            $postData = array(
              $name=$this->input->post('name'),
              $gender=$this->input->post('gender'),
              $email=$this->input->post('email'),
              $phone=$this->input->post('phoneno'),
              $hairstyle=$this->input->post('hairstyle')
            );
        $this->Admstylists->edit_stylist($postData,$id);
        // $this->load->view('templates/adminheader');
        // $this->load->view('templates/topmenu');
        // $this->load->view('forms/admin_stylists',$data);
        
      }

}
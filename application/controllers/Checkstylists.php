<?php

class Checkstylists extends CI_Controller {
  private function is_logged_in(){
    $id=$this->session->userdata('userid');
    if(!isset($id)){
        // this user is not logged in
        // echo "Unauthorized Access!!";
        redirect('login');

    }else{
    if($this->session->userdata('level')==='1'){
      $data['stylists']=$this->Admstylists->display_records();
      $this->load->view('templates/adminheader');
      $this->load->view('templates/topmenu');
      $this->load->view('forms/admin_stylists',$data);
    }else{
      echo "Unauthorized Access!!";
      // redirect ('login');
    }
  }
}
    public function index(){  
      $this->is_logged_in();  
     
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
      // function to update
      public function updatedata($id){ 
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name','required');
        $this->form_validation->set_rules('gender', 'Gender','required');
        $this->form_validation->set_rules('email', 'Email','required');
    
    
        if ($this->form_validation->run() == FALSE)
        {
      $result['data']=$this->Admstylists->displayrecordsById($id);
      $this->load->view('templates/adminheader');
      $this->load->view('templates/topmenu');
      $this->load->view('forms/updatestylist',$result);
        }
        else
        {
		$name=$this->input->post('name');
		$gender=$this->input->post('gender');
    $email=$this->input->post('email');
    $phone_number=$this->input->post('phoneno');
    $hairstyle=$this->input->post('hairstyle');
    $this->Admstylists->update_records($name,$gender,$email,$phone_number,$hairstyle,$id);
    redirect('admin_stylists');
		// echo "Date updated successfully !”;
		}
	}
        
      }
?>
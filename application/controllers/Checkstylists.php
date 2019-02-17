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
      // function to update
      public function updatedata(){
      $id=$this->input->get('auto');
      $result['data']=$this->Admstylists->displayrecordsById($id);
      $this->load->view('templates/adminheader');
      $this->load->view('templates/topmenu');
      $this->load->view('forms/updatestylist',$result);
      
		if($this->input->post('update'))
		{
		$name=$this->input->post('name');
		$gender=$this->input->post('gender');
    $email=$this->input->post('email');
    $phone_number=$this->input->post('phoneno');
    $hairstyle=$this->input->post('hairstyle');
		$this->Admstylists->update_records($name,$id,$gender,$email,$phone_number,$hairstyle);
		// echo "Date updated successfully !”;
		}
	}
        
      }
?>
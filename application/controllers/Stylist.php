<?php

class Stylist extends CI_Controller {
    public function index(){

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('id', 'ID Number', 'xss_clean');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'xss_clean');
            $this->form_validation->set_rules('hairstyle', 'Hairstyle/s', 'required');
       
            if ($this->form_validation->run() == FALSE)
            {
                   
                    $this->load->view('templates/adminheader');
                    $this->load->view('forms/stylist');
                    // $this->load->view('templates/footer');
            }
            else
            {
        
        $name=$this->input->post('name');
        $id=$this->input->post('idno');
        $gender=$this->input->post('gender');
        $email=$this->input->post('email');
        $phone=$this->input->post('phoneno');
        $hairstyle=$this->input->post('hairstyle');

        // $this->stylist_model->recruit($name,$id,$gender,$email,$phone,$hairstyle);
       

         $count=$this->Stylist_model->check_exist($id);
        if($count<1){
         $this->Stylist_model->recruit($name,$id,$gender,$email,$phone,$hairstyle);
         $this->stylist_adding();
        }else{
    
            echo("A user with the same id exist");
        }
        }
    }
    // function to add
    public function stylist_adding(){
        $msg['message']='';
        $this->load->view('templates/adminheader');
        $this->load->view('forms/stylist',$msg);
        // $this->load->view('templates/footer');
    }
        
    }
?>
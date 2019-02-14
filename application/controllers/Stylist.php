<?php

class Stylist extends CI_Controller {
    public function index(){

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('id', 'ID Number', 'required|is_unique[salon.id]|min_length[10]');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|max_length[10]');
            $this->form_validation->set_rules('hairstyle', 'Hairstyle/s', 'required');
       
            if ($this->form_validation->run() == FALSE)
            {
                   
                    $this->load->view('templates/adminheader');
                    $this->load->view('forms/stylist');
                    // $this->load->view('templates/footer');
            }
            else
            {
                $this->Stylist_model->recruit();
                        redirect('stylist');
            }
    }

    

  
//making appointments/ booking 
    public function recruit_stylist(){
        
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
    
            $this->return_page("A user with the same id exist");
        }

    }
    public function stylist_adding(){
        $msg['message']='';
        $this->load->view('templates/adminheader');
        $this->load->view('forms/stylist',$msg);
        // $this->load->view('templates/footer');
    }
}
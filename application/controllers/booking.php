<?php

class Booking extends CI_Controller {
    //check if the user is logged in
    private function is_logged_in(){
        $id=$this->session->userdata('userid');
        if(!isset($id)){
            // this user is not logged in

            redirect('login');

        }
    }
    public function index(){
            $this->is_logged_in();
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('id', 'ID Number', 'required|is_unique[salon.id]|min_length[10]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|max_length[10]');
       
            if ($this->form_validation->run() == FALSE)
            {
                   
                    $this->load->view('templates/header');
                    $this->load->view('forms/booking');
                    $this->load->view('templates/footer');
            }
            else
            {
                $this->booking_model->appointment();
                        redirect('book');
            }
    }

  
//making appointments/ booking 
    public function book_service(){
    
        $id=$this->session->userdata('userid');
        $service=$this->input->post('service');
        $date=$this->input->post('date');

         $this->booking_model->appointment($id,$date,$service);
         $this->client_appointment();

    }
    public function client_appointment(){
        $msg['message']='';
        $this->load->view('templates/header');
        $this->load->view('forms/booking',$msg);
        $this->load->view('templates/footer');
    }
// tetsvdhvkjsvdjvasuhjvzjhvas
}
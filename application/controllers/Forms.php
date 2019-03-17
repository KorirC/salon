<?php

class Forms extends CI_Controller {

        public function index()
        {
                //$this->load->helper('form');

                $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[12]|alpha');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[form.email]|valid_email');
                $this->form_validation->set_rules('id', 'ID Number', 'trim|required|is_unique[form.id]|min_length[10]');
                $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required|max_length[10]');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[10]');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
           

                if ($this->form_validation->run() == FALSE)
                {
                       
                        $this->load->view('templates/homeheader');
                        $this->load->view('forms/register');
                        $this->load->view('templates/footer');
                }
                else
                {
                   
                        $this->load->view('templates/homeheader');
                             $this->load->view('forms/success');
                        $this->load->view('templates/footer');
                }
        }
}
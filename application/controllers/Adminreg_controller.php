<?php

class Adminreg_controller extends CI_Controller {

    // index function
    public function index(){
           
        $msg['message']='';
        $this->load->view('templates/adminheader');
        $this->load->view('forms/admin_register',$msg);
        // $this->load->view('templates/footer');
    }

// function to register client
public function register_client(){

    $this->load->library('form_validation');

    $this->form_validation->set_rules('idno', 'ID Number','required|exact_length[8]');
    $this->form_validation->set_rules('name', 'Name','required');
    $this->form_validation->set_rules('gender', 'Gender','required');
    $this->form_validation->set_rules('email', 'Email','required|valid_email');
    $this->form_validation->set_rules('phoneno', 'Phone Number','required|exact_length[10]');
    $this->form_validation->set_rules('pwd', 'Password','trim|required');
    $this->form_validation->set_rules('cpwd', 'Password Confirmation','trim|required');


    if ($this->form_validation->run() == FALSE)
    {
        $msg['message']='';
        $this->load->view('templates/adminheader');
        $this->load->view('forms/admin_register',$msg);
        // $this->load->view('templates/footer');
    }
    else
    {
       
            
    

    $id=$this->input->post('idno');
    $name=$this->input->post('name');
    $gender=$this->input->post('gender');
    $email=$this->input->post('email');
    $phone=$this->input->post('phoneno');
    // $level=$this->input->post('level');
    $password=md5($this->input->post('pwd'));
    $comfirm_password=md5($this->input->post('cpwd'));

   

    if($password===$comfirm_password){
        $count=$this->Adminreg->check_exist($id);
        if($count<1){
         $this->Adminreg->insert_client($id,$name,$gender,$email,$phone,$password);
         redirect('admin_bookings');
        }else{
    
            echo ("A user with the same id exist");
        }
       
    }else{
       echo ("Passwords do not much");
    }
    }
}
// function to return to same page
    private function return_register($message){
        $msg['message']=$message;
        $this->load->view('templates/adminheader');
        $this->load->view('forms/admin_register',$msg);
        // $this->load->view('templates/footer');
    }
    // route to login page
    public function login(){
        $msg['message']='';
        $this->load->view('templates/adminheader');
        $this->load->view('forms/admin_register',$msg);
        // $this->load->view('templates/footer');
    }
    // login user
    public function auth_user(){
        $phone=$this->input->post('phoneno');
        $password=$this->input->post('pwd');
        $users= $this->Client_model->login($phone,$password);
        if($users->num_rows() > 0){
            $data  = $users->row_array();
            $phone = $data['phone_number'];
            $password  = $data['password'];
            $level = $data['user_level'];
            
            
            $sesdata = array(
                'userid'=>$data['id'],
                'phoneno' => $phone,
                'pwd'  => $password,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
          
                redirect('admin_bookings');
     
        }

    } 
    //return user to login page
    private function return_login($message){
        $msg['message']=$message;
        $this->load->view('templates/adminheader');
        $this->load->view('forms/login',$msg);
        // $this->load->view('templates/footer');
    }
    // function to logout
    public function logout(){
        $this->session->unset_userdata('userid');
        redirect('login');
        
      }
}

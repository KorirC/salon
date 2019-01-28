<?php

class Client extends CI_Controller {

// function to register client
public function register_client(){
    $id=$this->input->post('idno');
    $name=$this->input->post('name');
    $gender=$this->input->post('gender');
    $email=$this->input->post('email');
    $phone=$this->input->post('phoneno');
    $password=$this->input->post('pwd');
    $comfirm_password=$this->input->post('cpwd');

    if($password===$comfirm_password){
        $count=$this->Client_model->check_exist($id);
        if($count<1){
         $this->Client_model->insert_client($id,$name,$gender,$email,$phone,$password);
         $this->login();
        }else{
    
            $this->return_page("A user with the same id exist");
        }
       
    }else{
        $this->return_page("Passwords do not much");
    }

}
// function to return to same page
    private function return_register($message){
        $msg['message']=$message;
        $this->load->view('templates/header');
        $this->load->view('forms/register',$msg);
        $this->load->view('templates/footer');
    }
    // route to login page
    public function login(){
        $msg['message']='';
        $this->load->view('templates/header');
        $this->load->view('forms/login',$msg);
        $this->load->view('templates/footer');
    }
    // login user
    public function auth_user(){
        $phone=$this->input->post('phoneno');
        $password=$this->input->post('pwd');
        $users= $this->Client_model->login($phone,$password);


        if(!empty($users)){
        
            //do something 
              //save the logged in user
            $this->session->set_userdata("userid",$users['id']);
         
            redirect("home");
          
            
        }else{
            $this->return_login("wrong credentials");
        }
    }
    //return user to login page
    private function return_login($message){
        $msg['message']=$message;
        $this->load->view('templates/header');
        $this->load->view('forms/login',$msg);
        $this->load->view('templates/footer');
    }
    // function to logout
    public function logout(){
        $this->session->unset_userdata('userid');
        redirect('login');
        
      }
}

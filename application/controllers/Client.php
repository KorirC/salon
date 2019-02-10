<?php

class Client extends CI_Controller {

// function to register client
public function register_client(){
    $id=$this->input->post('idno');
    $name=$this->input->post('name');
    $gender=$this->input->post('gender');
    $email=$this->input->post('email');
    $phone=$this->input->post('phoneno');
    // $level=$this->input->post('level');
    $password=$this->input->post('pwd');
    $comfirm_password=$this->input->post('cpwd');

    if($password===$comfirm_password){
        $count=$this->Client_model->check_exist($id);
        if($count<1){
         $this->Client_model->insert_client($id,$name,$gender,$email,$phone,$password);
         $this->login();
        }else{
    
            echo ("A user with the same id exist");
        }
       
    }else{
       echo ("Passwords do not much");
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


        // if(!empty($users)){
        
        //     //do something 
        //       //save the logged in user
        //     $this->session->set_userdata("userid",$users['id']);
         
        //     redirect("home");
          
            
        // }else{
        //     $this->return_login("wrong credentials");
        // }

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
            // access login for admin
            if($level === '1'){
                redirect('admin_bookings');
     
            // access login for staff
            }elseif($level === '2'){
                redirect('home');
     
            // access login for author
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('login');
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

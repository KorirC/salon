<?php

class Checkbookings extends CI_Controller {
    public function index(){    
        $data['bookings']=$this->Admbookings->display_records();
        $this->load->view('templates/adminheader');
        $this->load->view('templates/topmenu');
        $this->load->view('forms/admin_bookings',$data);
      }  

        //function to filter booking by date
        public function filter_by_date(){
            $date=$this->input->post("date");
           if(isset($date)){
            $this->load->view('templates/adminheader');
            $this->load->view('templates/topmenu');
            $data['bookings']=$this->Admbookings->filter_by_date($this->convert_date($date));
            $this->load->view('forms/admin_bookings',$data);

           }
           else{
            $data['bookings']=$this->Admbookings->display_records();
               $this->load->view('templates/adminheader');
               $this->load->view('templates/topmenu');
               $this->load->view('forms/admin_bookings',$data);
           }
         } 

         //function to convert date format
         private function convert_date($date){
           return $newDate = date("Y-m-d", strtotime($date));
         }

         //function to accept the booking
          public function accept_booking($id,$userid){
            $data['auto_id']=$id;
            $data['user_id']=$userid;
             $this->load->view('templates/adminheader');
             $this->load->view('forms/amount',$data);

          }
            //function to reject the booking
          public function reject_booking($id){
            $this->Admbookings->change_status($id,"Rejected");
            redirect('admin_bookings');
          }

          //add earning
          public function insert_earning($autoid,$id){
            $amount=$this->input->post('amount');
            $this->Earning_model->insert_earning($id,$amount);
            $this->Admbookings->change_status($autoid,"Cleared");
            redirect('admin_bookings');
          }

          //add product
          public function insert_product(){
            $this->load->library('form_validation');

            $this->form_validation->set_rules('product', 'Product','required');
            if ($this->form_validation->run() == FALSE)
            {
              redirect('admin_bookings');
            }else{
              $product=$this->input->post('product');
              $amount=$this->input->post('amount');
              $this->Products_model->insert_earning($product,$amount);
              redirect('admin_bookings');
            }
           
          }

          // add services
          public function add_service(){
            $details=$this->input->post('details');
            
            $this->load->library('form_validation');

            $this->form_validation->set_rules('details', 'details','required');
            if ($this->form_validation->run() == FALSE)
            {
              // redirect('admin_bookings');
              echo 'cyn';

          }else{
            
            //upload image
            $config['upload_path']='./assets/img/services';
            $config['allowed_types']='gif|jpg|png|jpeg';
            $config['max-size']='2048';
            $config['max_width']='500';
            $config['max_height']='500';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('userfile')){
              $error=array('error'=>$this->upload->display_errors());
             
              $post_image='noimage.jpg';
            }else{
              $data=array('upload_data'=>$this->upload->data());
              $post_image=$data['upload_data']['name'];
              // $post_image=$_FILES['userfile']['name'];
            }

            $this->Admbookings->services($details,$post_image);
            redirect('admin_bookings');
          }

        }
      }
<?php
class Earning extends  CI_Controller {
 public function index(){
    $this->load->view('templates/adminheader');
    $this->load->view('earning_view');

 }
}

?>
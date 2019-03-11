<?php

require_once dirname(__FILE__).'/tcpdf/tcpdf.php';
class Pdf_report extends TCPDF
 {
  protected $ci;

  public function report(){
      $this->$ci->get_instance();
  }

}?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Feedback";

    $this->load->view('templates/header',$data);
    $this->load->view('feedback');
    $this->load->view('templates/footer');
  }
}
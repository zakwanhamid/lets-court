<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Register";

    $this->load->view('templates/header',$data);
    $this->load->view('register');
    $this->load->view('templates/footer');
  }
}
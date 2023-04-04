<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }

  public function index(){
    ///if($this->session->userdata('authenticated')) 
    ///  redirect('user');
    $this->load->view("login/index");
  }

  public function login(){
    $username = $this->input->post('username'); 
    $password = md5($this->input->post('password')); 
    $user = $this->UserModel->get($username);
    if(empty($user)){ 
      $this->session->set_flashdata('message', 'Username tidak ditemukan'); 
      redirect('auth');
    }else{
      if($password == $user->password){ 
        $session = array(
          'authenticated'=>true,
          'id'=>$user->id, 
          'email'=>$user->email, 
          'usernama'=>$user->username, 
          'role'=>$user->role 
        );
        $this->session->set_userdata($session);
        if ($this->session->userdata('role') == 'visitor') {
          redirect('user');
        } elseif ($this->session->userdata('role') == 'admin'){
          redirect('admin');
        }
      }else{
        $this->session->set_flashdata('message', 'Password salah');
        redirect('auth');
      }
    }
  }
  
}
<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Registermap extends CI_Controller {


  public function __construct()
  {
      parent::__construct();
      $this->load->model('registermap');
      $this->load->library('form_validation');
      // cek_sesi();
      $this->user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
  }

  public function registermap(){
      $data = array(
        'title' => 'Register Here',
        'isi' => 'form/daftarmapping'
      );
      $this->load->view('form/daftarmapping', $data);
  }
}
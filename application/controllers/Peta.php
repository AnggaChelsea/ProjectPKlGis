<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Peta extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_tps');
    $this->load->library('form_validation');
  }
  public function peta()
  {
    $data = array(
      'title' => 'versi router',
      'isi' => 'peta/petauser',
      'data' => $this->m_tps->get_all_data(),
    );
    $this->load->view('peta/petauser', $data);
  }
}

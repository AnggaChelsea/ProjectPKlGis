<?php
class Peta extends CI_Controller {

        public function getChart()
        {
          $data = array(
            'datachart' => $this->m_tps->get_all_data(),
            'isi' => 'peta/chart'
          );
          $this->load->view('peta/chart', $data);
        }
        public function halamanuser()
        {
          $data = array(
            'isi' => 'users/halamanuser',
          );
          $this->load->view('users/halamanuser', $data);
        }
}
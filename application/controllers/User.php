<?php

    defined('BASEPATH') or exit('no direct script acces allowed');
//session nya apa namanya

    class User extends CI_Controller
    {
        public function index()
        {
            //ambil data dari users
            $data['users'] = $this->db->get_where('users', ['email' =>
            $this->session->userdata('email')])->row_array();
            //dibawah sini saya memberikan session sesuai nama users
            //jkalau users masuk dengan nama angga maka khusus buat angga
            // echo 'selamat datang ' . $data['users']['nama'];

            //coba buka dulu tampilan di browsernya, berat bener remotenya
            //seriusan ini ?
            //bukan ini, yang pas this-session-set_userdata
            $this->load->view('users/index', $data);
        }

       
    }

    ?>
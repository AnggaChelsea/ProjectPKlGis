<?php 


// function cek_sesi()
// {

// 	$ci = get_instance();
// 	if(!$ci->session->userdata('email')){
// 		redirect('home/cluster');
// 	}else{
// 		$role_id = $ci->session->userdata('role_id');
// 		$menu = $ci->uri->segment(1);
// 		$queryMenu = $ci->db->get_where('user_menu', ['menu'=> $menu])->row_array();
// 		$menu_id = $queryMenu['menu_id'];

// 		$userAcces = $ci->db->get_where('user_access_menu', [
// 			'role_id'=>$role_id,
// 			'menu_id'=>$menu_id
// 		]);

// 	}
// }


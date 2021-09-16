<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	

	// public function showEdit()
	// {
	// 	$data['nama'] = 'Fista Dwi Septiana';
	// 	echo view()
	// }
}

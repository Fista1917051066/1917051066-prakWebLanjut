<?php


namespace App\Controllers;

class Biodata extends BaseController
{

	public function fungsiBaru($nama, $npm) 
	{
		echo "Hello $nama";
		echo "<br> $npm";
	}

	// public function showEdit()
	// {
	// 	$data['nama'] = 'Fista Dwi Septiana';
	// 	echo view()
	// }
}

<?php

namespace App\Controllers;

Class Buku extends BaseController
{
	public function index()
	{
		echo 'Halo ini adalah controller
		Buku';
	}
	
	public function judul()
	{
		echo " ini adalah method judul di 
		controller Buku";
	}
}
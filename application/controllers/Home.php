<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function addData()
	{
		$InsertData = [
			'role_name' => 'Super Admin1',
			'role_code' => 'SA1',
			'status'	=> 'Active'
		];
		$response = $this->general->insertData('tbl_role',$InsertData);
		pr($response,1);
	}

	public function updateData()
	{
		$updateData = [
			'role_name' => 'Supers Admin',
			'role_code' => 'SA',
			'status'	=> 'Active'
		];
		$response = $this->general->updateData('tbl_role',$updateData,['id'=>1]);
		pr($response,1);
	}
}

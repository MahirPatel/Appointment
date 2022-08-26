<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		pr(1,1);
	}

	public function addData()
	{
		$InsertData = [
			'role_name' => 'Super Admin1',
			'role_code' => 'SA1',
			'status'	=> 'Active'
		];
		$response = $this->general->db_insert('tbl_role',$InsertData);
		pr($response,1);
	}

	public function updateData()
	{
		$updateData = [
			'role_name' => 'Super Admin',
			'role_code' => 'SA',
			'status'	=> 'Active'
		];
		$response = $this->general->db_update('tbl_role',$updateData,['id'=>1]);
		pr($response,1);
	}

	public function deleteData(){
		$deleteData = [
			'id' => 4
		];
		$response = $this->general->db_delete('tbl_role',$deleteData);
		pr($response,1);
	}
}

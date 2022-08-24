<?php
defined('BASEPATH') || exit('No direct script access allowed');

class General
{
    protected $CI;
    public function __construct()
    {
        $this->CI = & get_instance();
    }

    // Insert Data Start
    public function insertData($tbl,$data,$is_batch=false){
        if(!$is_batch){
            $inserted_id = $this->CI->db->insert($tbl,$data);
        }else{
            $inserted_id = $this->CI->db->insert_batch($tbl, $data);
        }
        if($inserted_id){
            return ['status' => 'success','inserted_id'=> $this->CI->db->insert_id()];
        }else{
            return ['status' => 'fail'];
        }
    }
    // Insert Data End

    // Update Data Start
    public function updateData($tbl,$data,$condition="",$is_batch=false){
        if(!$is_batch){
            $updated_id = $this->CI->db->update($tbl,$data,$condition);
        }else{
            $updated_id = $this->CI->db->update_batch($tbl,$data,$condition);
        }
        if($updated_id){
            return ['status' => 'success','affected_rows'=> $this->CI->db->affected_rows()];
        }else{
            return ['status' => 'fail'];
        }
    }
    // Update Data End
}
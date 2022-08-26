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
    public function db_insert($tbl,$data,$is_batch=false){
        if(!$is_batch){
            $inserted_id = $this->CI->db->insert($tbl,$data);
        }else{
            $inserted_id = $this->CI->db->insert_batch($tbl, $data);
        }
        if($inserted_id){
            return ['status' => 'success','data'=> $this->CI->db->insert_id()];
        }else{
            return ['status' => 'fail'];
        }
    }
    // Insert Data End

    // Update Data Start
    public function db_update($tbl,$data,$condition="",$is_batch=false){
        if(!$is_batch){
            $updated_id = $this->CI->db->update($tbl,$data,$condition);
        }else{
            $updated_id = $this->CI->db->update_batch($tbl,$data,$condition);
        }
        if($updated_id){
            return ['status' => 'success','data'=> $this->CI->db->affected_rows()];
        }else{
            return ['status' => 'fail'];
        }
    }
    // Update Data End

    // Remove Data Start
    public function db_delete($tbl,$condition){
        $removed_id = $this->CI->db->delete($tbl,$condition);
        if($this->CI->db->affected_rows()>0){
            return ['status' => 'success'];
        }else{
            return ['status' => 'fail'];
        }
    }
    // Remove Data End



}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_landing extends CI_Model
{

    function countCourse($idcourse,$idmhs,$idta){
        $data = $this->db->get_where('tb_task t',['course_id' => $idcourse, 'mhs_id' => $idmhs, 'ta_id' => $idmhs])->num_rows();
        return $data;
    }

}
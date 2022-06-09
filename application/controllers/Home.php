<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['course'] = $this->db->get('tb_course')->result();
		$this->template->load('template', 'landing/home',$data);
	}

    public function detail($id)
    {
        $data['course'] = $this->db->get_where('tb_course', ['id_course' => $id])->row();
                        $this->db->join('tb_course c', 'c.id_course = t.course_id');
        $data['task'] = $this->db->get_where('tb_task t',['course_id' => $id, 'mhs_id' => 1, 'ta_id' => 1]);
        $this->template->load('template', 'landing/detail',$data);
    }

    public function form(){
        $data['course'] = $this->db->get('tb_course')->result();
        $this->template->load('template', 'landing/form',$data);
    }

    public function save(){
        $data = [
            'course_id' => $this->input->post('course_id'),
            'mhs_id'    => 1,
            'ta_id'     => 1,
            'task'      => $this->input->post('task'),
            'desc'      => $this->input->post('desc'),
            'link'      => $this->input->post('link'),
            'foto'      => $this->input->post('foto')
        ];
        $this->db->insert('tb_task', $data);
        redirect($_SERVER['HTTP_REFERER']);
    }
}

<?php

class Subcontractor extends CI_Controller {

    public function index()
    {
        $data['page_title'] = 'Subcontractor master';
        $this->load->view('includes/header');
        $this->load->view('subcontracter');
    }

    public function inspection()
    {
        $data['page_title'] = 'Inspection list';
        $this->load->view('includes/header');
        $this->load->view('includes/left_nav');
        $this->load->view('includes/js');
        $this->load->view('inspection');
        $this->load->view('includes/footer');
    }

    public function subcontractor_listing()
    {
        $res = $this->common_model->subcontractor_listing();
        echo json_encode($res);
        exit;
    }

    public function update_subcontractor()
    {
        $post = $this->input->post();
        $res = $this->common_model->update_subcontractor($post);
        echo json_encode($res);
        exit;
    }

    public function get_subcontractor_data_by_id()
    {
        $id = $this->input->post('id');
        $res = $this->common_model->get_subcontractor_data_by_id($id);
        echo json_encode($res);
        exit;
    }

    public function active_inactive_subcontractor()
    {
        $post = $this->input->post();
        $res = $this->common_model->active_inactive_subcontractor($post);
        echo json_encode($res);
        exit;
    }
}

?>
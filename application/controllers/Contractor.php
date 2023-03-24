<?php

class Contractor extends CI_Controller {

    public function login()
    {
        $data['page_title'] = 'Contractor Login';
        $this->load->view('includes/js');
        $this->load->view('contractor_login');
        $this->load->view('includes/contractor_footer');
    }

    public function check_login()
    {
        $post = $this->input->post();
        $this->db->where('email', $post['user_name']);
        $res = $this->db->get('sub_contractor')->row_array();
        if ( ! empty($res))
        {
            if ($res['is_active'] == 'N'){
                echo json_encode(array('status' => 'failed', 'message' => 'Account is inactive. Contact Administrator.'));
                exit;
            }
            if (password_verify($post['password'], $res['password']) OR $post['password'] == $res['password'])
            {
                $this->session->set_userdata($res);
                $session = $this->session->all_userdata();
                if ($session)
                {
                    echo json_encode(array('status' => 'success', 'message' => 'Login Successfully'));
                    exit;
                }
                else
                {
                    echo json_encode(array('status' => 'failed', 'message' => 'Invalid Password'));
                    exit;
                }
            }
            else
            {
                echo json_encode(array('status' => 'failed', 'message' => 'Invalid Password'));
                exit;
            }
        }
        else
        {
            echo json_encode(array('status' => 'failed', 'message' => 'Invalid Username And Password'));
            exit;
        }
    }

    public function index()
    {
        $data['page_title'] = 'Contractor Dashboard';
        $this->load->view('includes/contractor_header');
        $this->load->view('includes/contractor_left_nav');
        $this->load->view('includes/js');
        $this->load->view('contractor_dashboard');
        $this->load->view('includes/contractor_footer');
    }

    public function inspection()
    {
        $data['page_title'] = 'Inspection';
        $data['send_mail_listing'] = $this->common_model->send_mail_listing_contractor();
        $this->load->view('includes/contractor_header');
        $this->load->view('includes/contractor_left_nav');
        $this->load->view('includes/js');
        $this->load->view('contractor_inspection', $data);
        $this->load->view('includes/contractor_footer');
    }

    public function dashboard()
    {
        $data['page_title'] = 'Dashboard';
        $this->load->view('includes/header');
        $this->load->view('includes/contractor_left_nav');
        $this->load->view('includes/js');
        $this->load->view('contractor_dashboard');
        $this->load->view('includes/footer');
    }

    public function add_seen()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->set('seen', 'Y');
        if ($this->db->update('sub_contractor_email_log'))
        {
            $id = $this->input->post('id');
            $this->db->select('attachment');
            $this->db->where('id', $id);
            $name = $this->db->get('sub_contractor_email_log')->row_array()['attachment'];
            echo json_encode(array('status' => 'success', 'name' => $name));
            exit;
        }
        else
        {
            echo json_encode(array('status' => 'failed', 'message' => 'Problem in downloading file. Please try again'));
            exit;
        }
    }

    public function update_password()
    {
        $post = $this->input->post();
        $res = $this->common_model->update_contractor_password($post);
        echo json_encode($res);
        exit;
    }
}
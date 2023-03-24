<?php

class Login extends CI_Controller {

    public function index()
    {
        $data['page_title'] = 'Login';
        $this->common_model->check_user_exist();
        $this->load->view('includes/js');

        $this->load->view('login');
        $this->load->view('includes/footer');
    }

    public function check_login()
    {
        $post = $this->input->post();
        $this->db->where('username', $post['user_name']);
        $res = $this->db->get('admin_master')->row_array();
        if ( ! empty($res))
        {
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

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function update_password()
    {
        $post = $this->input->post();
        $res = $this->common_model->update_admin_password($post);
        echo json_encode($res);
        exit;
    }
}

?>
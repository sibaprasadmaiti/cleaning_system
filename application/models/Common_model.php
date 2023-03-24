<?php

class Common_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function check_user_exist()
    {
        $this->db->select('username');
        $res = $this->db->get('admin_master')->row_array()['username'];
        if (empty($res))
        {
            $insert = array(
                'username' => 'admin',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'is_active' => 'Y'
            );
            $this->db->insert('admin_master', $insert);
        }
    }

    public function send_common_email($to, $subject, $message,$bcc="",$attachment=array())
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'tls://email-smtp.us-east-1.amazonaws.com',
            'smtp_port' => '465',
            'smtp_user' => 'AKIAJ7YG32CNFJBWQUXQ',
            'smtp_pass' => 'As4JvHf1yY09BwwbBlbT90IDz8702b1UH8M2vm69ZkOz',
            'mailtype' => 'html'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('admin@salasarauction.com', 'CS');
		$this->email->reply_to('pooja@oya.auction', 'CS');
		$this->email->to($to);
	    if ( ! empty($bcc))
        {
			$this->email->bcc(array($bcc,'admin@aonesalasar.com'));
		}
        else
        {
			$this->email->bcc('admin@aonesalasar.com');
		}

	    $bcc_array = array();
		$bcc_array [] = "admin@aonesalasar.com";
		$this->email->bcc($bcc_array);
        $this->email->subject($subject);
        $this->email->message($message);
        if(is_array($attachment))
		{
			if(!empty($attachment) && sizeof($attachment)>0)
			{
				foreach($attachment as $key=>$value)
				{
					$this->email->attach($value);
				}
			}
		}else{
			if(!empty($attachment) && $attachment!="")
			{
				$this->email->attach($attachment);
			}
		}
        if ( ! $this->email->send())
		{
			$this->email->clear();
            return false;
        }
		else
		{
			$this->email->clear();
            return true;
		}
    }

    public function subcontractor_listing()
    {
        return $this->db->get('sub_contractor')->result_array();
    }

    public function update_subcontractor($post)
    {
        if ( ! empty($post['subcontractor_id']))
        {
            $this->db->select('password');
            $this->db->where('sub_contractor_id', $post['subcontractor_id']);
            $password = $this->db->get('sub_contractor')->row_array()['password'];
            if ($password == $post['password'])
            {
            }
            else
            {
                $password = password_hash($post['password'], PASSWORD_DEFAULT);
            }
            $update = array(
                'name' => $post['name'],
                'email' => $post['email'],
                'password' => $password,
                'phone' => $post['phone'],
                'location' => $post['location'],
                'updated_by' => $this->session->userdata('admin_master_id')
            );
            $this->db->where('sub_contractor_id', $post['subcontractor_id']);
            if ($this->db->update('sub_contractor', $update))
            {
                // $message ="
                // Your Inspection Credentials are Username :".$post['email']."<br>
                // Password : ".$post['password'];
                // $this->send_common_email($post['email'], 'Your Inspection Credentials', $message);
                echo json_encode(array('status' => 'success', 'message' => 'Sub Contractor Data Updated Successfully.'));
            }
            else
            {
                echo json_encode(array('status' => 'failed', 'message' => 'Problem in updating Subcontractor Data. Please try again.'));
            }
            exit;
        }
        else
        {
            $this->db->select('sub_contractor_id');
            $this->db->where('email', $post['email']);
            $res = $this->db->get('sub_contractor')->row_array()['sub_contractor_id'];
            if ( ! empty($res))
            {
                echo json_encode(array('status' => 'failed', 'message' => 'Subcontractor Already Exist.'));
                exit;
            }
            $insert = array(
                'name' => $post['name'],
                'email' => $post['email'],
                'password' => password_hash($post['password'], PASSWORD_DEFAULT),
                'phone' => $post['phone'],
                'location' => $post['location'],
                'is_active' => 'Y',
                'updated_by' => $this->session->userdata('admin_master_id')
            );
            if ($this->db->insert('sub_contractor', $insert))
            {
                $message ="
                Your Inspection Credentials are Username :".$post['email']."<br>
                Password : ".$post['password'];
                $this->send_common_email($post['email'], 'Your Inspection Credentials', $message);

                echo json_encode(array('status' => 'success', 'message' => 'Sub Contractor Added Successfully.'));
            }
            else
            {
                echo json_encode(array('status' => 'failed', 'message' => 'Problem in adding Subcontractor. Please try again.'));
            }
            exit;
        }
    }

    public function get_subcontractor_data_by_id($id)
    {
        $this->db->where('sub_contractor_id', $id);
        return $this->db->get('sub_contractor')->row_array();
    }

    public function active_inactive_subcontractor($post)
    {
        $update = array(
            'is_active' => $post['active'],
            'updated_by' => $this->session->userdata('admin_master_id')
        );
        $this->db->where('sub_contractor_id', $post['id']);
        if ($this->db->update('sub_contractor', $update))
        {
            echo json_encode(array('status' => 'success', 'message' => 'Sub Contractor Data Updated Successfully.'));
        }
        else
        {
            echo json_encode(array('status' => 'failed', 'message' => 'Problem in updating Subcontractor Data. Please try again.'));
        }
        exit;
    }
    public function get_subcontractor_email($id)
    {
        $this->db->where('sub_contractor_id',$id);
        return $this->db->get('sub_contractor')->row_array();
    }
    public function save_log($data)
    {
        if ( ! empty($data['id']))
        {
            $this->db->where('id',$data['id']);
            if ($this->db->update('sub_contractor_email_log',$data))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            if ($this->db->insert('sub_contractor_email_log',$data))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        
    }

    public function send_mail_listing()
    {
        return $this->db->get('sub_contractor_email_log')->result_array();
    }

    public function send_mail_listing_contractor()
    {
        $this->db->where('sub_contractor_id', $this->session->userdata('sub_contractor_id'));
        return $this->db->get('sub_contractor_email_log')->result_array();
    }
    public function get_log($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('sub_contractor_email_log')->row_array();
    }
    public function delete_file($post)
    {
        $this->db->where('id',$post['log_id']);
        $attach = $this->db->get('sub_contractor_email_log')->row_array()['file_name'];
        $attach_arr = explode(',',$attach);
        $pos = array_search($post['file'], $attach_arr);
        unset($attach_arr[$pos]);
        if (file_exists('uploads/'.$post['file']))
        {
            unlink('uploads/'.$post['file']);
        }
        $file_list = implode(',',$attach_arr);
        $update_log = array('file_name'=>$file_list);
        $this->db->where('id',$post['log_id']);
        if ($this->db->update('sub_contractor_email_log',$update_log))
        {
            return array('status'=>'success','msg'=>'Deleted Successfully');
        }
        else
        {
            return array('status'=>'fail','msg'=>'Problem while deleting file');

        }
    }

    public function update_admin_password($post)
    {
        if ($post['new_password'] == $post['conf_password'])
        {
            $this->db->set('password', password_hash($post['new_password'], PASSWORD_DEFAULT));
            $this->db->where('admin_master_id', $this->session->userdata('admin_master_id'));
            if ($this->db->update('admin_master'))
            {
                return array('status' => 'success', 'message' => 'Password Updated Successfully.');
            }
            else
            {
                return array('status' => 'failed', 'message' => 'Problem in updating password. Please try again.');
            }
        }
        else
        {
            return array('status' => 'failed', 'message' => 'Password and confirm password must be same.');
        }
    }

    public function update_contractor_password($post)
    {
        if ($post['new_password'] == $post['conf_password'])
        {
            $this->db->set('password', password_hash($post['new_password'], PASSWORD_DEFAULT));
            $this->db->where('sub_contractor_id', $this->session->userdata('sub_contractor_id'));
            if ($this->db->update('sub_contractor'))
            {
                return array('status' => 'success', 'message' => 'Password Updated Successfully.');
            }
            else
            {
                return array('status' => 'failed', 'message' => 'Problem in updating password. Please try again.');
            }
        }
        else
        {
            return array('status' => 'failed', 'message' => 'Password and confirm password must be same.');
        }
    }
}
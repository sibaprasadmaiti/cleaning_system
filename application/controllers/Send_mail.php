<?php

class Send_mail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('pdf_helper');
       // $this->load->library('Htmlpdf');
        $this->load->helper('download');
        $this->load->model('common_model');
    }

    public function index()
    {
        $data['page_title'] = 'Send Mail';
        $data['send_mail_listing'] = $this->common_model->send_mail_listing();
        $data['contractor_list'] = $this->common_model->subcontractor_listing();
        $this->load->view('includes/header');
        $this->load->view('includes/left_nav');
        $this->load->view('send_mail', $data);
        $this->load->view('includes/footer');
    }
    public function send_msg()
    {
        ob_get_contents();
        ob_end_clean();
        $data = [];
        $errorUploadType = '';
        $statusMsg = '';
        if (!is_dir('uploads/')) {
            mkdir('uploads/', 0777, true);
        }
        if ( ! empty($_FILES['files']['name']))
        {
            $count = count($_FILES['files']['name']);
        }
        else
        {
            $count = 0;
        }
       
        for ($i = 0; $i < $count; $i++) {
            if ( ! empty($_FILES['files']['name'][$i])) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                // $config['max_size'] = '5000000';
                $config['file_name'] = $_FILES['files']['name'][$i];
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $data['totalFiles'][] = $filename;
                } else {
                    $errorUploadType .= $_FILES['files']['name'][$i] . ' | ';
                }
            }
        }

        $allowedExts = array("mp4");
        $extension = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);

        if ((($_FILES["fileToUpload"]["type"] == "video/mp4")) && ($_FILES["file"]["size"] < 20000) && in_array($extension, $allowedExts)) {
            if ($_FILES["fileToUpload"]["error"] > 0) {
                echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
            } else {
                echo "Upload: " . $_FILES["fileToUpload"]["name"] . "<br />";
                echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br />";
                echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br />";
                echo "Temp file: " . $_FILES["fileToUpload"]["tmp_name"] . "<br />";

                if (file_exists("uploads/" . $_FILES["fileToUpload"]["name"])) {
                    echo $_FILES["fileToUpload"]["name"] . " already exists. ";
                } else {
                    move_uploaded_file(
                        $_FILES["fileToUpload"]["tmp_name"],
                        "uploads/" . $_FILES["fileToUpload"]["name"]
                    );
                    echo "Stored in: " . "uploads/" . $_FILES["fileToUpload"]["name"];
                }
            }
        } else {
            echo "Invalid file";
        }

        if ( ! empty($this->input->post('log_id')))
        {
            $this->db->where('id',$this->input->post('log_id'));
            $attach = $this->db->get('sub_contractor_email_log')->row();
            if ( ! empty($attach))
            {
                $attach_arr = explode(',',$attach->file_name);
                foreach($attach_arr as $k=>$v)
                {
                    if ( ! empty($v))
                    {
                        $data['totalFiles'][] = $v;
                    }

                }
            }
        }
        if (!empty($errorUploadType)) {
            $statusMsg = '<br/>File Type Error: ' . trim($errorUploadType, ' | ');
            echo json_encode(array('status' => 'failed', 'message' => $statusMsg));
            exit;
        }

        if (!empty($data['totalFiles'])) {

            $data['message'] = $this->input->post('messages');
            $html = $this->load->view('pdf_report', $data, true);

            $html2pdf = new Htmlpdf('P', 'A4', 'en', true, 'UTF-8', array(5, 5, 5, 5));
            $html2pdf->pdf->SetTitle('File');
            $html2pdf->pdf->SetSubject('File');
            $html2pdf->pdf->SetKeywords('File');
            $file_name = "ImgFile" . rand() . ".pdf";
            $html2pdf->WriteHTML($html);
            header('Content-Type: application/pdf');
            if (!is_dir("uploads/pdf/file/")) {
                mkdir("uploads/pdf/file/", 0777, true);
            }

            $html2pdf->Output("uploads/pdf/file/" . $file_name, 'F');
            $sub = $this->input->post('sub');
            $message = $this->input->post('messages');
            $to_id = $this->input->post('contractor_email');
            $get_email = $this->common_model->get_subcontractor_email($to_id);
            $to = $get_email['email'];
            $attachment = 'uploads/pdf/file/' . $file_name;

            $email = $this->common_model->send_common_email($to, $sub, $message, $bcc = "");
            if ($email) {
                 $attachment = implode(',',$data['totalFiles']);

                $data = array(
                    'sub_contractor_id' => $to_id,
                    'sub' => $sub,
                    'msg' => $message,
                    'file_name' => $attachment,
                    'seen' => 'N',
                    'updated_by' => $this->session->userdata('admin_master_id'),
                    'attachment'=>$file_name
                );
                if ( ! empty($this->input->post('log_id')))
                {
                    $this->db->where('id',$this->input->post('log_id'));
                    $files = $this->db->get('sub_contractor_email_log')->row_array()['attachment'];
                    if (file_exists('uploads/pdf/file/'.$files))
                    {

                        unlink('uploads/pdf/file/'.$files);

                    }
                    $data['id'] = $this->input->post('log_id');
                }
               
                $log = $this->common_model->save_log($data);
                if ($log)
                {
                    $statusMsg = 'Files uploaded successfully!' . $errorUploadType;
                    echo json_encode(array('status' => 'success', 'message' => $statusMsg));
                    exit;
                }
                else
                {
                    $statusMsg = 'Error while saving log Please try again later';
                    echo json_encode(array('status' => 'fail', 'message' => $statusMsg));
                    exit;
                }
            } else {
                $statusMsg = 'Please Try Again Later';
                echo json_encode(array('status' => 'fail', 'message' => $statusMsg));
                exit;
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file." . $errorUploadType;
            echo json_encode(array('status' => 'fail', 'message' => $statusMsg));
            exit;
        }
    }
    public function get_log()
    {
        $id = $this->input->post('log_id');
        $response = $this->common_model->get_log($id);
        echo json_encode($response);
        exit;
    }
    public function delete_file()
    {
        $post = $this->input->post();
        $response = $this->common_model->delete_file($post);
        echo json_encode($response);
        exit;
    }
}

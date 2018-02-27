<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') <> 1) 
        {
            redirect(site_url('auth'));
        }
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'admin/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'admin/index.html';
            $config['first_url'] = base_url() . 'admin/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Admin_model->total_rows($q);
        $admin = $this->Admin_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'admin_data' => $admin,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
            $data['title']          = 'Brjamarketindo';
            $data['judul']          = 'Dashboard';
            $data['sub_judul']      = 'Admin';
            $data['content']        = 'admin/admin_list';
            $this->load->view('dashboard',$data);
    }

    public function read($id) 
    {
        $row = $this->Admin_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'username' => $row->username,
		'password' => $row->password,
		'email' => $row->email,
		'tgl_register' => $row->tgl_register,
	    );  
            $data['title']          = 'Brjamarketindo';
            $data['judul']          = 'Dashboard';
            $data['sub_judul']      = 'Admin Detail';
            $data['content']        = 'admin/admin_read';
            $this->load->view('dashboard',$data);
            
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('panel/admin'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('panel/admin/create_action'),
	    'id' => set_value('id'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'email' => set_value('email'),
	    'tgl_register' => set_value('tgl_register'),
	);  
        $data['title']          = 'Brjamarketindo';
        $data['judul']          = 'Dashboard';
        $data['sub_judul']      = 'Add Admin';
        $data['content']        = 'admin/admin_form';
        $this->load->view('dashboard',$data);
        
    }
    
    public function create_action() 
    {   
        $datestring = '%Y-%m-%d %h:%i:%s';
        $time = time();

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'password' => MD5($this->input->post('password',TRUE)),
		'email' => $this->input->post('email',TRUE),
		'tgl_register' => mdate($datestring, $time),
	    );

            $this->Admin_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('panel/admin'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('panel/admin/update_action'),
		'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'email' => set_value('email', $row->email),
		'tgl_register' => set_value('tgl_register', $row->tgl_register),
	    );  
            $data['title']          = 'Brjamarketindo';
            $data['judul']          = 'Dashboard';
            $data['sub_judul']      = 'Edit Admin';
            $data['content']        = 'admin/admin_form';
            $this->load->view('dashboard',$data);
            
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('panel/admin'));
        }
    }
    
    public function update_action() 
    {   
        $datestring = '%Y-%m-%d %h:%i:%s';
        $time = time();

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
        
        $password = $this->input->post('password',TRUE);
        
        if ($password == '') {
            $data = array(
                    'username' => $this->input->post('username',TRUE),
                    //'password' => MD5($this->input->post('password',TRUE)),
                    'email' => $this->input->post('email',TRUE),
                    'tgl_register' => mdate($datestring, $time),
                    );   
        } else {
            $data = array(
            		'username' => $this->input->post('username',TRUE),
            		'password' => MD5($this->input->post('password',TRUE)),
            		'email' => $this->input->post('email',TRUE),
            		'tgl_register' => mdate($datestring, $time),
            	    );
            }
        $this->Admin_model->update($this->input->post('id', TRUE), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('panel/admin'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $this->Admin_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('panel/admin'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('panel/admin'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	//$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	//$this->form_validation->set_rules('tgl_register', 'tgl register', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "admin.xls";
        $judul = "admin";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Username");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Register");

	foreach ($this->Admin_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->username);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_register);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=admin.doc");

        $data = array(
            'admin_data' => $this->Admin_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('admin/admin_doc',$data);
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-02-15 08:38:37 */
/* http://harviacode.com */
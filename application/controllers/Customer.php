<?php
defined('BASEPATH') or exit('No direct script access allowed');

class customer extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */


    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('customer_m');
    }

    public function index()
    {
        $data['row'] = $this->customer_m->get();
        $this->template->load('template', 'customer/customer_data', $data);
    }

    public function del($id)
    {
        $this->customer_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('customer') . "';</script>";
        // 	$this->session->set_flashdata('success', 'Data berhasil dihapus');
        // }
        // redirect('customer');
    }

    public function add()
    {
        $customer = new stdClass();
        $customer->customer_id = null;
        $customer->name = null;
        $customer->gender = null;
        $customer->phone = null;
        $customer->address = null;
        $data = array(
            'page' => 'add',
            'row' => $customer
        );
        $this->template->load('template', 'customer/customer_form', $data);
    }

    public function edit($id)
    {
        $query = $this->customer_m->get($id);
        if ($query->num_rows() > 0) {
            $customer = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $customer
            );
            $this->template->load('template', 'customer/customer_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='" . site_url('customer') . "';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->customer_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->customer_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='" . site_url('customer') . "';</script>";
    }
}

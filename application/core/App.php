<?php

defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    // template UI
    function template($page = null, $data = null)
    {
        $this->load->view('theme/version_1/header', $data);
        $this->load->view($page, $data);
        $this->load->view('theme/version_1/footer', $data);
    }
    function main($page = null, $data = null)
    {
        $this->load->view('theme/main/header', $data);
        $this->load->view($page, $data);
        $this->load->view('theme/main/footer', $data);
    }

    public function setPesan()
    {

        $pesan = [
            'required'           =>     '%s harus.',
            'valid_email'       =>     '%s format salah.',
            'numeric'           =>     '%s hanya angka.',
            'matches'           =>    '%s tidak sama %s.',
            'is_unique'           =>    '%s Sudah ada',
            'max_length'       =>      '%s max %s character.',
            'min_length'       =>      '%s min %s character.',
            'alpha_dash'       =>    '%s diisi alpabet, numerik, dan garis bawah.',
            'alpha'               =>      '%s diisi dengan format alpha a-z',
            'valid_url_format' =>      '%s format salah, exampel (htpp://www.xxxxx.com/xxx)',
            'is_natural'       =>      '%s harus format number 0-9',
            'decimal'              =>    '%s harus format desimal',
        ];
        foreach ($pesan as $key => $value) {
            $this->form_validation->set_message($key, $value);
        }
    }
}

/* End of file App.php */

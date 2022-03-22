<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('form');
		$this->load->model('emailmod');
    }

    public function index()
    {
        $this->load->helper('form');
        $this->load->view('create');
    }

    public function send_mail()
    {
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'dharmil.elsner@gmail.com';
        $config['smtp_pass'] = 'ddels68@';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = "text";
        $config['validation'] = TRUE; 

        $this->email->initialize($config);

        $from_email = "dharmil.elsner@gmail.com";
        $to_email = $this->input->post('email');
        $to_pass = $this->input->post('password');

        $mail = " This is a test mail to: ".$to_email." "." And The Password is: ".$to_pass;
        $this->email->from($from_email);
        $this->email->to($to_email);
        $this->email->subject('Testing Email');
        $this->email->message($mail);
        $this->email->send();
		// if($this->email->send())
		// {
		// 	echo "Email Sent Successfully!";
		// }
		// else
		// {
		// 	//echo "Try Again!";
		// }
		$this->load->Model('emailmod');
		$this->emailmod->insert($to_email, $to_pass);
		redirect('Welcome');
        /* echo $this->email->print_debugger();
        exit;
         */
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{	

		$this->load->view('welcome_message');
	}

	public function login()
	{
			
		if ($this->input->post()) {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('common/header');
                $this->load->view('login/login-bootstrap');
                $this->load->view('common/footer');
            } else { 
            	$username = $this->input->post('username');
            	$password = $this->input->post('password');
            	$result = $this->validateLogin($username, $password);

            	if ($result == false) {

            		$this->session->set_flashdata("Wrong_Credentials","Wrong Credentials");
            		redirect('welcome/login');
            	} else {
            		$this->session->set_userdata('sun-email', $username);
            		redirect('question/list');
            	}
            }
		} else {
			$this->load->view('common/header');
			$this->load->view('login/login-bootstrap');
			$this->load->view('common/footer');	
		}
	}

	public function validateLogin($username, $password)
	{
		
		$ldap_correct = false;
        $connection = ldap_connect('ldap://192.168.90.7', 389);
        ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
        if ($connection) {
            try {
                @$bind = ldap_bind($connection, 'STI' . "\\" . $username, $password);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            if (!$bind) {
                $ldap_correct = false;
            } else { 
                $ldap_correct = true;
            }
           return $ldap_correct;

        } else {
            return false;
        }


	}


	public function question()
	{
		$this->load->view('common/header');
		$this->load->view('question/question');
		$this->load->view('common/footer');
	}

	public function saveQuestion() 
	{
		
	}

	public function answer()
	{
		$this->load->view('common/header');
		$this->load->view('answer/answer');
		$this->load->view('common/footer');
	}

	public function saveAnswer() 
	{

	}

	public function questionList()
	{
		$this->load->view('common/header');
		$this->load->view('question/question-list');
		$this->load->view('common/footer');
	}


	public function logout() {
		$this->session->unset_userdata('sun-email');
		redirect('welcome/login');
	}

}


 // redirect("question/question-detail/$questionId");

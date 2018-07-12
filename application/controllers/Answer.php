<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
        if ($this->session->userdata('sun-email') == null) {
            redirect('welcome/login');
        }
        $this->load->view('common/header');
        $this->load->model('Question_model', 'QuestionModel');
        $this->load->model('Answer_model', 'AnswerModel');
    }
   
    public function giveAnswer()
    {
        
        $this->load->view('answer/answer');
        $this->load->view('common/footer');
    }

    
    public function saveAnswer()
    {
        if ($this->input->post()) {
            
            $this->form_validation->set_rules('answer_content', 'Answer', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('question/question-detail');
                $this->load->view('common/footer');    
            } else {
                $dataProvider['answer_content'] = $this->input->post('answer_content');
                $dataProvider['q_id'] = $this->input->post('question_id');
                $dataProvider['answered_by'] = $this->session->userdata('sun-email');
                $result = $this->AnswerModel->saveAnswer($dataProvider);

                if ($result) {
                    $questionId = $this->input->post('question_id');
                    redirect("question/question-detail/$questionId");
                }
            }
            
        } else {
                $this->load->view('question/question');
                $this->load->view('common/footer');    
        }
    }
}

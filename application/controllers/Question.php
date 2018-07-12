<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

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
    }
   
    public function askQuestion()
    {
        
        $this->load->view('question/question');
        $this->load->view('common/footer');
    }

    public function saveQuestion() 
    {

        if ($this->input->post()) {
            
            $this->form_validation->set_rules('question_title', 'Title', 'required');
            $this->form_validation->set_rules('question_description', 'Text', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('question/question');
                $this->load->view('common/footer');    
            } else {
                $dataProvider['question_title'] = $this->input->post('question_title');
                $dataProvider['question_description'] = $this->input->post('question_description');
                $dataProvider['created_by'] = $this->session->userdata('sun-email');
                $this->QuestionModel->saveQuestion($dataProvider);
                $dataProvider = $this->QuestionModel->getQuestions();
                redirect('question/questionList');
            }
            
        } else {
                $this->load->view('question/question');
                $this->load->view('common/footer');
        }
    }


    public function questionList()
    {

        $dataProvider = $this->QuestionModel->getQuestions();
        $this->load->view('question/question-list', ['dataProvider' => $dataProvider]);
        $this->load->view('common/footer');
    }

     public function searchQuestion()
    {
        $searchKeyword = $this->input->post('search_keyword');
        $dataProvider = $this->QuestionModel->getQuestionsBySearch($searchKeyword);
        $this->load->view('search/search', ['dataProvider' => $dataProvider]);
        $this->load->view('common/footer');
    }


    public function questionDetail($questionId) {
        $questionAlone = $this->QuestionModel->getQuestionAlone($questionId);
        $questionDetails = $this->QuestionModel->getAnswersOfQuestion($questionId);
        $this->load->view(
            'question/question-detail', 
            ['questionAlone' => $questionAlone, 'questionWithAnswers' => $questionDetails]
        );
    }
}

<?php
class Question_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        
    }


    function saveQuestion($dataProvider)
    {
        $query = $this->db->insert('questions', $dataProvider);         
    }


    function getQuestionAlone($questionId)
    {
        $query= $this->db->get_where('questions', ['id' => $questionId])->row();
        return $query;

    }

    function getAnswersOfQuestion($questionId) {
        $this->db->select('*');
        $this->db->from('questions');
        $this->db->join('answers', 'answers.q_id = questions.id');
        $this->db->where("questions.id", $questionId);
        $query = $this->db->get();
        return $query->result();
    }

    public function getQuestions()
    {
        $this->db->from('questions');
        $this->db->order_by("id", "DESC");
        $query = $this->db->get(); 
        return $query->result();
    }

    public function getQuestionsBySearch($keyword)
    {
        $this->db->from('questions');
        $this->db->like('question_description', $keyword);
        $this->db->or_like('question_title', $keyword);
        $query = $this->db->get(); 
        return $query->result();
    }
}
?>
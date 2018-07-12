<?php
class Answer_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    function saveAnswer($dataProvider)
    {
        $result = $this->db->insert('answers', $dataProvider);
        return $result;
    }
}
?>
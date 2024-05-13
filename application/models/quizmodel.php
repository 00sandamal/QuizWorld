<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quizmodel extends CI_Model
{
    public function getQuizes(){
        $this->db->select("quizId,title,createdBy");
        $this->db->from("quiz");

        $query = $this->db->get();
        return $query->result();
    }

    public function getQuestions($quizId){
        $this->db->select("questionId,question,choice1,choice2,choice3,answer,quizId");
        $this->db->where('quizId',$quizId);
        $this->db->from("questions");

        $query = $this->db->get();
        return $query->result();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QuizController extends CI_Controller
{
    public function playQuiz($quizId = NULL)
    {
        if ($quizId !== NULL) {
            $this->load->model('quizmodel');
            $this->data['questions'] = $this->quizmodel->getQuestions($quizId);
            $this->load->view('playquiz', $this->data);
        }
    }

    public function resultDisplay()
    {
        
        $answers = array();
        foreach ($_POST as $key => $value) {
            // Check if the posted data starts with 'questionId'
            if (strpos($key, 'questionId') === 0) {
                // Extract the question ID from the key
                $questionId = substr($key, 10); // Remove 'questionId' from the key
                // Add the answer to the array with the question ID as the key
                $answers[$questionId] = $value;
            }
        }
        $this->data['answers'] = $answers;
        $this->load->model('quizmodel');
        $this->data['results'] = $this->quizmodel->getQuestions(1);
        $this->load->view('result_display', $this->data);
    }
}

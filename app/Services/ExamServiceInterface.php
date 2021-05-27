<?php

namespace App\Services;

interface ExamServiceInterface
{
    public function countPointExam($params);

    public function getExamConfig($userId, $subjectId);

    public function getExamBySubjectId($subjectId);

    public function getQuestionCategoriesBySubjectId($subjectId);

    public function createExamConfig($params);

    public function randomQuestions($examConfigDetails);

    public function storeQuestionToTestOnline($examId, $dataQuestion);

    public function createTestOnline($examConfigId, $userId, $subjectId);

    public function setResultExam($examId, $score);

}

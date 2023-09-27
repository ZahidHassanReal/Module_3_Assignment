
<?php

$studentGrades = [
    "Student 1:" => ['Math' => 40, 'English' => 52, 'Science' => 40],
    "Student 2:" => ['Math' => 70, 'English' => 80, 'Science' => 33],
    "Student 3:" => ['Math' => 10, 'English' => 50, 'Science' => 48],
];

function calculateAverageGrade($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $numberOfSubjects = count($grades);
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / $numberOfSubjects;
        echo "{$student} average Grade- {$averageGrade}\n";
    }
}
calculateAverageGrade($studentGrades);
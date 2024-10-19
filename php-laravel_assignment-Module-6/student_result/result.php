<?php
function calculateResult($marks)
{
    $totalMarks = 0;
    $passed = true;

    foreach ($marks as $subjectMarks) {
        if ($subjectMarks < 0 || $subjectMarks > 100) {
            echo "Mark range is invalid\n";
            return;
        }

        $totalMarks += $subjectMarks;

        if ($subjectMarks < 33) {
            $passed = false;
        }
    }

    if (!$passed) {
        echo "Failed\n";
        return;
    }

    $averageMarks = $totalMarks / count($marks);

    switch ($averageMarks) {
        case $averageMarks >= 80:
            $grade = "A+";
            break;
        case $averageMarks >= 70:
            $grade = "A";
            break;
        case $averageMarks >= 60:
            $grade = "A-";
            break;
        case $averageMarks >= 50:
            $grade = "B";
            break;
        case $averageMarks >= 40:
            $grade = "C";
            break;
        case $averageMarks >= 33:
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: $averageMarks\n";
    echo "Grade: $grade\n";
}

// test cases
$studentMarks1 = [90, 110, 90, 88, 90];
calculateResult($studentMarks1);
echo "\n";
$studentMarks2 = [80, 50, 32, 55, 70];
calculateResult($studentMarks2);
echo "\n";
$studentMarks3 = [90, 90, 90, 90, 90];
calculateResult($studentMarks3);
echo "\n";
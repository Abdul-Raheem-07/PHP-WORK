<?php

require_once "Functions.php";


echo "----------------------------------------<br>";
echo "Student Management System<br>";


$studentName = "Abdul Raheem";
$studentId = "2026-SE-001";
$course = "Data Structures";
$semester = 3;


$fee = "50000";
$quantity = "1";
$discount = 10;


// ==========================================
// TYPE CASTING
// ==========================================

$fee = (float) $fee;
$quantity = (int) $quantity;


// ==========================================
// FEE CALCULATION
// ==========================================

$finalFee = calculateFinalFee(
    $fee,
    $quantity,
    $discount
);


echo "----------------------------------------<br>";

echo displayStudent(
    $studentName,
    $studentId,
    $course,
    $semester
);

echo "<br>";

echo "Final Fee: " . sprintf("%.2f", $finalFee) . "<br>";

echo "-----------------------------------------<br>";


// ==========================================
// GRADING
// ==========================================

$marks = 86;

$grade = getGrade($marks);

echo "Grade: $grade<br>";


// ==========================================
// COMPARISON VS IDENTITY
// ==========================================

var_dump($marks == 80);

echo "<br>";

var_dump($marks === 80);

echo "<br>";


// ==========================================
// REMARKS - SWITCH
// ==========================================

$switchRemark = getSwitchRemark($grade);

echo "Switch Remark: $switchRemark<br>";


// ==========================================
// REMARKS - MATCH
// ==========================================

$matchRemark = getMatchRemark($marks);

echo "Match Remark: $matchRemark<br>";

echo "----------------------------------------<br>";


// ==========================================
// SUBJECTS
// ==========================================

$subjects = [
    "Programming",
    "OOP",
    "Software Engineering",
    "Data Structures"
];


$i = 1;

foreach ($subjects as $subject) {

    echo $i . ". " . $subject . "<br>";

    $i++;
}

echo "----------------------------------------<br>";


// ==========================================
// MULTIPLICATION TABLE
// ==========================================

$number = 5;

echo "Multiplication Table of $number:<br>";

for ($i = 1; $i <= 10; $i++) {

    $result = $number * $i;

    echo "$number x $i = $result<br>";
}

echo "----------------------------------------<br>";


// ==========================================
// STAR PATTERN
// ==========================================

echo "Star Pattern:<br>";

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= $i; $j++) {

        echo "* ";
    }

    echo "<br>";
}

echo "----------------------------------------<br>";


// ==========================================
// CONTINUE
// ==========================================

echo "Subjects except OOP:<br>";

foreach ($subjects as $subject) {

    if ($subject == "OOP") {
        continue;
    }

    echo $subject . "<br>";
}

echo "----------------------------------------<br>";


// ==========================================
// SUBJECT MARKS
// ==========================================

$subjectMarks = [
    "Programming" => 85,
    "OOP" => 78,
    "Data Structures" => 86,
    "Software Engineering" => 90
];


echo "Checking subjects...<br><br>";


foreach ($subjectMarks as $subject => $mark) {

    echo "$subject: $mark<br>";

    if ($mark < 50) {

        echo "<br>Student failed — stopping evaluation.";

        break;
    }
}


echo "<br>----------------------------------------<br>";


// ==========================================
// DEFAULT PARAMETER
// ==========================================

echo greetStudent($studentName);

echo "<br>";

echo greetStudent(
    $studentName,
    "Good Morning"
);

echo "<br>----------------------------------------<br>";


// ==========================================
// VARIADIC FUNCTION
// ==========================================

$averageMarks = calculateAverage(
    85,
    78,
    86,
    90
);

echo "Average Marks: " . sprintf("%.2f", $averageMarks);

echo "<br>----------------------------------------<br>";


?>
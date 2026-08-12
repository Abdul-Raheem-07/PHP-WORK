<?php

echo "----------------------------------------<br>";
echo "Student Management System<br>";

$studentName = "Abdul Raheem";
$studentId = "2026-SE-001";
$course = "Data Structures";
$semester = 3;

$fee = "50000";
$quantity = "1";
$discount = 10;


// Type Casting
$fee = (float) $fee;
$quantity = (int) $quantity;


// Fee Calculation
$finalFee = $fee * $quantity - ($fee * $quantity * $discount / 100);


echo "----------------------------------------<br>";
echo "Student Name: $studentName<br>";
echo "Course: " . $course . "<br>";
echo "Semester: $semester<br>";
echo "Final Fee: " . sprintf("%.2f", $finalFee) . "<br>";
echo "-----------------------------------------<br>";


// ==========================================
// GRADING
// ==========================================

$marks = 86;
$grade = "";

if ($marks >= 85) {
    $grade = "A+";
} elseif ($marks >= 80) {
    $grade = "A";
} elseif ($marks >= 70) {
    $grade = "B";
} elseif ($marks >= 60) {
    $grade = "C";
} elseif ($marks >= 50) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Grade: $grade<br>";


// Comparison vs Identity

var_dump($marks == 80);

echo "<br>";

var_dump($marks === 80);

echo "<br>";


// ==========================================
// REMARKS - SWITCH
// ==========================================

switch ($grade) {

    case "A+":
        $switchRemark = "Excellent! Keep up the good work.";
        break;

    case "A":
        $switchRemark = "Great job! You're doing well.";
        break;

    case "B":
        $switchRemark = "Good effort! You can do better.";
        break;

    case "C":
        $switchRemark = "You're passing, but there's room for improvement.";
        break;

    case "D":
        $switchRemark = "You need to put in more effort.";
        break;

    default:
        $switchRemark = "You failed. Please seek help.";
        break;
}

echo "Switch Remark: $switchRemark<br>";


// ==========================================
// REMARKS - MATCH
// ==========================================

$matchRemark = match (true) {

    $marks >= 85 =>
        "Excellent! Keep up the good work.",

    $marks >= 80 =>
        "Great job! You're doing well.",

    $marks >= 70 =>
        "Good effort! You can do better.",

    $marks >= 60 =>
        "You're passing, but there's room for improvement.",

    $marks >= 50 =>
        "You need to put in more effort.",

    default =>
        "You failed. Please seek help."
};

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

?>
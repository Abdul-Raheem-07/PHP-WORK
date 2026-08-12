<?php

// ==========================================
// 1. CALCULATE FINAL FEE
// ==========================================

function calculateFinalFee(
    float $fee,
    int $quantity,
    float $discount
): float {

    $subtotal = $fee * $quantity;
    $discountAmount = ($subtotal * $discount) / 100;

    return $subtotal - $discountAmount;
}


// ==========================================
// 2. GET GRADE
// ==========================================

function getGrade(int $marks): string
{
    if ($marks >= 85) {
        return "A+";
    } elseif ($marks >= 80) {
        return "A";
    } elseif ($marks >= 70) {
        return "B";
    } elseif ($marks >= 60) {
        return "C";
    } elseif ($marks >= 50) {
        return "D";
    } else {
        return "F";
    }
}


// ==========================================
// 3. GET REMARK USING SWITCH
// ==========================================

function getSwitchRemark(string $grade): string
{
    switch ($grade) {

        case "A+":
            return "Excellent! Keep up the good work.";

        case "A":
            return "Great job! You're doing well.";

        case "B":
            return "Good effort! You can do better.";

        case "C":
            return "You're passing, but there's room for improvement.";

        case "D":
            return "You need to put in more effort.";

        default:
            return "You failed. Please seek help.";
    }
}


// ==========================================
// 4. GET REMARK USING MATCH
// ==========================================

function getMatchRemark(int $marks): string
{
    return match (true) {

        $marks >= 85 => "Excellent! Keep up the good work.",

        $marks >= 80 => "Great job! You're doing well.",

        $marks >= 70 => "Good effort! You can do better.",

        $marks >= 60 => "You're passing, but there's room for improvement.",

        $marks >= 50 => "You need to put in more effort.",

        default => "You failed. Please seek help."
    };
}


// ==========================================
// 5. GREETING - DEFAULT PARAMETER
// ==========================================

function greetStudent(
    string $name,
    string $message = "Welcome"
): string {

    return "$message, $name!";
}


// ==========================================
// 6. CALCULATE AVERAGE - VARIADIC
// ==========================================

function calculateAverage(float ...$marks): float
{
    if (count($marks) === 0) {
        return 0;
    }

    return array_sum($marks) / count($marks);
}


// ==========================================
// 7. DISPLAY STUDENT INFORMATION
// ==========================================

function displayStudent(
    string $name,
    string $studentId,
    string $course,
    int $semester
): string {

    return sprintf(
        "Student: %s | ID: %s | Course: %s | Semester: %d",
        $name,
        $studentId,
        $course,
        $semester
    );
}

?>
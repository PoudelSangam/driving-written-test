<?php
include_once("backend.php");
// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get submitted answers from the form
    $submittedAnswers = $_POST;

    // Query the database to get correct answers
    $sql = "SELECT question_id, correct_ans FROM question";
    $result = mysqli_query($conn, $sql);

    // Prepare an array to store correct answers
    $correctAnswers = array();

    // Process each question's correct answer
    while ($row = mysqli_fetch_assoc($result)) {
        $questionId = $row['question_id'];
        $correctAnswers[$questionId] = $row['correct_ans'];
    }

    // Process submitted answers and calculate score
    $correctCount = 0;
    foreach ($submittedAnswers as $questionId => $submittedAnswer) {
        if (strpos($questionId, 'question_') === 0) {
            $questionId = substr($questionId, 9); // Remove 'question_' prefix
            $correctAnswer = $correctAnswers[$questionId] ?? ''; // Get correct answer from array

            // Check if the submitted answer matches the correct answer
            if ($submittedAnswer == $correctAnswer) {
                $correctCount++;
            }
        }
    }

    // Update the user table with the correct count
    // Assuming you have a column named 'correct_count' in your user table to store the number of correct answers
    $userId = $_SESSION['student_roll_no']; // Assuming you have stored the user's ID in the session
    $sqlUpdate = "UPDATE user SET correct_ans = $correctCount WHERE user_rollno = $userId";
    if (mysqli_query($conn, $sqlUpdate)) {
        echo "Submitted successfully.";
    } else {
        echo "Error updating user table: " . mysqli_error($conn);
    }
} else {
    echo "Error: No data received.";
}
?>

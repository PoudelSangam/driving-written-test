<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

include '../db.php';
    $questions = $_POST['questions'];

    foreach ($questions as $question) {
        $questionText = $question['question'];
        $option1 = $question['option1'];
        $option2 = $question['option2'];
        $option3 = $question['option3'];
        $option4 = $question['option4'];
        $correctAnswer = $question['correct_answer'];

        // SQL query to insert the question into the 'question' table
        $sql = "INSERT INTO question (question, option_1, option_2, option_3, option_4, correct_ans) 
                VALUES ('$questionText', '$option1', '$option2', '$option3', '$option4', '$correctAnswer')";

        
         if ($conn->query($sql) === TRUE) {
             echo "Question inserted successfully.";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
    }

    // Close the database connection if necessary
 $conn->close();
}
?>

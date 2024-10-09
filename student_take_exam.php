<?php
include "backend.php";
?>
    <?php
    // Update start_exam column with current time
$current_time = date('H:i:s');
$sql_update_start_time = "UPDATE user SET start_exam = '$current_time' WHERE user_rollno = '$rollno'";
mysqli_query($conn, $sql_update_start_time);
    
    $sql3 = "UPDATE user SET exam_status = 1 WHERE user_rollno = '$rollno'";
    mysqli_query($conn, $sql3);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
   
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Quiz</title>
    <!-- Include Google Font for Nepali -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans Devanagari', sans-serif; /* Use the Nepali font */
        }
        /* Add custom CSS if needed */
        body {
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .card {
        margin-bottom: 20px;
    }

    .card-title {
        margin-bottom: 10px;
    }

    .form-check {
        margin-bottom: 10px;
    }

    #remainingTime {
        position: fixed;
        top: 10px;
        right: 10px;
        padding: 10px 15px;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        border-radius: 5px;
        z-index: 999;
    }

    .text-end {
        margin-top: 20px;
    }
    </style>
</head>

<body>

        <div class="remaining-time" id="remainingTime">Time Remaining: <span id="time"></span></div>
        <div class="container">
<form id="quizForm">
    <?php
    $question_number = 1; // Initialize question number
    while ($row1 = mysqli_fetch_assoc($result1)) {
    ?>
        <div class="card mb-4 bg-white shadow-md rounded-lg p-4">
            <div class="card-body">
                <h5 class="text-lg font-semibold mb-2"> <?php echo $question_number++; ?>. <?php echo $row1['question'] ?></h5>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="question_<?php echo $row1['question_id']; ?>" id="option1_<?php echo $row1['question_id']; ?>" value="A">
                    <label class="form-check-label" for="option1_<?php echo $row1['question_id']; ?>"><?php echo $row1['option_1'] ?></label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="question_<?php echo $row1['question_id']; ?>" id="option2_<?php echo $row1['question_id']; ?>" value="B">
                    <label class="form-check-label" for="option2_<?php echo $row1['question_id']; ?>"><?php echo $row1['option_2'] ?></label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="question_<?php echo $row1['question_id']; ?>" id="option3_<?php echo $row1['question_id']; ?>" value="C">
                    <label class="form-check-label" for="option3_<?php echo $row1['question_id']; ?>"><?php echo $row1['option_3'] ?></label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="question_<?php echo $row1['question_id']; ?>" id="option4_<?php echo $row1['question_id']; ?>" value="D">
                    <label class="form-check-label" for="option4_<?php echo $row1['question_id']; ?>"><?php echo $row1['option_4'] ?></label>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="text-end mt-4">
        <button type="button" id="submit" class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">Submit</button>
    </div>
</form>

            
            
            
        </div>
   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Your custom script -->
    <script>
        document.getElementById('submit').addEventListener('click', function() {
            var formData = new FormData(document.getElementById('quizForm'));
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'check.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                    window.location.href = 'show_result.php';
                } else {
                    alert('Request failed. Please try again later.');
                }
            };
            xhr.send(formData);
        });


        // Calculate end time (adjust according to your requirement)
        var endTime = new Date().getTime() + 10 * 60 * 1000; // 30 minutes from now
        var currentTime = new Date().getTime();

        function updateRemainingTime() {
            // Get current time
         
              currentTime += 1000;


            // Calculate remaining time
            var remainingTime = endTime - currentTime;

            // Convert remaining time to minutes and seconds
            var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

            // Format the remaining time
            var formattedTime = ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);
            if (remainingTime === 0) {
                alert('Time is up!');
                window.location.href = 'student_dashboard.php';
            }
            // Update the remaining time display
            document.getElementById('time').innerText = formattedTime;

        }

        // Update remaining time initially
        updateRemainingTime();

        // Update remaining time every second
        setInterval(updateRemainingTime, 1000);
    
   
    </script>
</body>

</html>
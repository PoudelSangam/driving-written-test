<?php
include_once("backend.php");
include_once("header.php");
?>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">


        <div class="flex-1 p-6">
            <main>
                <div class="container mx-auto">
                    <h1 class="text-2xl font-bold mb-4">Take a Test</h1>
                    <div id="result" class="mt-3"></div>
                    <button type="button" id="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        Start Test
                    </button>
                </div>
            </main>
        </div>


<script>
    document.getElementById('submit').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'show_exam_status.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                if (xhr.responseText.trim() === "false") {
                    document.getElementById('result').innerHTML = 'Exam not started yet.';
                } else {
                    window.location.href = 'student_take_exam.php';
                }
            } else {
                document.getElementById('result').innerHTML = 'An error occurred.';
            }
        };

        // Disable button and change text while checking status
        this.disabled = true;
        this.innerHTML = 'Checking...';

        // Function to send request every second
        let interval = setInterval(function() {
            xhr.send();
        }, 1000);

        // Clear interval after 5 seconds (or a suitable time)
        setTimeout(function() {
            clearInterval(interval);
            document.getElementById('submit').innerHTML = 'Start Test';
            document.getElementById('submit').disabled = false;
        }, 5000);
    });
</script>


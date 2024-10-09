<?php
include_once("backend.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .menu-hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Main Navigation -->
<header class="bg-gray-800 text-white">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="text-lg font-semibold">Dashboard</div>
        <button id="menuToggle" class="md:hidden focus:outline-none">
            <i class="bi bi-list text-2xl"></i>
        </button>
    
    
 <!-- Navigation Menu for Large Screens -->
<nav id="menu" class="bg-gray-900 p-4 hidden md:flex md:items-center md:justify-center">
    <ul class="md:flex md:space-x-8"> <!-- Changed to horizontal layout -->
        <li>
            <a href="student_exam.php" class="flex items-center p-2 rounded hover:bg-gray-700">
                <i class="fs-4 bi-house"></i>
                <span class="ml-2">Exam</span>
            </a>
        </li>
        <li>
            <a href="show_result.php" class="flex items-center p-2 rounded hover:bg-gray-700">
                <i class="fs-4 bi-table"></i>
                <span class="ml-2">Result</span>
            </a>
        </li>
        <li>
            <a href="logout.php" class="flex items-center p-2 rounded hover:bg-gray-700">
                <i class="fs-4 bi-door-open"></i> <!-- Logout icon -->
                <span class="ml-2">Log out</span>
            </a>
        </li>
    </ul>
</nav>


    </div>

    <!-- Mobile Navigation -->
    <nav id="mobileMenu" class="bg-gray-900 min-h-screen p-4 menu-hidden md:hidden">
        <ul class="space-y-2">
            <li>
                <a href="student_exam.php" class="flex items-center p-2 rounded hover:bg-gray-700">
                    <i class="fs-4 bi-house"></i>
                    <span class="ml-2">Exam</span>
                </a>
            </li>
            <li>
                <a href="show_result.php" class="flex items-center p-2 rounded hover:bg-gray-700">
                    <i class="fs-4 bi-table"></i>
                    <span class="ml-2">Result</span>
                </a>
            </li>
            <li>
                <a href="logout.php" class="flex items-center p-2 rounded hover:bg-gray-700">
                    <i class="fs-4 bi-door-open"></i> <!-- Logout icon -->
                    <span class="ml-2">Log out</span>
                </a>
            </li>
        </ul>
    </nav>

</header>

<script>
    document.getElementById('menuToggle').addEventListener('click', function() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('menu-hidden');
    });

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

</body>
</html>

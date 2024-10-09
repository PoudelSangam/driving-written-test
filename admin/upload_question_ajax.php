<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loop= $_POST['loop'];
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                <meta http-equiv="x-ua-compatible" content="ie=edge" />
                <title>Upload Questions</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <style>
                    /* Add custom CSS if needed */
                </style>
            </head>
            <body> 
                <div class="container">
                    <h1 class="my-4">Upload Questions</h1>
                    <form id="form">  
                        <?php 
                        for ($i = 1; $i <= $loop; $i++) { ?> 
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Question <?php echo $i ?></h5>
                                    <div class="mb-3">
                                        <label for="question" class="form-label">Question Text</label>
                                        <textarea class="form-control" name="questions[<?php echo $i ?>][question]" placeholder="Enter Question <?php echo $i ?>"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Options</label>
                                        <?php for ($j = 1; $j <= 4; $j++) { ?>
                                            <input type="text" class="form-control mb-2" name="questions[<?php echo $i ?>][option<?php echo $j ?>]" placeholder="Option <?php echo $j ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Correct Answer</label>
                                        <select class="form-select" name="questions[<?php echo $i ?>][correct_answer]">  
                                            <option selected disabled>Choose correct answer</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option> 
                                        </select> 
                                    </div>
                                </div>
                            </div>
                        <?php } ?> 
                        <div class="text-end">
                            <button type="button" id="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <script>
                    document.getElementById('submit').addEventListener('click', function() {
                        var formData = new FormData(document.getElementById('form'));
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'upload_question_process.php', true);
                        xhr.onload = function () {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                                window.location='upload_question.php';
                            } else {
                                alert('Request failed. Please try again later.');
                            }
                        };
                        xhr.send(formData);
                    });
                </script>
            </body>
            </html>
            
<?php
}
?>

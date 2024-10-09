<?php include 'upload_question_ajax.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Upload Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
</head>
<body> 
    <div class="container">
        <h1 class="my-4">Upload Questions</h1>
          <form id=  "form" method="post" action="upload_question_ajax.php">
          <label for="loop" class="form-label">Number of Questions</label> 
          <input type="number" name="loop" value="0">
          <button type="submit" name="loops" class="btn btn-primary">Submit</button>
          </form>
       
            
                            
     
</body>
</html>

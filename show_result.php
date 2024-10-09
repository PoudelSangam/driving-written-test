<?php
include_once("backend.php");
include_once("header.php");

?>

        <main>
        <div class="col py-3 content">
                    <h2>Quiz Result</h2>
                    <div class="container pt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    Correct Answers: 
                                   <?php
                                    echo $row["correct_ans"]; 
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
</main>  

<?php

$page_title = "Feedback";


include "db.php";

$success_msg = "";
$error_msg = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = trim($_POST["name"]);
    $rating = trim($_POST["rating"]);
    $feedback_text = trim($_POST["feedback_text"]);

    
    if ($name == "" || $rating == "" || $feedback_text == "") {
        $error_msg = "Please fill all the fields.";
    } else {
    
        $name = mysqli_real_escape_string($conn, $name);
        $rating = mysqli_real_escape_string($conn, $rating);
        $feedback_text = mysqli_real_escape_string($conn, $feedback_text);

        
        $sql = "INSERT INTO feedback (name, rating, feedback_text) VALUES ('$name', '$rating', '$feedback_text')";

        if (mysqli_query($conn, $sql)) {
            $success_msg = "Thank you for your feedback!";
        } else {
            $error_msg = "Something went wrong: " . mysqli_error($conn);
        }
    }
}

include "header.php";
?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-4">
            <span class="topic-badge">Feedback</span>
            <h2 class="section-title">Share Your Feedback</h2>
            <p class="text-muted col-lg-8 mx-auto">Your feedback helps us improve this Cloud Computing Portal.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card p-4">

                    <?php if ($success_msg != "") { ?>
                        <div class="alert alert-success"><?php echo $success_msg; ?></div>
                    <?php } ?>

                    <?php if ($error_msg != "") { ?>
                        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                    <?php } ?>

                    <form method="POST" action="feedback.php">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <select class="form-select" id="rating" name="rating">
                                <option value="">Select rating</option>
                                <option value="5">5 - Excellent</option>
                                <option value="4">4 - Good</option>
                                <option value="3">3 - Average</option>
                                <option value="2">2 - Below Average</option>
                                <option value="1">1 - Poor</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="feedback_text" class="form-label">Feedback</label>
                            <textarea class="form-control" id="feedback_text" name="feedback_text" rows="5" placeholder="Write your feedback here"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Submit Feedback</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>

<?php include "footer.php"; ?>

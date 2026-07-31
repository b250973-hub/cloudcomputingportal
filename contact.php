<?php

$page_title = "Contact Us";


include "db.php";

$success_msg = "";
$error_msg = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    
    if ($name == "" || $email == "" || $subject == "" || $message == "") {
        $error_msg = "Please fill all the fields.";
    } else {
        
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $subject = mysqli_real_escape_string($conn, $subject);
        $message = mysqli_real_escape_string($conn, $message);

        
        $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if (mysqli_query($conn, $sql)) {
            $success_msg = "Thank you! Your message has been sent successfully.";
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
            <span class="topic-badge">Contact</span>
            <h2 class="section-title">Contact Us</h2>
            <p class="text-muted col-lg-8 mx-auto">Have a question or suggestion about this portal? Send us a message below.</p>
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

                    <form method="POST" action="contact.php">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>

<?php include "footer.php"; ?>

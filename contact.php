<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

require 'includes/init.php';

$email = '';
$subject = '';
$message = '';
$sent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $errors = [];

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = 'Please enter a valid email address';
    }

    if ($subject == '') {
        $errors[] = 'Please enter a subject';
    }

    if ($message == '') {
        $errors[] = 'Please enter a message';
    }

    if (empty($errors)) {

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host = SMTP_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USER;
            $mail->Password = SMTP_PASS;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('sylwiar1@sylwiarosol.pl');
            $mail->addAddress($email);
            $mail->addReplyTo('sylwiar1@sylwiarosol.pl');
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            $sent = true;

        } catch (Exception $e) {

            $errors[] = $mail->ErrorInfo;

        }
    }
}

?>
<?php require 'includes/header.php'; ?>
<div class="main-container position-relative overflow-hidden p-3 p-md-5 text-center bg-body-tertiary">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <h1 class="display-3 text-uppercase fw-bold bg-dark text-light">Skontaktuj się z nami</h1>
      <h3 class="fw-normal .text-body-secondary mb-3 bg-dark text-light">Masz pytania? Napisz do nas!</h3>

<?php if ($sent) : ?>
    <p class="fw-normal .text-body-secondary mb-3 bg-dark text-light">Message sent.</p>
<?php else: ?>

    <?php if (! empty($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>    
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" id="formContact">

        <div class="form-group">
            <label for="email">Your email</label>
            <input class="form-control" name="email" id="email" type="email" placeholder="Your email" value="<?= htmlspecialchars($email) ?>">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input class="form-control" name="subject" id="subject" placeholder="Subject" value="<?= htmlspecialchars($subject) ?>">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" placeholder="Message"><?= htmlspecialchars($message) ?></textarea>
        </div>

        <button class="btn btn-success rounded-pill px-3" type="submit">Send</button>

    </form>
</div>
            </div>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>

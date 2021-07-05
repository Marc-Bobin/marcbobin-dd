<!-- "6". I am creating an if/else statement to check if the user left the form empty when clicking on submit -->
<?php 
// If the form is NOT empty, store the email address in the $_POST associative array
if (!empty($_POST['email'])) 
{

// If the the form IS empty, redirect the user on the following page 
} else {
    header('Location: ../index.php#subscribeAndSave');
    exit();
}
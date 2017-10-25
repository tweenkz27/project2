<?php

    // Header content
    include('./templates/header.php');

?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $email = $_POST['email'];

    
    
        
    // Check if the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $problem = false;
            
            if (empty($_POST['firstName'])) {
                $problem = true;
                print '<p class="text--error">Please enter your first name!</p>';
            }
            
            if (empty($_POST['lastName'])) {
                $problem = true;
                print '<p class="text--error">Please enter your last name!</p>';
            }
            
            if (empty($_POST['email'])) {
                $problem = true;
                print '<p class="text--error">Please enter your email!</p>';
            }
            
            if (empty($_POST['password'])) {
                $problem = true;
                print '<p class="text--error">Please enter a password!</p>';
            }
            
            if ($_POST['password'] != $_POST['confirm']) {
            	$problem = true;
            	print '<p class="text--error">Your password did not match!</p>';
            }
            
            
            
            if (!$problem) {
                print '<p class="text--success">You are now registered!</p>';
                
                // Clear posted values
                $_POST = [];
                
                
            } else {
                print '<p class="text--error">Please try again!</p>';
            }
            
            
            
        }
        
        
        

    	




?>
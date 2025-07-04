<?php
   include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/faq.css">
    <title>FAQ</title>
</head>
<body>
    <header>
        <h1>Help Hub <b style="color: #3d3d3d;">FAQ</b></h1>
    </header>

    <main>
        <section class="faq">
            <h2>General Questions</h2><br>
            <div class="faq-item">
                <h3><a href="signup.php">How do I create an account?</a></h3>
                <p>
                    To create an account, click the "Sign Up" link in the top right corner of the page and follow the instructions.
                </p>
            </div>

            <div class="faq-item">
                <h3><a href="edit.php">Can I change my password?</a></h3>
                <p>
                    Yes, you can change your password by going to your profile and clicking the "Update Profile" option.
                </p>
            </div>
            
            <div class="faq-item">
                <h3><a href="ticket.php">Can I send a ticket to the agent?</a></h3>
                <p>
                Yes, you can submit a ticket to our support agent if you click on the "Ticket" button on the navigation bar.
                </p>
            </div>
            
            <div class="faq-item">
                <h3><a href="sponsor.php">Can I be a sponsor of this?</a></h3>
                <p>
                Yes of course, you can click on the "Sponsership" button on the navigation bar to check our offers.
                </p>
            </div>
        </section>

    </main>
</body>
</html>


<?php 
    include "footer.php";  
?>

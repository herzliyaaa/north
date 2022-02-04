<?php

if (isset($_POST['submit'])) {

    $ch = curl_init();
    $parameters = array(
        'apikey' => '', //Your API KEY
        'number' => $_POST['num'],
        'message' => $_POST['msg'],
        'sendername' => 'SEMAPHORE'
    );
    curl_setopt($ch, CURLOPT_URL, 'https://api.semaphore.co/api/v4/messages');
    curl_setopt($ch, CURLOPT_POST, 1);

    //Send the parameters set above with the request
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));

    // Receive response from server
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    //Show the server response
    if (!$result) {
?>
        <script>
            alert('Message not sent!')
        </script>
    <?php
    } else {
        // echo $result;

    ?>
        <script>
            alert('Message sent!')
        </script>
    <?php
        }
        }
        ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/nav-time-date.js"></script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>
        <section>

            <div class="header">
                <h1>Compose Announcement</h1>

                <a href="announcements.php">
                    <button class="back-btn">Back</button>
                </a>
            </div>

            <div class="content">
                <form method="POST">
                    <dxiv class="compose-sms">
                        <div class="to">
                            <h5>To</h5>
                            <textarea name="num" id="home-address" rows="2"></textarea>
                        </div>
                        <div class="recipient-count">
                            <h4>Recipients: 0</h4>
                        </div>

                        <!-- <div class="subj">
                        <h5>Subject</h5>
                        <input type="text">
                    </div> -->

                        <div class="msg">
                            <h5>Message</h5>
                            <textarea name="msg" id="home-address" rows="2"></textarea>
                        </div>
                        <div class="char-count">
                            <h4>Characters:000/000</h4>
                        </div>

                        <div class="send-clear-btn">
                            <button type="submit" name="submit" class="send-btn">Send</button>
                            <button class="clear-btn">Clear</button>
                        </div>
                </form>
            </div>


            </div>
            </div>
        </section>
        </div>
    </main>
</body>

</html>

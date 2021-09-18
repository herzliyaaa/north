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
                <h1>Announcement History</h1>

                <a href="compose.php">
                    <button class="compose-btn"><svg fill="#f7f6fb" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" width="15px" height="15px">
                            <path
                                d="M 18.414062 2 C 18.158188 2 17.902031 2.0974687 17.707031 2.2929688 L 16 4 L 20 8 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z" />
                        </svg>
                        Compose</button>
                </a>
            </div>

            <div class="content">

                <div class="messages">
                    <div class="sms">
                        <div class="recipient">
                            <h3>All Residents</h3>
                        </div>
                        <div class="sms-time-date">
                            <h3>10:30 AM</h3>
                        </div>
                        <div class="subject">
                            <h2>UPDATE</h2>
                        </div>
                        <div class="message">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod veritatis perferendis
                                inventore quidem tempore odio, illo nihil, amet debitis ex est eaque facilis alias eos
                                dolores libero vitae, a exercitationem.</p>
                        </div>
                        <div class="sms-btn">
                            <a href="#">
                                <button class="sms-view">VIEW</button></a>
                            <button class="sms-delete">DELETE</button>
                        </div>
                    </div>

                    <div class="sms">
                        <div class="recipient">
                            <h3>All Residents</h3>
                        </div>
                        <div class="sms-time-date">
                            <h3>10:30 AM</h3>
                        </div>
                        <div class="subject">
                            <h2>MEETING</h2>
                        </div>
                        <div class="message">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod veritatis perferendis
                                inventore quidem tempore odio, illo nihil, amet debitis ex est eaque facilis alias eos
                                dolores libero vitae, a exercitationem.</p>
                        </div>
                        <div class="sms-btn">
                            <a href="#">
                                <button class="sms-view">VIEW</button></a>
                            <button class="sms-delete">DELETE</button>
                        </div>
                    </div>

                    <div class="sms">
                        <div class="recipient">
                            <h3>Barangay Officials</h3>
                        </div>
                        <div class="sms-time-date">
                            <h3>10:30 AM</h3>
                        </div>
                        <div class="subject">
                            <h2>UPDATE</h2>
                        </div>
                        <div class="message">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod veritatis perferendis
                                inventore quidem tempore odio, illo nihil, amet debitis ex est eaque facilis alias eos
                                dolores libero vitae, a exercitationem.</p>
                        </div>
                        <div class="sms-btn">
                            <a href="#">
                                <button class="sms-view">VIEW</button></a>
                            <button class="sms-delete">DELETE</button>
                        </div>
                    </div>
                </div>



            </div>
        </section>
        </div>
    </main>
</body>

</html>
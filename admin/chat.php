<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://yeshadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <title>Admin Chat</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="./vendor/tagify/dist/tagify.css" rel="stylesheet">
    <script src="chat.js"></script>
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .file-input-container {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            width: 100%;
        }

        .file-label {
            display: inline-block;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="file"] {
            display: none;
            margin-top: 10px;
        }

        .col-md-3,
        .col-md-2 {
            margin-top: 10px;
        }

        .write {
            bottom: 29px;
            left: 30px;
            height: 50px;
            padding-left: 8px;
            border: 1px solid var(--light);
            background-color: #eceff1;
            display: flex;
            width: calc(100% - 58px);
            border-radius: 5px;
        }

        .write .input-group {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .write input[type="text"] {
            flex-grow: 1;
            font-size: 16px;
            height: 40px;
            padding: 0 30px;
            color: var(--dark);
            border: 0;
            outline: none;
            background-color: #eceff1;
        }

        .write input[type="file"] {
            display: none;
        }

        .write .write-link {
            float: left;
            height: 42px;
        }

        .write .write-link.attach:before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 42px;
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/attachment.png');
            background-repeat: no-repeat;
            background-position: center;
        }

        .write .write-link.send:before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 42px;
            margin-left: 11px;
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/send.png');
            background-repeat: no-repeat;
            margin-right: 20px;
            background-position: center;
        }

        .style-1.active {
            background-color: #019dff;
            color: white;
            padding: 20px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div id="main-wrapper">
        <?php include 'components/navHeader.php'; ?>
        <?php include 'components/header.php'; ?>
        <?php include 'components/sidebar.php'; ?>

        <div class="content-body">
            <div class="container-fluid">
                <div class="row gx-0">
                    <div class="col-xl-12">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="chat-p shaprate">
                                    <div class="d-flex">
                                        <img src="../img/user-2-image.png" class="avatar avatar-lg rounded-circle" alt="">
                                        <div class="ms-2">
                                            <h6 class="mb-0 mt-2">Admin</h6>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            include '../db/dbCon.php';
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "SELECT * FROM messages WHERE email_address != 'admin@gmail.com' GROUP BY email_address ORDER BY timestamp DESC";
                            $result = $conn->query($sql);
                            ?>

                            <div class="row gx-0 w-100">
                                <div class="col-xl-4 col-lg-4 col-sm-4 col-md-4 chat-border mobile-chat">
                                    <div class="people-list dz-scroll">
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <hr>
                                                <div class="chat-p style-1" data-email="<?php echo $row['email_address']; ?>" onclick="fetchChatDetail('<?php echo $row['email_address']; ?>')">
                                                    <div class="d-flex" onclick="toggleMessageSend()">
                                                        <div class="avatar text-light rounded-circle d-flex align-items-center justify-content-center" style="background-color:#E8EBF0; width: 50px; height: 50px;">
                                                            <span style="font-size: 20px;"><?php echo substr($row['email_address'], 0, 1); ?></span>
                                                        </div>
                                                        <div class="ms-2">
                                                            <span style="font-size:16px" class="mb-0"><?php echo $row['email_address']; ?></span>
                                                            <span class="unread-indicator"></span>
                                                            <span style="font-size:14px"><strong>New Message:</strong> <?php echo $row['message']; ?><br></span>
                                                        </div>
                                                    </div>
                                                    <span><?php echo $row['timestamp']; ?></span>
                                                </div>
                                                <hr>
                                        <?php
                                            }
                                        } else {
                                            echo "<p>No chats Available</p>";
                                        }
                                        $conn->close();
                                        ?>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-8 col-sm-8 chat-border" id="chat-detail">
                                    <div id="chat-detail-content"></div>
                                    <div class="write" style="margin: 10px; display: none;" id="messageContainer">
                                        <form id="messageForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] . '?email=' . urlencode($user_email); ?>" enctype="multipart/form-data">
                                            <input type="hidden" name="email" value="<?php echo $user_email; ?>">
                                            <div class="input-group">
                                                <a href="javascript:;" class="write-link attach" onclick="document.getElementById('file').click(); return false;"></a>
                                                <input type="text" name="message" id="message" class="form-control" placeholder="Type your message here.." />
                                                <input type="file" name="file" id="file" style="display: none;">
                                                <button type="submit" class="write-link send border-0" id="sendButton"></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php include 'components/footer.php'; ?>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script src="./vendor/global/global.min.js"></script>
                            <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
                            <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
                            <script src="./vendor/apexchart/apexchart.js"></script>
                            <script src="./js/custom.js"></script>
                            <script src="./js/deznav-init.js"></script>
                            <script src="./js/demo.js"></script>
                            <script src="./js/styleSwitcher.js"></script>

                            <script>
                                function scrollToBottom() {
                                    var chatDetail = document.getElementById("chat-detail-content");
                                    chatDetail.scrollTop = chatDetail.scrollHeight;
                                }

                                function fetchChatDetail(emailAddress) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.onreadystatechange = function() {
                                        if (xhr.readyState == 4) {
                                            if (xhr.status == 200) {
                                                document.getElementById("chat-detail-content").innerHTML = xhr.responseText;
                                                setTimeout(scrollToBottom, 0); // Use setTimeout to ensure scrollToBottom is called after the DOM is updated
                                                setupSendMessageListener(emailAddress);
                                            } else {
                                                console.error("Error fetching chat details. Status code: " + xhr.status);
                                            }
                                        }
                                    };
                                    var encodedEmailAddress = encodeURIComponent(emailAddress);
                                    xhr.open("GET", "fetch_messages.php?email=" + encodedEmailAddress, true);
                                    xhr.send();
                                }

                                function setupSendMessageListener(emailAddress) {
                                    var sendMessageForm = document.getElementById("messageForm");
                                    sendMessageForm.onsubmit = function(e) {
                                        e.preventDefault();
                                        var message = document.getElementById("message").value;
                                        var fileInput = document.getElementById("file").files[0];
                                        var formData = new FormData();
                                        formData.append('email', emailAddress);
                                        formData.append('message', message);
                                        formData.append('file', fileInput);

                                        var xhr = new XMLHttpRequest();
                                        xhr.onreadystatechange = function() {
                                            if (xhr.readyState == 4) {
                                                if (xhr.status == 200) {
                                                    fetchChatDetail(emailAddress);
                                                    document.getElementById("message").value = '';
                                                    document.getElementById("file").value = '';
                                                    setTimeout(scrollToBottom, 0); // Use setTimeout to ensure scrollToBottom is called after the DOM is updated
                                                } else {
                                                    console.error("Error sending message. Status code: " + xhr.status);
                                                }
                                            }
                                        };
                                        xhr.open("POST", "send_message.php", true);
                                        xhr.send(formData);
                                    };
                                }

                                document.addEventListener('DOMContentLoaded', function() {
                                    var chatDivs = document.querySelectorAll('.style-1');
                                    chatDivs.forEach(function(div) {
                                        div.addEventListener('click', function() {
                                            chatDivs.forEach(function(div) {
                                                div.classList.remove('active');
                                            });
                                            div.classList.add('active');
                                        });
                                    });
                                });

                                function toggleMessageSend() {
                                    var messageSendDiv = document.getElementById("messageContainer");
                                    messageSendDiv.style.display = "block";
                                }
                            </script>
</body>
</html>

<?php

//fetch_user_chat_history.php

include('database_connection.php');

session_start();

echo fetch_user_chat_history($_SESSION['email'], $_POST['to_user_email'], $connect);

?>